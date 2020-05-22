<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">
	<br>
          <div class="btn-group" role="group">
            <a href="customers.php" class="btn btn-primary">Customers</a>
            <a href="transaction.php" class="btn btn-primary">transactions</a>
          </div>
  <br>
	<h2 style="text-align: center;">Payment APIs Stripe</h2>
	<hr><br><br>
<form action="charge.php" method="post" id="payment-form">
  <div class="form-row">
  	<input class="form-control mb-3 StripeElement StripeElement--empty" type="text" placeholder="First Name" name="first_name">
  	<input class="form-control mb-3 StripeElement StripeElement--empty" type="text" placeholder="Last Name" name="last_name">
  	<input class="form-control mb-3 StripeElement StripeElement--empty" type="email" placeholder="Email Address" name="email">

    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    
    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
  <button type="Submit">Submit Payment</button>
</form>
</div>

<script src="js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">