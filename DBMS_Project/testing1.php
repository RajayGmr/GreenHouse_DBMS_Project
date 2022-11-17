<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
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
  main {
    width: 100%;
    height: fit-content;
    max-width: 1500px;
    margin: 0 auto;
    padding: 5px 5px;
    
    background-color: #7ee8fa;
background-image: linear-gradient(315deg, #7ee8fa 0%, #80ff72 74%);

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
  
  main .slide {
    width: 100%;
    height: 70vh;
    position: relative;
  }
  
  .slide .slide-child {
    width: 70%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    visibility: hidden;
    opacity: 0;
    transition: visibility 1s, opacity 500ms ease-out;
    
  }
  
  .slide .slide-child.active {
    opacity: 2;
    visibility: visible;
  }
  
  .slide .slide-selects {
    display:inline-block;
    position: absolute;bottom: 290px;
    left: 1000px; 
    padding: 30px 15px;
    background-color: #3bb78f;
background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);
     border: #21d190;
   
  }
  
