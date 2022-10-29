<?php 
    require('config/config.php');
    require('config/db.php');

    // create query for retrieving 'now serving number'
    $nowServingQuery = 'SELECT * FROM ticket WHERE NOT ticket_solved = "NO" ORDER BY ticket_id DESC LIMIT 1';
    $latestNumberQuery = 'SELECT * FROM ticket ORDER BY ticket_id DESC LIMIT 1';

    // get result
    $nowServingResult = mysqli_query($conn, $nowServingQuery);
    $latestNumberResult = mysqli_query($conn, $latestNumberQuery);
    
    // fetch data into array
    $nowServing = mysqli_fetch_assoc($nowServingResult);
    $lastestNumber = mysqli_fetch_assoc($latestNumberResult);

    // var_dump($nowServing);
    // var_dump($lastestNumber);

    // free result from memory
    mysqli_free_result($nowServingResult);
    mysqli_free_result($latestNumberResult);

    //close connection
    mysqli_close($conn);
?>

<html>
    <h3>Now Serving: <?php 
    if (empty($nowServing)){
        echo "-";
    } else {
        echo $nowServing['ticket_id'];
    } ;?></h3>
    <h3>Last Number: <?php 
    if (empty($lastestNumber)){
        echo "-";
    } else {
        echo $lastestNumber['ticket_id'];
    } ;?></h3>
</html>


