const express = require('express');
const authenticate = require('../authenticate');
const multer = require('multer');//Used here to set up Express to accept file uploads. -- Adds file/files and body objects to request object. (Files contain a file and additional info about the file or an array containing multiple files + additional info per file.)
const cors = require('./cors');

//Multer provides this method which takes an object containing configuration settings. The first is destination, which takes a function. Cb is the callback function. 
const storage = multer.diskStorage({
    destination: (req, file, cb) => {
        cb(null, 'public/images'); //null means there’s no error. The second argument is the path we want to save it to. (here, it’s public/images)
    },
    filename: (req, file, cb) => {
        cb(null, file.originalname) //null for no error, and file.originalname will make sure that the name on the server will be the same on the client-side. If you don’t set this, Multer by default will give some random string as the name of the file. In some cases that’s fine.
    }
});

const imageFileFilter = (req, file, cb) => { //Here we are using regex. If file.originalname.match(regex) – looks for extension of jbg or jpeg or png or gif. – It will check if the file extension is NOT one of these image file extensions.
    if(!file.originalname.match(/\.(jpg|jpeg|png|gif)$/)) {
        return cb(new Error('You can upload only image files!'), false); //the second argument of false tells multer to reject this file upload.
    }
    cb(null, true); //Call the callback with null, meaning there’s no error, and true, which tells multer to accept the file.
};

const upload = multer({ storage: storage, fileFilter: imageFileFilter});//These are object properties

//These settings are to configure the router itself:

const uploadRouter = express.Router();

// Using method chaining
uploadRouter.route('/')
.options(cors.corsWithOptions, (req, res) => res.sendStatus(200))
.get(cors.cors, authenticate.verifyUser, authenticate.verifyAdmin, (req, res) => {
    res.statusCode = 403;
    res.end('GET operation not supported on /imageUpload');
})
//Note that while we have set up the rest of the routers, only the post router does something.
//upload.single(‘imageFile’) means we are expecting an upload of a single file, and the file name is ‘imageFile’. When this happens, multer will take over and handle any upload errors.
.post(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, upload.single('imageFile'), (req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'application/json');
    res.json(req.file); //multer adds a file property to the request object. We are sending that information back to the client to confirm to the client that the file has been received correctly. 
})
.put(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res) => {
    res.statusCode = 403;
    res.end('PUT operation not supported on /imageUpload');
})
.delete(cors.corsWithOptions, authenticate.verifyUser, authenticate.verifyAdmin, (req, res) => {
    res.statusCode = 403;
    res.end('DELETE operation not supported on /imageUpload');
});

module.exports = uploadRouter;