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

function get_my_projects(){


$projects_array = ['firstproject' => array('title' => 'Chess', 'description' => 'click on Chess to know more about me with chess
', 'link' => 'firstproject.php'), 'secondproject' => array('title' => 'Coding', 'description' => 'click on Coding to know more about me with coding', 'link' => 'secondproject.php'), 'thirdproject' => array('title' => 'Maths' ,'description' => 'click on Maths to know more about me in maths' , 'link' => 'thirdproject.php'), 'fourthproject' => array('title' => 'Maths' ,'description' => 'click on Maths to know more about me in maths' , 'link' => 'thirdproject.php')];

foreach ($projects_array as $project) : 

echo '<div class="col-md-3">';
echo '<h3><a href="'.$project['link'].'">'.$project['title'].'</a></h3>';
echo '<p>'.$project['description'].'</p>';
echo '</div>';

	endforeach;

	


}

?>