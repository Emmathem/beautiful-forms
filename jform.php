
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>JSON Submit Form</title>
    

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/manage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400|Open+Sans:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
</head>

<body>
    <header class="header">

        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    <a class="navbar-brand" href="">COMPANY NAME</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="./">Home</a></li>
                        <li><a href="form2.html">Form 2</a></li>
                        <li><a href="form3.html">Form 3</a></li>
                        <li><a href="form4.html">Textarea</a></li>
                        <li><a href = "side.html">SideBar</a></li>
                        <li><a href = "jform.html">JForm</a></li>
                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>
        <div class="login-container">
        <div class="col-md-offset-4 col-lg-4 col-sm-4 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="thanks.php" method="POST" autocomplete="off" class="manage-wrapper">
                       <div class="form-group">
                            <label class="sr-only">FullName</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                <input type="text" class="form-control"  name="fullname" placeholder="Enter your Fullname" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Lastname</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                <input type="text" class="form-control"  name="lastname" placeholder="Enter your Last Name" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                <input type="email" class="form-control" name="email" placeholder="Enter your Email Address" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                <input type="password" class="form-control" id="password" name="pass" placeholder="Enter Your Password" value="" required>
                            </div>
                        </div>
                       
                        
                        <div class="form-group">
                                <button type="submit" name = "submit" class="btn btn-primary">Submit</button> <a class="text-center" href = "#" data-toggle="modal" data-target="#myModal">Forget Password</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
         <!--Change Password Modal Box-->
    <!-- Modal -->
    <div class="manage-wrapper">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Password Reset link will be sent to your email address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal change-pswd-form" action="" method="post">
                        <div class="form-group" id="spwd">
                            <label class="control-label sr-only">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                <input type="email" class="form-control" placeholder="Enter your Registered Email Address" name="useremail">
                               
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="submit" name="changePassword" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div><!--end of modal-->
    </div>
    <footer class="footer">
        <div class="container-footer">&copy; 2017. Your Company</div>
    </footer>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
