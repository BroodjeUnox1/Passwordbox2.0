<?php include("./api/database/db.php");
    	$sql = "SELECT * FROM passwords";
    	$result = $conn->query($sql);
	?>

    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-9 offset-md-2">
    			<div class="container-fluid content-background">
    				<?php if(mysqli_num_rows($result) > 0): ?>
    				<?php while ($row = mysqli_fetch_assoc($result)): ?>
    				    <?php  
    				        $id = $row["id"];
    				        $user = $row["user"];
    				        $password = $row["password"];
    				        $application = $row["application"];
    				        $link = $row["link"];
                            $icon = $row["icon"];
    				    ?>
    				    <div class="row ml-4 passwordRow">
                            <div class="mr-4 mt-3 rowNumber">
                                <i class="<?=$icon?> iconMax"></i>
                            </div>
                            <div class="col-lg-12 col-xl-1 passwordLine">
                                <input type="text" name="user" value="<?=$user?>" disabled class="form-control">
                            </div>
                            <div class="col-lg-12 col-xl-2 passwordLine">
                                <input type="password" name="password" value="<?=$password?>" disabled class="form-control">
                            </div>
                            <div class="col-lg-12 col-xl-2 passwordLine">
                                <input type="text" name="application" value="<?=$application?>" disabled class="form-control">
                            </div>
                            <div class="col-lg-12 col-xl-4 passwordLine">
                                <input type="text" name="link" value="<?=$link?>" disabled class="form-control">
                            </div>
                            <div class="col-lg-12 col-xl-1 passwordLine">
                                <button 
                                    class="btn btn-info" 
                                    onclick="edit(this)" 
                                    data-id="<?=$id?>" 
                                    data-user="<?=$user?>" 
                                    data-password ="<?=$password?>"
                                    data-application="<?=$application?>"
                                    data-link="<?=$link?>"
                                    data-icon="<?php echo $icon ?>">
                                    edit
                                </button>
                            </div>
                            <div class="col-lg-12 col-xl-1 passwordLine"><button class="btn btn-danger" onclick="deletePost(<?=$id?>)">delete</button></div>
    				    </div>
    				<?php endwhile; ?>
					<?php endif; ?>
    			</div>
    		</div>
    	</div>
	</div>