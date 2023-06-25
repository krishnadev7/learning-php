// Birthday Countdown
<?php echo "<br>"?>
//create a simple 'birthday countdown' script that counts the number of days between current day and your birthday
<?php echo "<br>"?>

<?php
    $targetDays = mktime(0,0,0,03,28,2023);
    $today = time();
    $diffrenceDays = ($targetDays - $today);
    $days = (int)($diffrenceDays / 86400);
    echo "Days till next birthday: ". $days ." days!";
?>