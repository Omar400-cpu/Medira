// Importing Database Models of Users
const Admins = require('../models/Admin');
const User = require('../models/User');
// Importing Modules
const path = require('path');

function login(req, res) {
    var query = { Username: req.body.Email, Password: req.body.Password };
  
    let adminPromise = Admins.findOne(query); 
    let userPromise = User.findOne(query);
  
    Promise.all([adminPromise, userPromise])
      .then(results => {
        let adminResult = results[0];
        let userResult = results[1];
  
        if (adminResult != null) {
          req.session.user = adminResult;
          req.session.role = 'Admin';
          res.redirect('/admin');
        } else if (userResult != null) {
          req.session.user = userResult;
          req.session.role = 'User'; 
          res.redirect('/user');
        } else {
          res.status(401).send('Invalid credentials');
        }
      })
      .catch(err => {
        console.log(err);
        res.status(500).send('Internal server error');
      });
  };
async function addUser(req,res){
try{
  let Full_name=req.body.fullName;
  let email=req.body.email;
  const query={Username:email,Name:Full_name} 
  let user = await User.findOne(query);
  console.log('checking user')
  if(user){
    res.json({message:"User already exists"});
  }  
  else{
    let password=req.body.password;
    let birthdate=new Date(req.body.month+"/"+req.body.day+"/"+req.body.year);
    let phonenumber=req.body.phoneNumber;
    let Gender=req.body.gender;
    console.log(Gender);
    let user = new User({
            Name: Full_name,
            phoneNum:phonenumber,
            gender: Gender,
            DateOfBirth: birthdate,
            Username: email,
            Password: password
    }); 
    await user.save()
        .then(()=>{
            res.redirect('/user/signed');
        })
  }
}
catch(error){
  console.error(error);  // Log the error for debugging
  res.status(500).json({ message: "Internal server error" });
}
}
async function checkCredentials(req,res){
  var query = { Username: req.body.Email, Password: req.body.Password };
  var found=false;
  await Admins.find(query)
  .then(result=>{
      if(result.length>0){
          found=true;
      }
  })
  .catch(err=>{
      console.log(err);
  });
  await Instructors.find(query)
  .then(result=>{
      if(result.length>0){
          found=true;
      }
  })
  .catch(err=>{
      console.log(err);
  });
  await Learners.find(query)
  .then(result=>{
      if(result.length>0){
          found=true;
      }
  })
  .catch(err=>{
      console.log(err);
  });
  if(found){
      res.send('Success');
  }else{
      res.send('Fail');
  }
}
module.exports = {
  login,checkCredentials,
  addUser
};