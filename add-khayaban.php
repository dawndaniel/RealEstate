<?php
include('connection.php');
include ('header.php');
include ('side-menu.php');

if (isset($_POST['addrecode']))
 {
 $Khayaban = mysqli_real_escape_string($conn, $_POST['khayaban']);
//$teacher_name = mysqli_real_escape_string($con, $_POST['teachername']);

  
    
    $query = "INSERT INTO khayaban (Khayabanname) VALUES('$Khayaban')";
    mysqli_query($conn, $query);
    //header('location: batches.php');
    //echo "Data Added";
  
}
?>

	<!-- Content area -->
			<div class="content">

				<!-- Horizontal form options -->
				<div class="row">
					<div class="col-md-12">

						<!-- Basic layout-->
						<form method="POST">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Add Defence Khayaban</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                	<!-- 	<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a> -->
				                	</div>
			                	</div>
							</div>


							<div class="card-body">
								<div class="form-group row">
										
										<div class="col-lg-12">
											<label class="col-form-label">Khayaban Name: </label>
											<input type="text" name="khayaban" class="form-control" placeholder="khayaban-Jami" required="">
										</div>
									</div>
								</div>
								<div class="text-right">
										<button name="addrecode" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
							</div>
							</div>
							</form>
							
						</div>
					</div>
				</div>
<?php include ('footer.php')?>