<html lang="en">
<head>
    <?php include "imports.php"; ?>
    <title>About</title>
    <style>
    .footer {
	     position: relative !important;
	     margin-top: 93em !important;
      }
    </style>
</head>
<body>
  <?php session_start();

  if(!isset($_SESSION["cusername"]))
  {
  	  include "header-logged-out.php";
  }else {
      include "header-logged-in.php";
  }
  ?>


  <div class="about">
    <div class="about-contents">
      <div class="about-company">
        <p class="about-heading">About Company</p>
        <p class="about-para">
          VIVO Clothing is a new generation basics clothing company based in Sri Lanka. We’re all about convenience and peace-of-mind. We offer high quality everyday wear that bring you the comfort and convenience you need to get through your day.<br><br>
          VIVO Clothing was born out of the need for a convenient solution to shop for basics. The founders have been looking for a “set-it-and-forget-it” service to shop clothing, and when they couldn’t find one, they resolved to build the service they wanted.<br><br>
          We understand that your time is valuable and we don’t want you to waste any of it looking for the perfect basics to wear. Shopping on our website is as easy as it gets. Our team is only a click away and are dedicated to serve you from the moment you log in and even after your order arrives at your doorstep. We make no compromises on convenience.<br><br>
          All our products are made in Sri Lanka with high-quality material. Production is carried out by experienced suppliers in the industry who are specialized in each type of garment. Our promise of quality doesn’t just stop at the product, we work hard to exceed your expectations with our level or service.<br><br>
        </p>
      </div>
      <div class="about-t&c">
        <p class="about-heading">Terms & Conditions</p>
        <p class="about-para">
          This website is operated by WAD inc. Throughout the site, the terms “we”, “us” and “our” refer to WAD inc. WAD inc offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.<br><br>
          By visiting our site and/or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/or contributors of content.<br><br>
          Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.<br><br>
          Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.<br><br>
        </p>
        <p class="about-subheading">SECTION 1 – ONLINE STORE TERMS</p><br>
        <p class="about-para">
          By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.<br><br>
          You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws).<br><br>
          You must not transmit any worms or viruses or any code of a destructive nature.<br><br>
          A breach or violation of any of the Terms will result in an immediate termination of your Services.<br><br>
        </p><br><br>
      </div>
      <div class="about-faq">
        <?php

$con = mysqli_connect("localhost","root","","vivo");
if(!$con)
{
die("Cannot connect to DB server");
}
$sql ="SELECT * FROM `faq`";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)> 0)
{
echo "<p class='about-heading'>Frequently Asked Questions</p>";
while($row = mysqli_fetch_assoc($result))
{
  echo"<p class='about-subheading'>".$row["fq"]."</p>";
  echo"<p class='about-para center'>".$row["fa"]."</p>";

}
}
?>


      </div>
    </div>
  </div>
  <?php require "footer.php"; ?>
</body>
</html>
