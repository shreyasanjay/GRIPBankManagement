<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main1.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
    </head>
    <body style="background-image: linear-gradient(rgb(136, 35, 139), white);">
        <div class="section-form" id="contact-us"> 
            <div class="container">
                <div class="innerwrap">
                
                    <section class="section1 clearfix">
                        <div class="textcenter">
                            <span class="shtext" style="color: black;">Contact Us</span>
                            <span class="seperator"></span>
                            <h1 style="color: black;">Drop your suggestions here!</h1>
                        </div>
                    </section>
                
                    <section class="section2 clearfix">
                        <div class="col2 column1 first">
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>
                        <div class="col2 column2 last">
                            <div class="sec2innercont">
                                <div class="sec2addr">
                                    <p>45, LBS Marg, Mumbai-400721 </p>
                                    <p><span class="collig">Phone :</span>022-2233333</p>
                                    <p><span class="collig">Email :</span>gripbank@gmail.com</p>
                                    <p><span class="collig">Customer Care :</span>18002005200</p>
                                </div>
                            </div>
                            <div class="sec2contactform">
                                <h3 class="sec2frmtitle" style="color: black;">Would you like to share something? <br> Write us a Feedback</h3>
                                <form action="insert.php" method="POST">
                                    <div class="clearfix">
                                        <input class="col2 first" type="text" name="name" value="" placeholder="Enter your name">
                                    </div>
                                    <div class="clearfix">
                                        <input  class="col2 first" type="Email" name="email" value="" placeholder="Email">
                                    </div>
                                    <div class="clearfix">
                                    <textarea rows="5" class="form-control"  placeholder="Your Message" autocomplete="off" name="feedback" 
                                    required></textarea><br> 
                                    </div>
                                    <div class="clearfix"><input type="submit" id="submit_feedback" name="submit_feedback"></div>
                                </form>
                            </div>
        
                        </div>
                    </section>
                
                </div>
            </div>
            </div>
    </body>
</html>
