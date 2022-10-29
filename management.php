<?php 
    require('config/config.php');
    require('config/db.php');

    /****************************************************  Counter 1 ****************************************************/
    // check for status change
    if(isset($_POST['statusOne'])){
        $query = "SELECT * FROM counter WHERE counter_id = 1";
        $result = mysqli_query($conn, $query);
        $status = mysqli_fetch_assoc($result);
        if ($status['counter_status'] == "offline"){
            $update = "UPDATE counter SET counter_status='online', counter_state='free' WHERE counter_id = 1";
            $valueOne = "Go Offline";
        }else {
            $update = "UPDATE counter SET counter_status='offline',counter_state='offline' WHERE counter_id = 1";
        }
        
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // complete ticket
    if(isset($_POST['completeOne'])){

        $update = "UPDATE counter SET counter_state='free', counter_ticket = 0 WHERE counter_id = 1";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }

        $update = "UPDATE ticket SET ticket_solved='YES' WHERE ticket_counter = 1 ORDER BY ticket_id DESC LIMIT 1";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // check for next call
    if(isset($_POST['callOne'])){
        $query = "SELECT * FROM ticket WHERE ticket_solved = 'NO' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $ticket = mysqli_fetch_assoc($result);
        if (empty($ticket)){
            echo '<script>alert("No tickets in the waiting queue. ")</script>';
        } else{
            $number = $ticket['ticket_id'];
            $update = "UPDATE counter SET counter_state='busy', counter_ticket = '$number' WHERE counter_id = 1";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
            $update = "UPDATE ticket SET ticket_solved='WIP', ticket_counter = 1 WHERE ticket_id = '$number'";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
        }
    }

    /****************************************************  Counter 2 ****************************************************/
    // check for status change
    if(isset($_POST['statusTwo'])){
        $query = "SELECT * FROM counter WHERE counter_id = 2";
        $result = mysqli_query($conn, $query);
        $status = mysqli_fetch_assoc($result);
        if ($status['counter_status'] == "offline"){
            $update = "UPDATE counter SET counter_status='online', counter_state='free' WHERE counter_id = 2";
            $valueTwo = "Go Offline";
        }else {
            $update = "UPDATE counter SET counter_status='offline',counter_state='offline' WHERE counter_id = 2";
        }
        
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // complete ticket
    if(isset($_POST['completeTwo'])){

        $update = "UPDATE counter SET counter_state='free', counter_ticket = 0 WHERE counter_id = 2";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }

        $update = "UPDATE ticket SET ticket_solved='YES' WHERE ticket_counter = 2 ORDER BY ticket_id DESC LIMIT 1";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // check for next call
    if(isset($_POST['callTwo'])){
        $query = "SELECT * FROM ticket WHERE ticket_solved = 'NO' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $ticket = mysqli_fetch_assoc($result);
        if (empty($ticket)){
            echo '<script>alert("No tickets in the waiting queue. ")</script>';
        } else {
            $number = $ticket['ticket_id'];
            $update = "UPDATE counter SET counter_state='busy', counter_ticket = '$number' WHERE counter_id = 2";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
            $update = "UPDATE ticket SET ticket_solved='WIP', ticket_counter = 2 WHERE ticket_id = '$number'";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
        }
    }

    /****************************************************  Counter 3 ****************************************************/
    // check for status change
    if(isset($_POST['statusThree'])){
        $query = "SELECT * FROM counter WHERE counter_id = 3";
        $result = mysqli_query($conn, $query);
        $status = mysqli_fetch_assoc($result);
        if ($status['counter_status'] == "offline"){
            $update = "UPDATE counter SET counter_status='online', counter_state='free' WHERE counter_id = 3";
            $valueThree = "Go Offline";
        }else {
            $update = "UPDATE counter SET counter_status='offline',counter_state='offline' WHERE counter_id = 3";
        }
        
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // complete ticket
    if(isset($_POST['completeThree'])){

        $update = "UPDATE counter SET counter_state='free', counter_ticket = 0 WHERE counter_id = 3";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }

        $update = "UPDATE ticket SET ticket_solved='YES' WHERE ticket_counter = 3 ORDER BY ticket_id DESC LIMIT 1";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // check for next call
    if(isset($_POST['callThree'])){
        $query = "SELECT * FROM ticket WHERE ticket_solved = 'NO' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $ticket = mysqli_fetch_assoc($result);
        if (empty($ticket)){
            echo '<script>alert("No tickets in the waiting queue. ")</script>';
        } else {
            $number = $ticket['ticket_id'];
            $update = "UPDATE counter SET counter_state='busy', counter_ticket = '$number' WHERE counter_id = 3";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
            $update = "UPDATE ticket SET ticket_solved='WIP', ticket_counter = 3 WHERE ticket_id = '$number'";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
        }
    }

    /****************************************************  Counter 4 ****************************************************/
    // check for status change
    if(isset($_POST['statusFour'])){
        $query = "SELECT * FROM counter WHERE counter_id = 4";
        $result = mysqli_query($conn, $query);
        $status = mysqli_fetch_assoc($result);
        if ($status['counter_status'] == "offline"){
            $update = "UPDATE counter SET counter_status='online', counter_state='free' WHERE counter_id = 4";
            $valueFour = "Go Offline";
        }else {
            $update = "UPDATE counter SET counter_status='offline',counter_state='offline' WHERE counter_id = 4";
        }
        
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // complete ticket
    if(isset($_POST['completeFour'])){

        $update = "UPDATE counter SET counter_state='free', counter_ticket = 0 WHERE counter_id = 4";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }

        $update = "UPDATE ticket SET ticket_solved='YES' WHERE ticket_counter = 4 ORDER BY ticket_id DESC LIMIT 1";
        if(!mysqli_query($conn, $update)){
            echo 'ERROR: '.mysqli_error($conn);
        }
    }

    // check for next call
    if(isset($_POST['callFour'])){
        $query = "SELECT * FROM ticket WHERE ticket_solved = 'NO' LIMIT 1";
        $result = mysqli_query($conn, $query);
        $ticket = mysqli_fetch_assoc($result);
        if (empty($ticket)){
            echo '<script>alert("No tickets in the waiting queue. ")</script>';
        } else {
            $number = $ticket['ticket_id'];
            $update = "UPDATE counter SET counter_state='busy', counter_ticket = '$number' WHERE counter_id = 4";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
            $update = "UPDATE ticket SET ticket_solved='WIP', ticket_counter = 4 WHERE ticket_id = '$number'";
            if(!mysqli_query($conn, $update)){
                echo 'ERROR: '.mysqli_error($conn);
            }
        }
    }

        // check current status (Closed window)
        $query1 = "SELECT * FROM counter WHERE counter_id = 1";
        $result1 = mysqli_query($conn, $query1);
        $status1 = mysqli_fetch_assoc($result1);
        // echo "check1";
        if ($status1['counter_status'] == "offline"){
            $valueOne = "Go Online";
        }else {
            $valueOne = "Go Offline";
        }
        $query2 = "SELECT * FROM counter WHERE counter_id = 2";
        $result2 = mysqli_query($conn, $query2);
        $status2 = mysqli_fetch_assoc($result2);
        // echo "check2";
        if ($status2['counter_status'] == "offline"){
            $valueTwo = "Go Online";
        }else {
            $valueTwo = "Go Offline";
        }
        $query3 = "SELECT * FROM counter WHERE counter_id = 3";
        $result3 = mysqli_query($conn, $query3);
        $status3 = mysqli_fetch_assoc($result3);
        // echo "check3";
        if ($status3['counter_status'] == "offline"){
            $valueThree = "Go Online";
        }else {
            $valueThree = "Go Offline";
        }
        $query4 = "SELECT * FROM counter WHERE counter_id = 4";
        $result4 = mysqli_query($conn, $query4);
        $status4 = mysqli_fetch_assoc($result4);
        // echo "check4";
        if ($status4['counter_status'] == "offline"){
            $valueFour = "Go Online";
        }else {
            $valueFour = "Go Offline";
        }
?>

<?php include('inc/header.php'); ?>

    <div class="container">
        <h1>Counter Management</h1>
    </div>
    <div class="management" style="text-align:center">
        <h2>Counter 1</h2>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="statusOne" value="<?php echo $valueOne?>" class="btn btn-primary">
            <input type="submit" name="completeOne" value="Complete Current" class="btn btn-primary">
            <input type="submit" name="callOne" value="Call Next" class="btn btn-primary">
        </form>
    </div>
    <div class="management" style="text-align:center">
        <h2>Counter 2</h2>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="statusTwo" value="<?php echo $valueTwo?>" class="btn btn-primary">
            <input type="submit" name="completeTwo" value="Complete Current" class="btn btn-primary">
            <input type="submit" name="callTwo" value="Call Next" class="btn btn-primary">
        </form>
    </div>
    <div class="management" style="text-align:center">
        <h2>Counter 3</h2>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="statusThree" value="<?php echo $valueThree?>" class="btn btn-primary">
            <input type="submit" name="completeThree" value="Complete Current" class="btn btn-primary">
            <input type="submit" name="callThree" value="Call Next" class="btn btn-primary">
        </form>
    </div>
    <div class="management" style="text-align:center">
        <h2>Counter 4</h2>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="submit" name="statusFour" value="<?php echo $valueFour?>" class="btn btn-primary">
            <input type="submit" name="completeFour" value="Complete Current" class="btn btn-primary">
            <input type="submit" name="callFour" value="Call Next" class="btn btn-primary">
        </form>
    </div>
<?php include('inc/footer.php'); ?>