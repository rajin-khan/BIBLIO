<?php
if(isset($_POST['login'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lmsdatabase");
    $query = "SELECT * FROM admins WHERE id = '$_POST[id]'";
    $query_run = mysqli_query($connection,$query);
    $id = $_POST['id'];
    $wrongPassword = false;

    while ($row = mysqli_fetch_assoc($query_run)) {
        if($row['id'] == $id){
            if($row['password'] == $_POST['password']){
                $_SESSION['name'] =  $row['name'];
                $_SESSION['email'] =  $row['email'];
                $_SESSION['id'] =  $row['id'];
                header("Location: admin_dashboard.php");
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
        <br><br><center><span class="alert-danger">Id is Invalid. Please check again and try again.</span></center>
        <?php
    }
}
?>
