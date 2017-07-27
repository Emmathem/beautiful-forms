<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Login Form</title>
    

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
                        <li><a href = "jform.php">JForm</a></li>
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
                    <?
    if(isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        $file = "data.json";
        $json_string = json_encode($_POST, JSON_PRETTY_PRINT);
        file_put_contents($file, $json_string, FILE_APPEND);
        header('Location: thanks.php');
    } 
?>
<p><? echo $fullname; 
echo '<br>';
    echo $lastname; 
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $pass; ?>
                   <p>Data Submit</p>
                </div>
            </div>
        </div>
         
    </div>
    <footer class="footer">
        <div class="container-footer">&copy; 2017. Your Company</div>
    </footer>
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
