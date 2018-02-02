<?php

require_once 'dbconfig.php';
if(isset($_POST))



 ?>


<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<CENTER><h2><I>PAYMENT SUBMISSION</I> </h2></CENTER>


<div class="container">
  <form action="#">
    <div class="row">
      <div class="col-25">
        <label for="fname"> NAME</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">FATHER NAME</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="fathername" placeholder="Your father name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">

      <label for="lname">AMOUNT</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="amount" placeholder="ENTER THE AMOUNT">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="SEM">SEMESTER</label>
      </div>
      <div class="col-75">
        <select id="country" name="semester">
          <option value="ISEM"> I SEM</option>
          <option value="IISEM">II SEM</option>
          <option value="III SEM">III SEM</option>
          <option value="IVSEM">IV SEM</option>
          <option value="VSEM">V SEM</option>
          <option value="VISEM">VI SEM</option><option value="VIISEM">VII SEM</option>

        </select>
      </div>
    </div>
  <div class="row">
      <div class="col-25">
        <label for="FEESEM">FEE TYPE</label>
      </div>
      <div class="col-75">
        <select id="country" name="feetype" >
          <option value="SEM">SEMESTER FEE</option>
          <option value="EX">EXAMATION FEE</option>
          <option value="HS">HOSTEL FEE</option>
          <option value="LD">LIBRARY DUE</option>


    <div class="row">

      <form class="paypal" action="payments.php" method="post" id="paypal_form" target="_blank">
              <input type="hidden" name="cmd" value="_xclick" />
              <input type="hidden" name="no_note" value="1" />
              <input type="hidden" name="lc" value="UK" />
              <input type="hidden" name="currency_code" value="GBP" />
              <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
              <input type="hidden" name="first_name" value="Customer's First Name" />
              <input type="hidden" name="last_name" value="Customer's Last Name" />
              <input type="hidden" name="payer_email" value="customer@example.com" />
              <input type="hidden" name="item_number" value="123456" / >
              <input type="submit" name="submit" value="Submit Payment"/>
          </form>
    </div>
  </form>
</div>

</body>
</html>
