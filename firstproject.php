<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via  -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

   <?php include_once('header.php') ?>


   <?php if(isset($_GET['id'])) 
   {
   get_project($_GET['id']);
    } else {
          echo "<div class='col-md-6 col-md-offset-3'><h1>Don't you dare!</h1></div>";
    } ?>
<!-- <div class="container-fluid">
<div class="row">
<img src="images/chess.jpeg" width="100%" height="610px" />
<h1 class="welcome-title">coding</h1>    
</div>								
<div class="row"> -->



</div>

</div>
   <?php include_once('footer.php') ?>

  </body>
</html>