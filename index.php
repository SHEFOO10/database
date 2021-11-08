
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <title>
           SHEFOO
  </title>
  <link rel="icon" type="image/x-icon" href="favicon.png?v=2"  />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="header">
    <p>S H E F O O</p>
    <div class="facebook">
      <a href="https://www.facebook.com/shefoo.ha" target="blank"><img src="https://cdn-icons.flaticon.com/png/512/3670/premium/3670124.png?token=exp=1636063063~hmac=9c33a4842b9a5a9e46e592aae42451b7" class="facebook"></a>
    </div>
    <div class="instagram">
      <a href="https://www.instagram.com/real_shefoo/" target="blank"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" class="instagram"/>
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