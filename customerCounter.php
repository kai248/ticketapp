<?php 
    require('config/config.php');
    require('config/db.php');

    // create query
    $query = 'SELECT * FROM counter';

    // get result
    $result = mysqli_query($conn, $query);

    // fetch data
    $counters = mysqli_fetch_all($result,  MYSQLI_ASSOC);
    // var_dump($counters);

    // free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);
?>

    <div class="container">
        <?php foreach($counters as $counter): ?>
            <div class="<?php echo $counter['counter_status'];?>box" style="text-align:center">
                <br></br>
                <span class="<?php echo $counter['counter_state'];?>"></span> 
                <h2>Counter <?php echo $counter['counter_id']; ?></h2>
                <h3>< <?php if ($counter['counter_status'] == "offline"){
                    echo $counter['counter_status'];
                } else{   
                    echo $counter['counter_ticket'];} ?> ></h3>
            </div>
        <?php endforeach; ?>
    </div>

