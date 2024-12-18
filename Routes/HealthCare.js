//Importing Modules
const express=require('express');
var bodyParser=require('body-parser');
//Setting up router
const router=express.Router();
router.use(bodyParser.json());
//Importing Users' controller
const path = require('path');
const HealthCare = require('../Controllers/User');
// router.use((req, res, next) => {
//     if (req.session.user === undefined && req.session.user == null) {
//         next();
//     }
//     else {
//         res.render('Error', { message: 'You don\'t have an authority to access this page',user: (req.session.user === undefined ? "" : req.session.user) })
//     }
// });
//Get Methods of User

router.get('/', (req, res) => {
    res.render('index', {
        user: req.session.user === undefined ? "" : req.session.user,
        role: req.session.role === undefined ? "" : req.session.role
    });
});
router.get('/DiscussionForum', (req, res) => {
    res.render('DiscussionForum',{user: (req.session.user === undefined ? "" : req.session.user)});
});
router.get('/logout', (req, res) => {
    req.session.destroy();
    res.redirect('/');
  });
module.exports = router;