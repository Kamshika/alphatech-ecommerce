<!doctype html>

<html lang="en">
<head>
  <?php include "imports.php"; ?>
  <title>Alpha Tech (pvt) Ltd</title>
</head>

<body>
  <script src="js/scripts.js"></script>
  <?php session_start();

  if(!isset($_SESSION["cusername"]))
  {
  	  include "header-logged-out.php";
  }else {
      include "header-logged-in.php";
  }
  ?>
<!--Drop down-->
  <div class="slider">
    <img class="slides" src="resources/images/slide1.jpg">
    <img class="slides" src="resources/images/slide2.jpg">
    <img class="slides" src="resources/images/slide3.jpg">
    <img class="slides" src="resources/images/slide4.jpg">
  </div>
  <div class="features">
    <div class="features-contents">
      <div class="features-items">
        Latest Trends<br>
        <img class="features-image" src="https://img.icons8.com/color/96/000000/new.png">
      </div>
      <div class="features-items">
        Cash-on-Delivery<br>
        <img class="features-image" src="https://img.icons8.com/color/96/000000/cash-in-hand.png">
      </div>
      <div class="features-items">
        Order Tracking<br>
        <img class="features-image" src="https://img.icons8.com/color/96/000000/track-order.png">
      </div>
      <div class="features-items">
        24/7 Support<br>
        <img class="features-image" src="https://img.icons8.com/color/96/000000/online-support.png">
      </div>
    </div>
  </div>
  <div class="categories">
    <h3 class="categories-heading">Brands</h3>
    <div class="categories-contents">
      <div class="categories-items categories-shirts">
        <img class="categories-image" src="resources/images/sample-1.jpg">
        <p class="categories-type">Samsung</p><br>
      </div>
      <div class="categories-items categories-pants">
        <img class="categories-image" src="resources/images/sample-2.jpg">
        <p class="categories-type">Apple</p><br>
      </div>
      <div class="categories-items categories-blouses">
        <img class="categories-image" src="resources/images/sample-3.jpg">
        <p class="categories-type">onePlus</p><br>
      </div>
      <div class="categories-items categories-skirts">
        <img class="categories-image" src="resources/images/sample-4.png">
        <p class="categories-type">Vivo</p><br>
      </div>
      <div class="categories-items categories-accessories">
        <img class="categories-image" src="resources/images/sample-5.jpg">
        <p class="categories-type">Huawei</p><br>
      </div>
    </div>
  </div>
  <?php include "footer.php"; ?>
  <script>
  var myIndex = 0;
  carousel();
  function carousel() {
    var i;
    var x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6000); // Change image every 2 seconds
  }
  </script>
</body>
</html>
