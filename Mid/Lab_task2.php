<!DOCTYPE html>
<html>
    <head>
       <style>
        #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003366;
    }
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
       </style>   
    </head>
    <body>
<center>
        <h2>Student Registration</h2>
        
<form onsubmit="return handleSubmit()">
    <label>Full Name:<br></label>
        <input type="text" id="name">
    <br>
    <label>Email:<br></label>
        <input type="email"id="email">
    <br>
    <label>Password:<br></label>
        <input type="password"id="password">
    <br>
    <label>Confirm Password:<br></label>
        <input type="password" id="confirmpassword">
    <br><br>
    <input type="submit" value="Register" style="background-color: #003366;color: white;">
</form>
<div id="output"></div>
<div id="error"></div>
</center>
<script>
    function handleSubmit(){
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmpassword = document.getElementById("confirmpassword").value;

         var outputDiv = document.getElementById("output");
         var errorDiv = document.getElementById("error");

         errorDiv.innerHTML = "";
         outputDiv.innerHTML = "";

         if (name === "" || email === "" || password === "" || confirmpassword === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
        if(password !== confirmpassword){
            alert("Passwords do not match!");
            return false;
        }
        outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
      `;
      return false;
    }
</script>
<center>
        <h2>Course Registration</h2>
    <form>
    <label>Course Name:<br></label>
        <input type="text" id="Course"><br><br>
      <input type="submit" value="Add Course" style="background-color: #003366;color: white;">  
      <script> 
        </script>
</center>
    </body>
</html>            