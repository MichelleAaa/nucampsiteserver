const passport = require('passport');
const LocalStrategy = require('passport-local').Strategy;
const User = require('./models/user');
const JwtStrategy = require('passport-jwt').Strategy;
const ExtractJwt = require('passport-jwt').ExtractJwt; //This is an object that will provide us with several helper functions. We will use it to extract the JWT token later.
const jwt = require('jsonwebtoken'); // Used to create, sign, and verify tokens
const config = require('./config.js');
const FacebookTokenStrategy = require('passport-facebook-token');

exports.local = passport.use(new LocalStrategy(User.authenticate())); //passport.use is how we add the plugin that we want to use to our passport implementation. For this one, we want to use LocalStrategy instance, which requires a callback function that will authenticate the username/password against the locally stored username/password.
// We are calling authenticate on User. 

//When the user has been authenticated, Deserialization needs to happen. When we receive the data, we need to serialize it.
passport.serializeUser(User.serializeUser());
passport.deserializeUser(User.deserializeUser());

exports.getToken = function(user) { //function that receives an object, called user. The user object contains a user ID.
    return jwt.sign(user, config.secretKey, {expiresIn: 3600}); //This returns a token. The sign() method, will take the user object as the first argument. The second argument is the secretKey string. The third is an additional token for expiration. 3600 is one hour. We could change the timing. In a real app you would often set it to be a few days or longer. If you leave this off, the token would never expire, which is not advisable.
};

const opts = {}; //This will contain the options for the JWT strategy.
//Now we set two properties on the opts object:
opts.jwtFromRequest = ExtractJwt.fromAuthHeaderAsBearerToken(); //fromauthheaderasbearertoken specifies how the JSON web token should be extracted from the incoming request token. A JSON can be sent in the header, in the body, or even as a URL query parameter. This option sets the method for which the server expects the token to be sent. So this is asking for it in the header, and as a bearer token. This is the simplest method.
opts.secretOrKey = config.secretKey; //This option allows us to apply the JWT strategy with the key. 

exports.jwtPassport = passport.use(
    new JwtStrategy(
        opts,
        (jwt_payload, done) => {
            console.log('JWT payload:', jwt_payload);
//this goes through the user collection using the findOne method.
//it returns the done() callback with different values for each scenario.
            User.findOne({_id: jwt_payload._id}, (err, user) => { //We pass in the jwt_payload-._id and the callback. – we are using findOne to try to find the user with a matching id as the one in the jwt payload ID.
                if (err) {
                    return done(err, false);
                } else if (user) { //If there’s a user, and no error:
                    return done(null, user);
                } else { //There was no error, but also no user was found:
                    return done(null, false);
                }
            });
        }
    )
);

exports.verifyUser = passport.authenticate('jwt', {session: false}); //This is used to verify that an incoming request is from a verified user. We are passing in jwt to say we want to authenticate with jwt. The second argument of an object with session:false is to say that we aren’t going to be using sessions. 

exports.verifyAdmin = ((req, res, next) => {
    if (req.user.admin){
        return next();
    } else {
        const err = new Error("You are not authorized to perform this operation!");
        err.status = 403;
        return next(err);
    }
});

exports.facebookPassport = passport.use(
    new FacebookTokenStrategy(
        {
            clientID: config.facebook.clientId,
            clientSecret: config.facebook.clientSecret
        }, 
        (accessToken, refreshToken, profile, done) => {
            User.findOne({facebookId: profile.id}, (err, user) => {
                if (err) {
                    return done(err, false);
                }
                if (!err && user) {
                    return done(null, user);
                } else {
                    user = new User({ username: profile.displayName });
                    user.facebookId = profile.id;
                    user.firstname = profile.name.givenName;
                    user.lastname = profile.name.familyName;
                    user.save((err, user) => {
                        if (err) {
                            return done(err, false);
                        } else {
                            return done(null, user);
                        }
                    });
                }
            });
        }
    )
);