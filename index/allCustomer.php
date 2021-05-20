<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>    


        <link rel="stylesheet" href="../css/main.css">
        <title>Bank Management System</title>
    </head>
    
    <body id="transfer">
    <div class="container">
        <h2 class="text-center"> <i class="fas fa-book"></i>Customer Records</h2>
        <?php
            echo '<div id="table_align" class="table-responsive">  
            <table id="itable" class="table table-bordered" >  
                <tr>
                    <th>ID</th>  
                    <th>Name</th>
                    <th>Email</th>  
                    <th>Current Balance</th>  
                    <th>Operation</th>
                </tr>';

                function fetchData(){
                    $connect = mysqli_connect("localhost", "root", "", "banksystem");  
                    $sql = "SELECT * FROM Customers ";  
                    $output = '';  
                    $result = mysqli_query($connect, $sql);  
                    while($row = mysqli_fetch_array($result)){
                        $output .= '<tr>
                                    <td>'.$row["id"].'</td>
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["email"].'</td>  
                                    <td>'.$row["balance"].'</td> 
                                    <td><button><a href="transfer.php?id='.$row["id"].'">Transaction</a></button></td>
                                    </tr>';
                    }
                    return $output;
                }
                echo fetchData();  
            echo '</table> </div> <br />';
        ?>

    </div>
    </body>
</html>

