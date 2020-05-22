<?php 
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('modules/transaction.php');

//Instantiate transaction
$transaction = new Transaction();

//Get Customer
$transactions = $transaction->getTransaction();

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<section class="jumbotron text-center">
        <div class="container">
        	<div class="btn-group" role="group">
        		<a href="customers.php" class="btn btn-secondary">Customers</a>
        		<a href="transaction.php" class="btn btn-primary">transactions</a>
        	</div>
        	<hr>
        	<h2>View Transaction</h2>
        	<table class="table table-striped">
        		<thead>
        			<tr>
        				<th>transactions ID</th>
        				<th>Customers ID</th>
        				<th>Product</th>
        				<th>Amount</th>
        				<th>Currency</th>
        				<th>Status</th>
        				<th>Date</th>
        			</tr>
        		</thead>
        		<tbody>
<?php foreach ($transactions as $key) { ?>
        			<tr>
        				<td><?php echo $key->id; ?></td>
        				<td><?php echo $key->userid; ?></td>
        				<td><?php echo $key->product; ?></td>
        				<td><?php echo sprintf('%.2f', $key->amount / 100); ?></td>
        				<td><?php echo $key->currency; ?></td>
        				<td><?php echo $key->status; ?></td>
        				<td><?php echo $key->creat_date; ?></td>
        			</tr>
<?php } ?>

        		</tbody>
        	</table>
        	<br>
        	<p><a class="btn btn-success" href="index.php">PayPage</a></p>
        </div>
</section>