<?php
include_once('./includes/header.php')
?>
<div>
    <h1>Register</h1>
    <p>Already have an Account? <a href="login.php">login here!</a></p>
    <form action="./includes/register-inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirmPassword" placeholder="password">
        <button type="submit" name="submit">Register</button>
    </form>
</div>
<?php
include_once('./includes/footer.php')
?>