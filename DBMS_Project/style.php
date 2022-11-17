<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>



@import url('https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:300,400|Oswald:400,700');
* { padding: 0; margin: 0; box-sizing: border-box }
body {font-family:'Lato',sans-serif;padding: 30px;background: #eaebeb;}

/**************/

.text-center{
text-align: center;
margin-bottom: 20px;
}

.profile-images-card{
	margin: auto;
	display: table;
	background: #fff;
	padding: 30px 50px;
	box-shadow: 0px 0px 5px #ddd;
}

.profile-images{
	width: 150px;
	height: 150px;
	background: #fff;
	border-radius: 50%;
	overflow: hidden;
}

.profile-images img{
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.custom-file input[type='file']{
	display: none
}

.custom-file label{
	cursor: pointer;
	color: #000;
	text-align: center;
	display: table;
	margin: auto;
	margin-top: 15px;
}
