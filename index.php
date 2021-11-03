
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <title>
           SHEFOO
  </title>
  <link rel="icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <p>S H E F O O</p>
    <div class="facebook">
      <a href="https://www.facebook.com/shefoo.ha" target="blank"><img src="https://img.icons8.com/fluency/100/000000/facebook-new.png" class="facebook"></a>
    </div>
    <div class="instagram">
      <a href="https://www.instagram.com/real_shefoo/" target="blank"><img src="https://img.icons8.com/clouds/100/000000/instagram-new--v3.png" class="instagram"/>
      </a>
    </div> 
  </div>
  
    <div class="loader-wrapper">
      <span class="loader"></span>
    </div>
 
  <div id="navbar">
    <a href="#Home">Home</a>
    <a href="#Aboutme">About</a>
    <a href="javascript:void(0)">Contact</a>
  </div>
  
  <div id="Home">
    <h3>I am Sherif Hamdy Mohamed</h3>
    <p>17 Years Old</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
    <p>i know basics.</p>
  </div>
  
  <script>
     $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
  window.onscroll = function() {myFunction()};
  
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {///////////////////
      navbar.classList.remove("sticky");
    }
  }
  
  </script>
  
</body>
</html> 