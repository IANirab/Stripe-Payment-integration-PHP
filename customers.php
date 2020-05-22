<?php 
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('modules/customers.php');

//Instantiate Customer
$customer = new Customer();

//Get Customer
$customers = $customer->getCustomers();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<section class="jumbotron text-center">
        <div class="container">
        	<div class="btn-group" role="group">
        		<a href="customers.php" class="btn btn-primary">Customers</a>
        		<a href="transaction.php" class="btn btn-secondary">transactions</a>
        	</div>
        	<hr>
        	<h2>View Customers</h2>
        	<table class="table table-striped">
        		<thead>
        			<tr>
        				<th>Customer ID</th>
        				<th>Name</th>
        				<th>Email</th>
        				<th>Date</th>
        			</tr>
        		</thead>
        		<tbody>
<?php foreach ($customers as $key) { ?>
        			<tr>
        				<td><?php echo $key->id; ?></td>
        				<td><?php echo $key->first_name; ?> <?php echo $key->last_name; ?></td>
        				<td><?php echo $key->email; ?></td>
        				<td><?php echo $key->creat_date; ?></td>
        			</tr>
<?php } ?>

        		</tbody>
        	</table>
        	<br>
        	<p><a class="btn btn-success" href="index.php">PayPage</a></p>
        </div>
</section>