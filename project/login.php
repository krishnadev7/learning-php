<?php
include_once('./includes/header.php')
?>
<div>
    <h1>Login</h1>
    <p>No Account? <a href="register.php">Register here!</a></p>
    <form action="./includes/login-inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <button type="submit" name="submit">Login</button>
    </form>
</div>
<?php
include_once('./includes/footer.php')
?>