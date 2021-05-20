<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="main.css">
        <title>Bank Management System</title>
    </head>
    
    <body style="background-image: linear-gradient(rgb(218, 136, 186), white);">
    <div class="container">
        <h2 class="text-center">Transaction History</h2>
        <?php
            echo '<div id="table_align" class="table-responsive">  
            <table id="itable" class="table table-bordered" >  
                <tr>
                    <th>ID</th>  
                    <th>Sender</th>
                    <th>Receiver</th>  
                    <th>Amount</th>  
                </tr>';

                function fetchData(){
                    $connect = mysqli_connect("localhost", "root", "", "banksystem");  
                    $sql = "SELECT * FROM Transaction ";  
                    $output = '';  
                    $result = mysqli_query($connect, $sql);  
                    while($row = mysqli_fetch_array($result)){
                        $output .= '<tr>
                                    <td>'.$row["id"].'</td>
                                    <td>'.$row["from_customer"].'</td>  
                                    <td>'.$row["to_customer"].'</td>  
                                    <td>'.$row["amount"].'</td> 
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

