z<html lang="en">
<head>
    <?php include "imports.php"; ?>
    <title>Double Flair Short Dress</title>
    <style>
    .filter-button {
      float: right !important;
      width: 21% !important;
    }
    .footer {
	     position: relative;
	     margin-top: 42em !important;
     }


    </style>
</head>
<body>
  <?php include "header-logged-in.php"; ?>
  <div class="single">
    <div class="single-contents">
      <div class="single-image-column">
        <div class="single-row center">
          <img class="single-image" src="resources/images/P12.jpg">
        </div>
      </div>
      <div class="single-details-column">
        <div class="single-row">
          <p class="single-heading">Double Flair Short Dress</p><hr>
          <p class="single-price">LKR 2190</p>
          <p class="single-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><b>Free Shipping</b></p>
          <form>
            <label class="single-color" for="single-color">Color:</label>
            <select name="single-color" id="single-color">
              <option value="sRed">Red</option>
              <option value="sWhite">White</option>
              <option value="sBlack">Black</option>
            </select>
            <label class="single-size" for="single-size">Size:</label>
            <select name="single-size" id="single-size">
              <option value="sXS">XS</option>
              <option value="sS">S</option>
              <option value="sM">M</option>
              <option value="sL">L</option>
              <option value="sXL">XL</option>
            </select><br><br>
            <label class="single-Qty">Quantity:</label>
            <input type="number" value="1" min="1" max="5" step="1" name="sQty" class="sQty" id="sQty">
            <input class="filter-button" type="submit" value="&nbsp;&nbsp;&nbsp;Add To Cart&nbsp;&nbsp;&nbsp;">
          </form>
        </div>

      </div>
    </div>
  </div>
  <?php require "footer.php"; ?>
</body>
</html>
