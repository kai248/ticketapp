<?php 
    require('config/config.php');
    require('config/db.php');

    // check for submit
    if(isset($_POST['submit'])){
        // echo 'Submitted';
        // get form data
        // $ticket_solved = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "INSERT INTO ticket(ticket_solved) VALUES('NO')";

        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        }else {
            echo 'ERROR: '.mysqli_error($conn);
        }
    }
?>

<?php include('inc/header.php'); ?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function(){
            $("#customer_refresh").load("customer.php");
            setInterval(function() {
                $("#customer_refresh").load("customer.php");
            }, 1000);
        });
        $(document).ready(function(){
            $("#counter_refresh").load("customerCounter.php");
            setInterval(function() {
                $("#counter_refresh").load("customerCounter.php");
            }, 1000);
        });
</script>

    <div class="container">
        <h1>Customer View</h1>
        <div class="s">
            <div id="customer_refresh"></div>           <!-- refreshes which ticket is being served and latest ticket -->
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <input type="submit" name="submit" value="Take a Number" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div id="counter_refresh"></div>                    <!-- refreshes counter status -->
<?php include('inc/footer.php'); ?>