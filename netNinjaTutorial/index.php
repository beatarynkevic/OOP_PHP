<!-- https://www.youtube.com/watch?v=Hs5m2jLw7_A&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=13 -->

<?php

if(isset($_POST['submit'])) {

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="new-user">
    <h2>Create new user</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Username: </label>
        <input type="text" name="username">
        <label>Email: </label>
        <input type="text" name="email">

    <input type="submit" value="submit" name="submit">
    </form>
</div>
    
</body>
</html>