<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>

<body>
    <h1>Blood Donation Camp</h1>
    <div>
        <h2>Registration Form</h2>
        <form action="connect.php" method="post">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" /><br><br>
            <label for="email">email</label><br>
            <input type="email" id="email" name="email" /><br><br>
            <label for="phone">Phone</label><br>
            <input type="number" id="phone" name="phone" /><br><br>
            <label for="bgroup">Blood Group</label><br>
            <input type="text" id="bgroup" name="bgroup" /><br><br>
            <input type="submit">
        </form>
    </div>
</body>

</html>