<?php
include_once('functions.php') ?>

<div class="container-fluid">
   <div class="row">
   <nav class="navbar navbar-default navbar-static-top"> 
   <div class="container-fluid"> 
   <div class="navbar-header">
    <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false"> 
	<span class="sr-only">Toggle navigation</span> 
	<span class="icon-bar"></span> 
	<span class="icon-bar"></span>
	 <span class="icon-bar"></span> 
	 </button> 
	 <a href="index.php" class="navbar-brand">Ali</a>
	  </div> 
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8"> 
	  <ul class="nav navbar-nav">
	   <li><a href="index.php">Home</a></li> 
	   <li class="dropdown">
          <a href="myprojects.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Projects<span class="caret"></span></a>
	   <ul class="dropdown-menu">
            <?php get_menu() ?>
          </ul>
	   <li><a href="#">About Me</a></li>
	   <li><a href="#">Contact Me</a></li>
	    </ul> 
		</li>
		</div>
		</div> 
		</nav>
		</div>
</div>

<?php




?>