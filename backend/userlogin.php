<?php
if(isset($_POST['login'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lmsdatabase");
    $query = "SELECT * FROM users WHERE email = '$_POST[email]'";
    $query_run = mysqli_query($connection,$query);
    $email = $_POST['email'];
    $wrongPassword = false;

    while ($row = mysqli_fetch_assoc($query_run)) {
        if($row['email'] == $email){
            if($row['password'] == $_POST['password']){
                $_SESSION['name'] =  $row['name'];
                $_SESSION['email'] =  $row['email'];
                $_SESSION['id'] =  $row['id'];
                header("Location: user_dashboard.php");
                exit(); 
            }
            else{
                $wrongPassword = true;
            }
        }
    }

    if ($wrongPassword) {
        
        ?>
        <br><br><center><span class="alert-danger">Wrong Password !! An email has been sent to you regarding this attempt.</span></center>
        <?php
    }
    else {
        ?>
        <br><br><center><span class="alert-danger">Email not found. Please check your email and try again.</span></center>
        <?php
    }
}
?>
