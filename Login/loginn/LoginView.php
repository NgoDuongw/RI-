<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/styless.css">
</head>
<body>
    <div class="form-container">
        <form action="loginController.php" method="post">
            <h3>Login now</h3>
            <?php 
                if(isset($error)){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>dont't have an account? <a href="./register_form.php">register now</a></p>
        </form>
    </div>
</body>
</html>
