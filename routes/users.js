const express = require('express');
const User = require('../models/user'); //Requires the user modal. Note that we use .. because we have to go up one directory before we can get to the models directory.
const passport = require('passport');
const authenticate = require('../authenticate');
const cors = require('./cors');

const router = express.Router();

router.get('/', cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res, next) => {
    User.find()
    .then(users => {
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(users);
    })
    .catch(err => next(err));
});

//This endpoint will allow a new user to register on our website.
router.post('/signup', cors.corsWithOptions, (req, res) => {
    User.register( //This is using the mongoose local passport plugins.
        new User({username: req.body.username}),
        req.body.password,
        (err, user) => {
            if (err) {
                res.statusCode = 500;
                res.setHeader('Content-Type', 'application/json');
                res.json({err: err});
            } else { //If there’s no error, we use passport to authenticate the user.
                if (req.body.firstname) {
                    user.firstname = req.body.firstname;
                }
                if (req.body.lastname) {
                    user.lastname = req.body.lastname;
                }
                user.save(err => {
                    if (err) {
                        res.statusCode = 500;
                        res.setHeader('Content-Type', 'application/json');
                        res.json({err: err});
                        return;
                    }
                    passport.authenticate('local')(req, res, () => {
                        res.statusCode = 200;
                        res.setHeader('Content-Type', 'application/json');
                        res.json({success: true, status: 'Registration Successful!'});
                    });
                });
            }
        }
    );
});

router.post('/login', cors.corsWithOptions, passport.authenticate('local'), (req, res) => {
    const token = authenticate.getToken({_id: req.user._id}); //We are using getToken that we get from another module. For the payload, we are including the user id from the request object.
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json');
    res.json({success: true, token: token, status: 'You are successfully logged in!'}); //Note that we added token: token to the response to add the token we just created.
});

router.get('/logout', cors.corsWithOptions, (req, res, next) => {
    if (req.session) { //if there’s a session
        req.session.destroy(); //This will destroy the session. It deletes the session file on the server side, and if the client tries to use that session to authenticate, it won’t work anymore as the session is gone now.
        res.clearCookie('session-id'); //This is an express message that will be used on the object to clear the cookie. Session-id is what we called the cookie in the other part of the code.
        res.redirect('/'); //this will redirect the user to the root path, which will just be localhost:300/
    } else {
        const err = new Error('You are not logged in!');
        err.status = 401;
        return next(err);
    }
});

router.get('/facebook/token', passport.authenticate('facebook-token'), (req, res) => {
    if (req.user) {
        const token = authenticate.getToken({_id: req.user._id});
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json({success: true, token: token, status: 'You are successfully logged in!'});
    }
});

module.exports = router;