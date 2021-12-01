<?php  
	if ($_COOKIE["user"] == "") {
			header("Location: http://localhost/passwordbox2.0/login.php");
		}else {
		$UserId = $_COOKIE["user"];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PasswordBox</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="	sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
     <!-- CSS -->
    <link rel="stylesheet" href="css/alertify.css"/>
    <!-- css -->
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <link rel="stylesheet" href="./css/fontawesome-5.11.2/all.min.css">
    <link rel="stylesheet" href="./css/iconpicker-1.5.0.css">
    <script src="./js/iconpicker-1.5.0.js"></script>
   
    
</head>
<body onload="loadNav();">
	<!-- modal -->
    <div id="edit_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit data</h4>
            <button type="button" class="close" onclick="toggle()">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
                <input type="hidden" id="edit_id">
                <div class="col-md-6">
                    <label>user</label>
                    <input type="text" class="form-control" id="edit_user">
                </div>
                <div class="col-md-6">
                    <label>password</label>
                    <input type="password" class="form-control" id="edit_password">
                </div>

                <div class="col-md-12">
                    <label>application</label>
                    <input type="text" class="form-control" id="edit_application">
                </div>
                <div class="col-md-12">
                    <label>link</label>
                    <input type="text" class="form-control" id="edit_link">
                </div>
                <div class="col-md-12">
                    <label class="mt-2">Icon:</label>
                    <input type="text" id="IconInput" name="edit_icon" required="" autocomplete="off" spellcheck="false" hidden="">
                    <i id="IconPreview" class="fab fa-github"></i>
                    <button type="button" class="btn btn-info mt-2 float-right" id="GetIconPicker" data-iconpicker-input="input#IconInput" data-iconpicker-preview="i#IconPreview">Select Icon</button>
                </div>
                <div class="col-md-12 modalButtons">
                    <button class="btn btn-success buttonModal" onclick="update()"><i class="fas fa-check"></i> Save data</button>
                    <button class="btn btn-info buttonModal" onclick="showGenerator()"><i class="fas fa-check"></i> pass generator</button>
                    <button class="btn btn-info buttonModal" onclick="show('#edit_password')"><i class="fas fa-check"></i> Show password</button>
                </div>
                <div class="col-md-12 passwordGenerateForm mt-2">
                	<div class="row">
                		<div class="col-sm-3 form-group">
							<label>upper</label>
							<input type="checkbox" name="upper" id="upper">
						</div>
						<div class="col-sm-3 form-group">
							<label>lower</label>
							<input type="checkbox" name="lower" id="lower">
						</div>
						<div class="col-sm-3 form-group">
							<label>special</label>
							<input type="checkbox" name="specialChar" id="specialChar">
						</div>
						<div class="col-sm-3 form-group">
							<label>numbers</label>
							<input type="checkbox" name="number" id="number">
						</div>
                	</div>
                	
					<div class="col-sm-12 form-group">
						<label>length</label>
						<input type="number" name="length" id="length">
					</div>
					<div class="col-sm-12 form-group">
						<button class="btn btn-block btn-success" onclick="password('#edit_password', $('#upper').is(':checked'), $('#lower').is(':checked'), $('#specialChar').is(':checked'), $('#number').is(':checked'), $('#length').val())">Generate</button>
					</div>
                </div>

            </div>
          </div>
        </div>

      </div>
    </div>


    <section class="container-fluid px-0 sticky-top">
        <div class="row">
            <div class="col-md-12"><?php include("./resources/nav.php"); ?></div>
        </div>
    </section>
    <section class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <?php include("resources/welcome.php") ?>
            </div>
        </div>
    </section>
    <section class="container-fluid px-0">
        <div class="row">
            <div class="col-12">
                <?php include("resources/content.php") ?>
            </div>
        </div>
    </section>

<script src="js/password.js"></script>
<script src="js/edit.js"></script>
<script src="js/navbar.js"></script>
<script src="js/create.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</body>
</html>