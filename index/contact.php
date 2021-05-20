<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../css/main.css">
        <title>Bank Management System</title>
    </head>
    <body>
   
        <div class="section-form" id="contact-us"> 
  
            <h3 class="heading-center">Contact Us</h3> 
                        <form action="insert.php" method="POST"> 
                            <div class="form-group"> 
                                <input type="text" class="form-control" placeholder="Your Name" autocomplete="off" value ="" name="name" required> 
                                <br> 
                                <input type="email" class="form-control"  placeholder="Email ID" autocomplete="off" value="" name="email" 
                                    required><br> 
                                
                                <textarea rows="5" class="form-control"  placeholder="Your Message" autocomplete="off" name="feedback" 
                                    required></textarea><br> 
                                <button type="submit" class="btn btnprimary" id="submit_feedback" name="submit_feedback">Submit</button> 
                            </div> 
                        </form> 
                    
        </div>
</div>
</body>
</html>