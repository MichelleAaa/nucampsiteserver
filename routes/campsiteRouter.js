const express = require('express');
const Campsite = require('../models/campsite');
const authenticate = require('../authenticate');
const cors = require('./cors'); //The ./ is important here. If you omit it, node will think you are trying to import the cores module instead of the cors.js file.

const campsiteRouter = express.Router();

campsiteRouter.route('/')
.options(cors.corsWithOptions, (req, res) => res.sendStatus(200))
// cors.cors is added for get, while cors.corsWithOptions is added for most others below. (with options checks that the request is coming from a whitelisted address, while cors.cors does not.)
.get(cors.cors, (req, res, next) => {
    Campsite.find()
    .populate('comments.author') //This will tell the app that when the campsite docs are received, to populate the author field of the comments sub-document by finding the user document that matches the objectID that’s stored there.
//It means that when we have our modal with the author field, we want the data to populate, not just the ObjectId.

    .then(campsites => {
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(campsites); //This method will send json data to the client in the response stream, and it will automatically close the response stream afterwards, so we won’t need to use the res.end() method after it.
    })
    .catch(err => next(err)); //catch any errors. Next(err) will pass off the error to express to handle the error, as it’s built in already. 
})

//Note that authenticate.verifyUser causes a user to be added into the req object – otherwise the user isn’t there.
.post(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res, next) => {
    Campsite.create(req.body) //This creates a new campsite document from the req.body, which should contain the information from the campsite to post.
    //The json middleware should have already parsed it into a format we can work with.
    //Mongo will check to make sure the data fits the schema that we defined. We don’t have to worry about whether the correct data was supplied, as mongoose will check this and notify of any errors. (For example, if there’s a required name field missing, that would be an error.)
    .then(campsite => { //campsite will contain information about what was logged.
        console.log('Campsite Created ', campsite);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(campsite); //We send the information about the posted document to the client. 
    })
    .catch(err => next(err));
})
.put(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res) => {
    res.statusCode = 403;
    res.end('PUT operation not supported on /campsites');
})
.delete(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res, next) => {
    Campsite.deleteMany() //The empty parameter list means that every document in the Campsite collection will be deleted.
    .then(response => { //We chain on a .then to access the return value from the deleteMany() method.
//The response object will contain information about everything deleted. 
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(response);
    })
    .catch(err => next(err));
});

campsiteRouter.route('/:campsiteId')
.options(cors.corsWithOptions, (req, res) => res.sendStatus(200))
.get(cors.cors, (req, res, next) => {
    Campsite.findById(req.params.campsiteId) //We pass in the id stored in the route parameter. – this ID is being parsed from the HTTP address as whatever the client entered that they want to access.
    .populate('comments.author')
    .then(campsite => { 
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(campsite);
    })
    .catch(err => next(err));
})
.post(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res) => {
    res.statusCode = 403;
    res.end(`POST operation not supported on /campsites/${req.params.campsiteId}`);
})
.put(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res, next) => {
    Campsite.findByIdAndUpdate(req.params.campsiteId, { //Finds by the id.
        $set: req.body
    }, { new: true }) //Third argument is to get back information about the updated document as a result from this method. 
    .then(campsite => {
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(campsite);
    })
    .catch(err => next(err));
})
.delete(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res, next) => {
    Campsite.findByIdAndDelete(req.params.campsiteId)
    .then(response => {
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(response);
    })
    .catch(err => next(err));
});

campsiteRouter.route('/:campsiteId/comments')
.options(cors.corsWithOptions, (req, res) => res.sendStatus(200))
.get(cors.cors, (req, res, next) => {
    Campsite.findById(req.params.campsiteId) // the parameter is a single campsite.
    .populate('comments.author')
    .then(campsite => {
        if (campsite) {
            res.statusCode = 200;
            res.setHeader('Content-Type', 'application/json');
            res.json(campsite.comments);
        } else { //if there’s no campsite object returned:
            err = new Error(`Campsite ${req.params.campsiteId} not found`);
            err.status = 404;
            return next(err);
        }
    })
    .catch(err => next(err));
})
.post(cors.corsWithOptions, authenticate.verifyUser, (req, res, next) => {
    Campsite.findById(req.params.campsiteId)
    .then(campsite => {
        if (campsite) {
            req.body.author = req.user._id; //This will ensure that when the comment is saved, it will have the id of the user who submitted the comment in the author field, so later we can use it to populate another field.
            campsite.comments.push(req.body);
            campsite.save() //this is required to save the change since vanilla JS methods like .push don't auto-save like the DB specific methods.
            .then(campsite => {
                res.statusCode = 200;
                res.setHeader('Content-Type', 'application/json');
                res.json(campsite);
            })
            .catch(err => next(err));
        } else {
            err = new Error(`Campsite ${req.params.campsiteId} not found`);
            err.status = 404;
            return next(err);
        }
    })
    .catch(err => next(err));
})
.put(cors.corsWithOptions, authenticate.verifyUser, (req, res) => {
    res.statusCode = 403;
    res.end(`PUT operation not supported on /campsites/${req.params.campsiteId}/comments`);
})
.delete(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res, next) => {
    Campsite.findById(req.params.campsiteId)
    .then(campsite => {
        if (campsite) {
            for (let i = (campsite.comments.length-1); i >= 0; i--) {
                campsite.comments.id(campsite.comments[i]._id).remove(); //this will loop through and remove every comment by it’s unique id.
            }
            campsite.save()
            .then(campsite => {
                res.statusCode = 200;
                res.setHeader('Content-Type', 'application/json');
                res.json(campsite);
            })
            .catch(err => next(err));
        } else {
            err = new Error(`Campsite ${req.params.campsiteId} not found`);
            err.status = 404;
            return next(err);
        }
    })
    .catch(err => next(err));
});

campsiteRouter.route('/:campsiteId/comments/:commentId')
.options(cors.corsWithOptions, (req, res) => res.sendStatus(200))
.get(cors.cors, (req, res, next) => {
    Campsite.findById(req.params.campsiteId)
    .populate('comments.author')
    .then(campsite => {
        if (campsite && campsite.comments.id(req.params.commentId)) { //this will retrieve the value of the commentID that was passed in.
            res.statusCode = 200;
            res.setHeader('Content-Type', 'application/json');
            res.json(campsite.comments.id(req.params.commentId));
        } else if (!campsite) {
            err = new Error(`Campsite ${req.params.campsiteId} not found`);
            err.status = 404;
            return next(err);
        } else { //If the comment value is not truthy
            err = new Error(`Comment ${req.params.commentId} not found`);
            err.status = 404;
            return next(err);
        }
    })
    .catch(err => next(err));
})
.post(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res) => {
    res.statusCode = 403;
    res.end(`POST operation not supported on /campsites/${req.params.campsiteId}/comments/${req.params.commentId}`);
})
.put(cors.corsWithOptions, authenticate.verifyUser, (req, res, next) => {
    Campsite.findById(req.params.campsiteId)
    .then(campsite => {
        if (campsite && campsite.comments.id(req.params.commentId) && campsite.comments.id(req.params.commentId).author._id.equals(req.user._id)
        ) {
            if (req.body.rating) { //Checks if a new rating has been passed in.
                campsite.comments.id(req.params.commentId).rating = req.body.rating;
            }
            if (req.body.text) { //Updates the text if there is a text in req.body
                campsite.comments.id(req.params.commentId).text = req.body.text;
            }
            campsite.save() //saves to mongoDB server.
            .then(campsite => {
                res.statusCode = 200;
                res.setHeader('Content-Type', 'application/json');
                res.json(campsite);
            })
            .catch(err => next(err));
        } else if (!campsite) {
            err = new Error(`Campsite ${req.params.campsiteId} not found`);
            err.status = 404;
            return next(err);
        } else if (!campsite.comments.id(req.params.commentId).author._id.equals(req.user._id)) {
            err = new Error(`Unauthorized - User is not the Author of this comment.`);
            err.status = 403;
            return next(err);
        } else {
            err = new Error(`Comment ${req.params.commentId} not found`);
            err.status = 404;
            return next(err);
        }
    })
    .catch(err => next(err));
})
.delete(cors.corsWithOptions, authenticate.verifyUser, (req, res, next) => {
    Campsite.findById(req.params.campsiteId)
    .then(campsite => {
        if (campsite && campsite.comments.id(req.params.commentId) && campsite.comments.id(req.params.commentId).author._id.equals(req.user._id)
        ) {
            campsite.comments.id(req.params.commentId).remove();
            campsite.save()
            .then(campsite => {
                res.statusCode = 200;
                res.setHeader('Content-Type', 'application/json');
                res.json(campsite);
            })
            .catch(err => next(err));
        } else if (!campsite) {
            err = new Error(`Campsite ${req.params.campsiteId} not found`);
            err.status = 404;
            return next(err);
        } else if (!campsite.comments.id(req.params.commentId).author._id.equals(req.user._id)){
            err = new Error(`Unauthorized - User is not the Author of this comment.`);
            err.status = 403;
            return next(err);
        } else {
            err = new Error(`Comment ${req.params.commentId} not found`);
            err.status = 404;
            return next(err);
        }
    })
    .catch(err => next(err));
});

module.exports = campsiteRouter;