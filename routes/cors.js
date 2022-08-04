const cors = require('cors');

const whitelist = ['http://localhost:3000', 'https://localhost:3443']; //The whitelist is an array of string values. We are listing the two route/port locations we are using.
const corsOptionsDelegate = (req, callback) => {
    let corsOptions;
    console.log(req.header('Origin'));
    if(whitelist.indexOf(req.header('Origin')) !== -1) { //We are checking the requestheader(‘Origin’) == indexOf returns -1 if the indexOf value wasn’t found. If the item was found, then: (aka the item was found in the whitelist):
        corsOptions = { origin: true }; //origin: true means we are allowing this to be accepted.
    } else { //if the value was -1, then it wasn’t found in the list.
        corsOptions = { origin: false }; //origin is false, to reject it.
    }
    callback(null, corsOptions); //null means no error occurred, and we pass in the coresOptions object.
};

exports.cors = cors(); //This calls cors, and returns to us a middleware function. It will allow cors for all functions. (This will be used for the wildcard option, to accept all requests.)
exports.corsWithOptions = cors(corsOptionsDelegate); //This calls cors, but passes in the corsOptionsDelegate function as an argument, which will check to see if the incoming request is on the whitelist or not.

//If there’s a rest api endpoint, where we only want to accept from a whitelisted origin, then we will use the second export. For requests where we want to accept all cross-origin requests, we will use the first one, exports.cors.