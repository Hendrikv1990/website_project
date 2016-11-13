<?php

// $array = [];
// $string1 = 'Hendrik';
// $string2 = 'Ahmed';
// $string3 = 'Ali';
// $string4 = 'Jean';
// $string5 = 'Vincent';
// $string6 = 'Vera';

// $myfriends = [$string1, $string2, $string3, $string4, $string5, $string6];
// echo '<h1>Myfriends</h1>';
// echo '<ul>';
// foreach ($myfriends as $myfriend) :
// echo '<li>', $myfriend, '</li>';
// 	endforeach;
// echo '</ul>';

// <div class="col-md-4">
// <h1><a href="firstproject.php">Chess</a></h1>
// <p>
// click on Chess to know more about me with chess
// <br>This was my first project
// </p>
// </div>

function connect_to_mysql(){
$servername = "localhost";
$username = "root";
$password="";
$db = 'website';
$conn = new mysqli($servername,$username,$password, $db);

if($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);}
//echo "Connection successfully";
return $conn;
$conn->close();


}

function query_projects($conn){


	$sql = "SELECT id, title, description, picture, link, position FROM projects ORDER BY position ASC";

$result = $conn->query($sql);


if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		create_project_html($row);
	}
	} else {
		echo 'no results';
	}
}

function get_menu(){

	$conn = connect_to_mysql();
	query_projects_menu($conn);

}
function query_projects_menu($conn){


	$sql = "SELECT id, title, description, picture, link, position FROM projects ORDER BY position ASC";

$result = $conn->query($sql);


if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		create_menu_html($row);
	}
	} else {
		echo 'no results';
	}
}
function query_project($conn, $id){


	$sql = "SELECT id, title, description, picture, link, position FROM projects WHERE id = '$id'";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		create_project_page($row);
	}
	} else {
		echo 'no results';
	}
}

function create_menu_html($row){
?>

<li><a href="<?php echo $row['link'] ?>?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></li>
 <?php        
}

function create_project_page($row){
?>

<div class="container-fluid">
<div class="row">
<img src="<?php echo $row['picture']; ?>" width="100%" height="610px" />
<h1 class="welcome-title"><?php echo $row['title'] ?></h1>
<h3 class="welcome-paragraph"><?php echo $row['description'] ?></h3>

</div>								
</div>								
<div class="row">
<?php
}

function create_project_html($row){

		echo '<div class="col-md-4">';
echo '<h3><a href="'.$row['link'].'?id='.$row['id'].'">'.$row['title'].'</a></h3>';
echo '<p>'.$row['description'].'</p>';
echo '</div>';
}

function get_project($id) {
	$conn = connect_to_mysql();	
	query_project($conn, $id);
}

function get_projects(){
	$conn = connect_to_mysql();
	query_projects($conn);
	


}

?>