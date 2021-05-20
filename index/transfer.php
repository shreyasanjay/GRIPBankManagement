<!DOCTYPE html>
<html lang="en">
    <?php 
        @session_start();
        if (isset($_SESSION['id'])){
            $id = $_SESSION['id'];
        }
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>    
        <link rel="stylesheet" href="../css/main.css">
        <title>Bank Management System</title>
    </head>
    
   
    <body style="background-image: linear-gradient(rgb(136, 35, 139), white); background-repeat: no-repeat;">
    <div class="container">
        <h2 class="text-center"> <i class="fas fa-file-invoice"></i>Account Details</h2>
        <?php
            echo '<div id="table_align" class="table-responsive">  
            <table class="table table-bordered" >  
                <tr>
                    <th>ID</th>  
                    <th>Name</th>
                    <th>Email</th>  
                    <th>Current Balance</th>  
                </tr>';

                function fetchData(){
                    $connect = mysqli_connect("localhost", "root", "", "banksystem");  
                    $sql = "SELECT * FROM Customers where id='" . $_GET['id'] . "' "; 
                    $output = '';  
                    $result = mysqli_query($connect, $sql);  
                    while($row = mysqli_fetch_array($result)){
                        $output .= '<tr>
                                    <td>'.$row["id"].'</td>
                                    <td id="1">'.$row["name"].'</td>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["balance"].'</td> 
                                    </tr>';
                    }
                    return $output;
                }
                echo fetchData();  
            echo '</table> </div> <br />';
        ?>
         
        <h3 class="text-center"> <i class="fas fa-comments-dollar"></i> Transfer Money</h3>
        <div class="col-lg-8">
        <div class="form-group">
        <div class="card" id="chapterCard">
            <div class="card-body" style="background-image: linear-gradient(rgb(181,118,183), white);
    background-repeat: no-repeat;">
                <form action="insert.php" method="POST">
                    <label class=" col-lg-2">Sender :</label>
                    <input type="text" class=" col-lg-8" value ="" id="from_customer" name="from_customer"> 
                    <br><br>
                    <label class=" col-lg-2">Receiver :</label>
                    <select class="dropClass col-lg-8" value="" name="to_customer" required>
                        <?php include("dropdown.html"); ?>
                    </select>
                    <br><br>
                    <label class=" col-lg-2">Amount :</label>
                    <input type="number" class="col-lg-8" placeholder="Enter amount" autocomplete="off" value ="" name="amount" required> 
                    <br><br>
                    <button type="submit" class="btn btnprimary" id="submit_money" name="submit_money">Submit</button> 
                </form>
                </div>
                </div>
    </div>
    </div>
    <div class="col-lg-2"></div>
    
    <script>
        var test = document.getElementById('1').innerHTML;
        document.getElementById("from_customer").value = test;
        </script>  
    
    </body>
</html>

