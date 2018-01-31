
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<background="<?php echo base_url(); ?>img/index.jpg">
	<title>Register to How2play</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>style/semantic.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body>
<div class="ui container">
<form class="ui form">
  <h4 class="ui dividing header">Shipping Information</h4>
  <div class="field">
    <label>Name</label>
    <div class="two fields">
      <div class="field">
        <input type="text" name="shipping[first-name]" placeholder="First Name">
      </div>
      <div class="field">
        <input type="text" name="shipping[last-name]" placeholder="Last Name">
      </div>
    </div>
  </div>
  <div class="field">
    <label>Billing Address</label>
    <div class="fields">
      <div class="twelve wide field">
        <input type="text" name="shipping[address]" placeholder="Street Address">
      </div>
      <div class="four wide field">
        <input type="text" name="shipping[address-2]" placeholder="Apt #">
      </div>
    </div>
  </div>
  <table class="ui celled table">
  <thead>
    <tr><th>Employee</th>
    <th>Correct Guesses</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="assets/images/wireframe/square-image.png" class="ui mini rounded image">
          <div class="content">
            Platinum
            <div class="sub header">Human Resources
          </div>
        </div>
      </h4></td>
      <td>
        $xxx
      </td>
    </tr>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="assets/images/wireframe/square-image.png" class="ui mini rounded image">
          <div class="content">
            Gold
            <div class="sub header">Fabric Design
          </div>
        </div>
      </h4></td>
      <td>
        $xxx
      </td>
    </tr>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="assets/images/wireframe/square-image.png" class="ui mini rounded image">
          <div class="content">
            VIP
            <div class="sub header">Entertainment
          </div>
        </div>
      </h4></td>
      <td>
        $xxx
      </td>
    </tr>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="assets/images/wireframe/square-image.png" class="ui mini rounded image">
          <div class="content">
            Free
            <div class="sub header">Executive
          </div>
        </div>
      </h4></td>
      <td>
        $0
      </td>
    </tr>
  </tbody>
</table>
  <h4 class="ui dividing header">Billing Information</h4>
  <div class="field">
    <label>Card Type</label>
    <div class="ui selection dropdown">
      <input type="hidden" name="card[type]">
      <div class="default text">Type</div>
      <i class="dropdown icon"></i>
      <div class="menu">
        <div class="item" data-value="visa">
          <i class="visa icon"></i>
          Visa
        </div>
        <div class="item" data-value="amex">
          <i class="amex icon"></i>
          American Express
        </div>
        <div class="item" data-value="discover">
          <i class="discover icon"></i>
          Discover
        </div>
      </div>
    </div>
  </div>
  <div class="fields">
    <div class="seven wide field">
      <label>Card Number</label>
      <input type="text" name="card[number]" maxlength="16" placeholder="Card #">
    </div>
    <div class="three wide field">
      <label>CVC</label>
      <input type="text" name="card[cvc]" maxlength="3" placeholder="CVC">
    </div>
    <div class="six wide field">
      <label>Expiration</label>
      <div class="two fields">
        <div class="field">
          <select class="ui fluid search dropdown" name="card[expire-month]">
            <option value="">Month</option>
          </select>
        </div>
        <div class="field">
          <input type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
        </div>
      </div>
    </div>
   <div class="ui segment">
    <div class="field">
      <div class="ui toggle checkbox">
        <input type="checkbox" name="gift" tabindex="0" class="hidden">
        <label>Do not include a receipt in the package</label>
      </div>
    </div>
  </div>
  <div class="ui button" tabindex="0">Submit</div>
</form>
</div>
</body>
</html>