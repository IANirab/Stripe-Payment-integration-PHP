<?php
if (!empty($_GET['tid']) && !empty($_GET['product'])) {
$GET = filter_var_array($_GET,FILTER_SANITIZE_STRING);

$tid = $_GET['tid'];
$product = $_GET['product'];

} else {
	header("location:index.php");
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">!! Thanks You !!</h1>
          <p class="lead text-muted">Your Transaction ID : <?php echo $tid; ?></p>
          <p class="lead text-muted">Check Your Email For More Info</p>
          <p>
            <a href="index.php" class="btn btn-primary my-2">Go Back</a>
          </p>
        </div>
</section>