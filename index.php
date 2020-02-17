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