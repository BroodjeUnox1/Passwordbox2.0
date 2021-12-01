<?php  
	$conn = new mysqli("localhost", "root", "", "pwb");
	$sql = "SELECT * FROM services";
	
	$result = $conn->query($sql);

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 offset-md-2">
			<div class="container-fluid content-background">
				<div class="row">
					<?php while ($row = mysqli_fetch_assoc($result)): ?>
    				<?php  
    				    $id = $row["id"];
    				    $header = $row["header"];
    				    $body = $row["body"];
    				    $footer = $row["footer"];
    				    $link = $row["link"];
    				?>
    					<div class="col-lg-4 col-md-6 mt-md-3 mt-lg-3 col-sm-12 mt-sm-3 mt-3 text-center">
							<div class="card">
								<div class="card-header text-left">
									<h5><?=$header?></h5>
								</div>
								<div class="card-body">
									<a href="<?=$link?>"><img src="<?=$body?>" width="100"></a>
								</div>
								<div class="card-footer text-left">
									<h5><?=$footer?></h5>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</div>