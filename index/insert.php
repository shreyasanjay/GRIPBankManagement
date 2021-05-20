<?php

    @session_start();
    if (isset($_SESSION['id'])){
        $id = $_SESSION['id'];
    }

    $connect = mysqli_connect("localhost", "root", "", "banksystem");
    
    if(isset($_POST["submit_money"])) {
        $from_customer = $_POST['from_customer'];
        $to_customer = $_POST['to_customer'];
        $amount = $_POST['amount'];
        $query = "INSERT INTO `transaction`( `from_customer`, `to_customer`, `amount`) 
        VALUES ( '$from_customer', '$to_customer', '$amount')";
        if(!mysqli_query($connect,$query)) {
            echo '<script>alert("Not inserted. ")</script>';
        }
        else
            echo '<script>alert("New record created successfully. ")</script>';
            
    }
    header("Location: index.html");

    
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "banksystem");
if(isset($_POST["submit_feedback"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
        $query = "INSERT INTO `contact`( `name`, `email`, `feedback`) 
        VALUES ( '$name', '$email', '$feedback')";
        if(!mysqli_query($connect,$query)) {
            echo '<script>alert("Not inserted. ")</script>';
        }
        else
            echo '<script>alert("Feedback Saved Successfully. ")</script>';
            
    }
    

?>