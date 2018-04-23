<?php 

?>

<html>
    <head>
        <title>HONEY POT DEMO</title></head>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
    <body>
        <div class="container">
            <div class="wrapper">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <p>Hello, we are proud to present our work:</p>
                    <h2>Project Honeypot <i class="fa fa-forumbee"></i></h2>
                    <p align="justify">Spambots usually fill in all the fields of a form. In this project we use this to protect the site from being spammed.
                        <br>
                        A special field is created for the spambot to fill something in with. The human is warned through the field placeholder to not fill anything in the field.
                        <br>
                        A spambot would fill something in this special field and would be detected as a spammer and his HostID is logged and they are sent a cookie for our server to later check whether we are dealing with a spammer and they are redirected to a 404 Page with warning notifying them that they have been now blacklisted as a spammer.
                        <br>
                        If the field is left blank the user is directed to the appropriate destination.
                        <br>
                        Also if the spammer tries to bruteforce the submission page by leaving fields blank - they do not succeed because of the cookie and the HostID that is checked by our server to redirect them back to 404 warning page.
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light">
                        <div class="card card-header">
                            <div class="card-title"><i class="fa fa-users"></i> User Form</div>
                        </div>
                        <div class="card card-body">
                            <form action="inter.php" method="POST">
                                <div class="form-group">
                                <label >UserID</label>
                                <input name="username" class="form-control"/>
                                </div>
                                <div class="form-group">
                                <label >Email</label>
                                <input name="email" type="email"  class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label >Verify</label>

                                    <input name="honeypot" autocomplete="off" placeholder="Don't touch if human."  class="form-control"/>
                                    <input name="humantog" type="checkbox" required/>
                                </div>
                                <input type="submit" value="Submit"/>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-md-4">
                <ul class="list-group"><p><i class="fa fa-code"></i> Developed by:</p>
                            <li class="list-group-item"><i class="fa fa-user"></i> Siddharth Sharma</li>
                            <li class="list-group-item"><i class="fa fa-user"></i> Saurabh Kulshretha</l>
                        </ul> 
                            <div><p></p></div>
                        </div>
            </div>
            </div>
        </div>



    <script
  src="http://code.jquery.com/jquery-3.3.1.slim.js"
  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
    
</html>