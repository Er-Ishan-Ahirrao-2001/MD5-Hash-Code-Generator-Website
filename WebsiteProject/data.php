<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 Code Generator</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <p>Credentials Upload Successfully!</p>
    <h1>Welcome to MD5 Hash Code Generator!</h1>

    
    <!-- for file -->
    <form action="file.php" method="post">
    <div class="file">
        <h3>Hash Code For Files!</h3>
        <label> Choose the File to upload: </label>
        <input type="file" name="myfile" id="myFile" required/>
        <br>
        <br>
        <button type="submit">Generate</button>
    </div>
    </form>
    <br>
    <form action="info.php" method="post">
    <div class="text">
        <h3>Hash Code For Text!</h3>
        <label> Insert the String: </label>
        <input name="msg" id="msg" placeholder="Enter Your Text" required>
        <br>
        <br>
        <button type="submit">Generate</button>
        <br>
        <br>
    </div>
    </form>
    <div class="data">
        <h1>What is Hash Function??</h1>
        <br>
        <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp An MD5 hash is created by taking a string of an any length and encoding it into a 128-bit fingerprint. Encoding the same string using the MD5 algorithm will always result in the same 128-bit hash output. MD5 hashes are commonly used with smaller strings when storing passwords, credit card numbers or other sensitive data in databases such as the popular MySQL. This tool provides a quick and easy way to encode an MD5 hash from a simple string of up to 256 characters in length.MD5 hashes are also used to ensure the data integrity of files. Because the MD5 hash algorithm always produces the same output for the same given input, users can compare a hash of the source file with a newly created hash of the destination file to check that it is intact and unmodified.An MD5 hash is NOT encryption. It is simply a fingerprint of the given input. However, it is a one-way transaction and as such it is almost impossible to reverse engineer an MD5 hash to retrieve the original string.</p>
        <br>
    </div>
</body>
</html>