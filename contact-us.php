<html lang="en">
<head>
    <?php include "imports.php"; ?>
    <title>Contact Us</title>
    <style>
    .footer {
	     position: relative !important;
	     margin-top: 59em !important;
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
  <div class="contact-us">
    <div class="contact-us-content">

      <div class="contact-us-details">
        <p class="contact-us-heading">Find us @</p>
        <p class="contact-us-ul">Address</p>
        <p class="contact-us-li">SLIIT A, BOC Merchant Tower, Colombo 03</p>
        <p class="contact-us-ul">Phone</p>
        <p class="contact-us-li">077 777 7777</p>
        <p class="contact-us-ul">Email</p>
        <p class="contact-us-li">wad.03@gmail.com</p>
      </div>
      <div class="contact-us-maps">
        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1127.9421746227492!2d79.8498966915962!3d6.911973278099742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259426a049f93%3A0x8c6c6a72e5cdf65f!2sMerchant+Bank+of+Sri+Lanka+%26+Finance+PLC!5e0!3m2!1sen!2slk!4v1551460639563" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>-->
        <img src="resources/images/map.png" alt="">
      </div>

    </div>
    <div class="contact-us-form-content">
      <form class="contact-us-form">
        <p class="contact-us-email-heading">Drop an Email</p>
        <label class="email-lbl" for="email-name">From:</label><br>
        <input type="text" class="email-name" name="email-name" id="email-name" placeholder=""><br><br>

        <label class="email-lbl" for="email-email">Email ID:</label><br>
        <input type="email" class="email-email" name="email-email" id="email-email" placeholder=""><br><br>

        <label class="email-lbl" for="email-subject">Subject:</label><br>
        <input type="text" class="email-subject" name="email-subject" id="email-subject" placeholder=""><br><br>

        <label class="email-lbl" for="email-lbl">Message:</label><br>
        <textarea name="email-message" id="email-message" class="email-message" placeholder="Write your message here..."></textarea>

      </form>
    </div>
  </div>

  <?php require "footer.php"; ?>
</body>
</html>
