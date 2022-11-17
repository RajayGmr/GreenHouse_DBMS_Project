<?php
/*** setting the content type header ***/
/*** as the app Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  }
  
  body {
    background-color: rgb(17, 196, 76);
  }
  
  a {
    text-decoration: none;
  }
  
  header {
    width: 100%;
    height: fit-content;
    max-width: 1500px;
    margin: 1 auto;
    padding: 5px 5px;
    background-color: rgb(255, 255, 255);
  }
  header .browser {
    width: 100px;
    height: 100px;
    display: flex;
    border: 2px;
    align-items: center;
    justify-content: center;
    cursor: text;
   
  }
   


  header #profile {
    width: 90px;
    height: 80px;
    border: 2px;
   
    opacity: 0.7;
  }
  header #cart {
    width: 70px;
    height: 80px;
    border: 2px;
   
    opacity: 0.7;
  }
   
   
  
  header a {
    color: rgb(0, 0, 0);
    text-transform: lowercase;
    font-weight: 300;
    transition: color 100ms linear;
  }
  
  header a.hover {
    color: rgb(194, 194, 194);
  }
  
  header hr {
    border: 0.5px solid rgba(4, 7, 8, 0.4);
    height:60px;
    margin-top: 50px;
 
  }

  
  header .first {
    margin-bottom: 3px;
    display: flex;
    justify-content: space-between;
  }
  
  header .first div {
    padding: 0 20px;
    display: flex;
  }
  
  header .first a {
    font-size: 14px;
    padding: 5px 20px;
  }

 
   

  
  header .second {
    display: flex;
    justify-content: space-between;
  }

 
  header #logo {
    padding-left: 40px;
  }
  
  header .second div {
    display: flex;
  }
  
  header .second a {
    height: 100%;
    font-size: 17px;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  
  a {
    text-decoration: none;
    text-shadow: rgb(194, 194, 194);
    color: black;
    
  }
 
  
 
  .button-one {
    background-color: #21d190;
background-image: linear-gradient(315deg, #21d190 0%, #d65bca 74%);
    position: relative;
    left: 400px;
}
.button-two {
    background-color: #21d190;
    background-image: linear-gradient(315deg, #21d190 0%, #d65bca 74%);
    position: relative;
    left: 400px;
}
.button-three {
    background-color: #21d190;
    background-image: linear-gradient(315deg, #21d190 0%, #d65bca 74%);
    position: relative;
    left: 400px;
}
.button-one,
.button-two,
.button-three {
    color: #1d1d1d; /* text color */
    display: inline-block;
    border-radius: 0; /* square corners */
    padding: 10px 80px; /* space around text */
    text-transform: uppercase; /* all capital letters */
    font-weight: 700;
    letter-spacing: 1px;
    -moz-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    transition: all 0.2s;
    align-items: center;
   
}
.button-one:hover,
.button-two:hover,
.button-three:hover {
    background: #fff;
}

.red-hover {
    color: rgb(88, 33, 33);
  }
  
  .red-hover.hover {
    color: rgb(194, 82, 17);
  }
  
  .category {
    width: 30%;
    height: 40px;
    max-width: 1500px;
    margin: 0 auto;
    padding: 5px 5px;
    
    
  }


  body .category {
    width: 40%;
    height: 30vh;
    position: relative;
  }
  
  .category .slide-child {
    width: 70%;
    height: 240%;
    object-fit: cover;
    
    position: relative;
    top: 0;
    left: 90px;
    right: 0;
    bottom: 0;
    visibility: hidden;
    opacity: 0;
   
  }
  
  .category .slide-child.active {
    opacity: 2;
    visibility: visible;
  }
  

  
  .category{
    width: 90px;
      height: 200px;
      border: 2px;
  }
  body .choice {
    width: 40%;
    height: 30vh;
    position: relative;
  }
  
  .choice .slide-child {
    width: 70%;
    height: 240%;
    object-fit: cover;
    
    position: relative;
    top: 0;
    left: 90px;
    right: 0;
    bottom: 0;
    visibility: hidden;
    opacity: 0;
   
  }
  
  .choice.slide-child.active {
    opacity: 2;
    visibility: visible;
  }
  

  
  .choice{
    width: 90px;
      height: 200px;
      border: 2px;
  }

  body .last{
    width: 40%;
    height: 30vh;
    position: relative;
top: 1px;
left: 200px;
  }
  
  .last.slide-child {
    width: 70%;
    height: 240%;
    object-fit: cover;
    
    position: relative;
    top: 10px;
    left: 60px;
    right: 0;
    bottom: 0;
    visibility: hidden;
    opacity: 0;
   
  }
  
  .last.slide-child.active {
    opacity: 2;
    visibility: visible;
  }
  

  
  .last{
    width: 90px;
      height: 200px;
      border: 2px;
  }

  body .seller{
    width: 40%;
    height: 20vh;
    position: relative;
top: 300px;

  }
  
  .seller.slide-child {
    width: 70%;
    height: 240%;
    object-fit: cover;
    
    position: relative;
    top: 10px;
    left: 20px;
    right: 0;
    bottom: 0;
    visibility: hidden;
    opacity: 0;
   
  }
  
  .seller.slide-child.active {
    opacity: 2;
    visibility: visible;
  }
  

  
  .seller{
    width: 90px;
      height: 200px;
      border: 2px;
  }

  .text{
      position:relative;
      top: 30px;
      left:500px;
  }