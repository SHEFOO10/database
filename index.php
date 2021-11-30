<?php 
$path = '/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
session_start();
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
  $uri = 'https://';
} else {
  $uri = 'http://';
}
if (isset($_POST)){
  $uri .= $_SERVER['HTTP_HOST'];
  header('Location: '.$uri.'/login/');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>
           SHEFOO
  </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  
  <section class="wrap-3d">
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/aw-white.png" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong>38mm and 42mm Case</strong><br>
          7000 Series Silver Aluminum<br>
          Ion-X Glass<br>
          Retina Display<br>
          Composite Back
          <button class="bubbly-button">Add To Cart.</button>
        </p>
        <p>
          <strong>Sport Band</strong><br>
          White Fluoroelastomer<br>
          Stainless Steel Pin
        </p>
        <p>
          <a href="#">View 38mm in the store</a><br>
          <a href="#">View 42mm in the store</a>
        </p>
      </figcaption>
    </figure>
  </div>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/aw-blue.png" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong>38mm and 42mm Case</strong><br>
          7000 Series Silver Aluminum<br>
          Ion-X Glass<br>
          Retina Display<br>
          Composite Back
          <button class="bubbly-button">Add To Cart.</button>
        </p>
        <p>
          <strong>Sport Band</strong><br>
          Blue Fluoroelastomer<br>
          Stainless Steel Pin
        </p>
        <p>
          <a href="#">View 38mm in the store</a><br>
          <a href="#">View 42mm in the store</a>
        </p>
      </figcaption>
    </figure>
  </div>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/aw-green.png" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong>38mm and 42mm Case</strong><br>
          7000 Series Silver Aluminum<br>
          Ion-X Glass<br>
          Retina Display<br>
          Composite Back
        </p>
        <p>
          <strong>Sport Band</strong><br>
          Green Fluoroelastomer<br>
          Stainless Steel Pin
          <button class="bubbly-button">Add To Cart.</button>
        </p>
        <p>
          <a href="#">View 38mm in the store</a><br>
          <a href="#">View 42mm in the store</a>
        </p>
      </figcaption>
    </figure>
  </div>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/aw-red.png" alt="" />
      </div> 
      <figcaption class="item-caption">
        <p>
          <strong>38mm and 42mm Case</strong><br>
          7000 Series Silver Aluminum<br>
          Ion-X Glass<br>
          Retina Display<br>
          Composite Back
        </p>
        <p>
          <strong>Sport Band</strong><br>
          Pink Fluoroelastomer<br>
          Stainless Steel Pin<button class="bubbly-button">Add To Cart.</button>
        </p>
        <p>
          <a href="#">View 38mm in the store</a><br>
          <a href="#">View 42mm in the store</a>
        </p>
      </figcaption>
    </figure>
  </div>
  
  <div class="item-3d">
    <span class="ground"></span>
    <figure class="item-content group">
      <div class="item-img">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46992/aw-black.png" alt="" />
      </div>
      <figcaption class="item-caption">
        <p>
          <strong>38mm and 42mm Case</strong><br>
          7000 Series Silver Aluminum<br>
          Ion-X Glass<br>
          Retina Display<br>
          Composite Back
        </p>
        <p>
          <strong>Sport Band</strong><br>
          Black Fluoroelastomer<br>
          Stainless Steel Pin
        </p>
        <p>
          <a href="#">View 38mm in the store</a><br>
          <a href="#">View 42mm in the store</a>
        </p>
      </figcaption>
    </figure>
  </div>
  
</section>
  
<script>
  var animateButton = function(e) {

e.preventDefault;
//reset animation
e.target.classList.remove('animate');

e.target.classList.add('animate');
setTimeout(function(){
  e.target.classList.remove('animate');
},700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
bubblyButtons[i].addEventListener('click', animateButton, false);
}
</script>
  
</body>
</html> 