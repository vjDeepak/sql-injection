<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Portal</title>
    <style type="text/css">
        input[type=text],input[type=password] {
            padding: 16px;
            margin: 8px;
            border:1px solid #f1f1f1;
            letter-spacing: 1px;
            border-radius: 3px;
        }
        input[type=submit]{
            margin: left 8px;
            width: 274px
            border-radius: 3px
            border: 1px solid #4285f4;
            bachground-colour: #4285f4;
            padding: 16px;
            colour: white;
            font-weight: 600px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form>
        <input type="text" name="username" placeholder="Username" /><br />
        <input type="password" name="password" placeholder="********" /><br
        />
        <input type="submit" name="login" value="LOGIN"/>
    </form>
</body>
</html>
