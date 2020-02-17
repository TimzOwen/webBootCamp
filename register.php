<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" rel="stylesheet" type="text/css" href="style.css">
    <title>Form Validation</title>
</head>
<body>
    <div id="wrapper">
        <form method="POST" action="index.php" onsubmit="return validate()" name="vform">
            <div>
                <input type="text" name="username" class="textInput" placeholder="User Name">
                <div id="name_error" class="val_error"></div>
            </div>
            <div>
                <input type="email" name="email" class="textInput" placeholder="User Email">
                <div id="email_error" class="val_error"></div>
            </div>
            <div>
                <input type="password" name="password" class="textInput" placeholder="User Password">
            </div>
            <div>
                <input type="password" name="password_confirmation" class="textInput" placeholder="Password Confirmation">
                <div id="password_error" class="val_error"></div>
            </div>
            <div>
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </form>
    </div>
</body>
</html>
<!--adding java script for validation-->
<script>
    //get user inputs from the form
    var username = document.forms["vforms"][username];
    var email = document.forms["vforms"][email];
    var password = document.forms["vforms"][password];
    var password_confirmation = document.forms["vforms"][password_confirmation];

    //getting all error inputs 
    var name_error = getElementById("name_error");
    var email_error = getElementById("email_error");
    var password_error = getElementById("password_error");

    //setting all event listeners 
    username.addEventListener("blur",nameVerify,true);
    email.addEventListener("blur",emailVerify,true);
    password.addEventListener("blur",passwordVerify,true);

    //validation function
    function validate(){
    if(username.value == ""){
        username.style.border = "1px solid red";
        name_error.textContent="Username is required";
        username.focus();
        return false;
    }
    //validate email;
    if(email.value == ""){
        email.style.border = "1px solid red";
        email_error.textContent="password is required";
        password.focus();
        return false;
    } 
    //validate email;
    if(password.value == ""){
        password.style.border = "1px solid red";
        password_error.textContent="password is required";
        password.focus();
        return false;
    }    
    }
    //event handler functions 
    //Name 
    function nameVerify()
    {
        if(username.value != null){
            username.style.border="1px solid #5E6E66";
            name_error.innerHTML="";
            return true;            
        }
    }
    //Email
    function emailVerify()
    {
        if(email.value != null){
            email.style.border="1px solid #5E6E66";
            email_error.innerHTML="";
            return true;            
        }
    }
    //password
    function passwordVerify()
    {
        if(password.value != null){
            password.style.border="1px solid #5E6E66";
            passsword.innerHTML="";
            return true;            
        }
    }
    
</script>