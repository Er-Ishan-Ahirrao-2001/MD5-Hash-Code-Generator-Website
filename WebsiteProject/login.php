<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
     <!-- <h1>hjgssfv</h1> -->
     <script src="https://kit.fontawesome.com/97131004c6.js" crossorigin="anonymous"></script>
     <div class="head">
        <h1><u>Sign In</u></h1>
     </div>

     <div class="info">
        <form action="index.php" method="post">
            <pre>Please fill the info for further process</pre>
            <br>
            <br>
            <i class="fa-solid fa-user"></i>
            <input type="text" name="fname" id="fname" placeholder="First Name" required>
            <br>
            <br>
            <i class="fa-solid fa-user"></i>
            <input type="text" name="lname" id="lname" placeholder="Last Name" required>
            <br>
            <br>
            <i class="fa-solid fa-phone"></i>
            <input type="text" name="mobile" id="mobile" placeholder="Mobile No." required>
            <br>
            <br>
            <i class="fa-solid fa-envelope"></i>
            <input type="text" id="mail" name="mail" placeholder="Email" required>
            <br>
            <br>
            <button type="submit" value="disabled">Submit</button>
        </form>
     </div>
</body>
</html>