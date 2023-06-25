// sorting array 
<?php echo "<br>" ?>
// create a array 'NUMBERS' and use a build in function that sorts an array in descending order
<?php echo "<br>" ?>

<?php
    $numbers = array("Milk" => 4, 'Rice' => 3, 'oil' => 2);
    arsort($numbers);
    print_r($numbers);
?>