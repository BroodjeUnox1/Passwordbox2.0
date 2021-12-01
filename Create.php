<?php  
	if ($_COOKIE["user"] == "") {
			header("Location: http://localhost/passwordbox2.0/login.php");
		}else {
		$UserId = $_COOKIE["user"];
		}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 offset-md-2">
            <div class="container-fluid content-background">
            	<div class="row">
            		<div class="col-sm-8 text-body">
            			<h1>Create a new password</h1>
            		</div>
            	</div>
            	<div class="row">
                <div class="col-md-6">
                    <label>user</label>
                    <input type="text" class="form-control" id="user">
                </div>
                <div class="col-md-6">
                    <label>password</label>
                    <input type="password" class="form-control" id="password">
                </div>

                <div class="col-md-12">
                    <label>application</label>
                    <input type="text" class="form-control" id="application">
                </div>
                <div class="col-md-12">
                    <label>link</label>
                    <input type="text" class="form-control" id="link">
                </div>
                <div class="col-md-12 modalButtons">
                	<label class="mt-2">Icon:</label>
                    <input type="text" class="iconclass" id="IconInput" autocomplete="off" value="fas fa-question" hidden="">
                    <i id="IconPreview" class="fas fa-question"></i>
                    <button class="btn btn-success buttonModal" onclick="create()"><i class="fas fa-check"></i>Create</button>
                    <button class="btn btn-info buttonModal" onclick="showGenerator()"><i class="fas fa-check"></i> pass generator</button>
                    <button class="btn btn-info buttonModal" onclick="show('#password')"><i class="fas fa-check"></i> Show password</button>
                    <button type="button" class="btn btn-info buttonModal" id="GetIconPicker" data-iconpicker-input="input#IconInput" data-iconpicker-preview="i#IconPreview">Select Icon</button>
                </div>
                <div class="col-md-12 passwordGenerateForm mt-2">
                	<div class="row">
                		<div class="col-sm-3 form-group">
							<label>upper</label>
							<input type="checkbox" name="upper" id="upper2">
						</div>
						<div class="col-sm-3 form-group">
							<label>lower</label>
							<input type="checkbox" name="lower" id="lower2">
						</div>
						<div class="col-sm-3 form-group">
							<label>special</label>
							<input type="checkbox" name="specialChar" id="specialChar2">
						</div>
						<div class="col-sm-3 form-group">
							<label>numbers</label>
							<input type="checkbox" name="number" id="number2">
						</div>
                	</div>
                	
					<div class="col-sm-12 form-group">
						<label>length</label>
						<input type="number" name="length" id="length2">
					</div>
					<div class="col-sm-12 form-group">
						<button class="btn btn-block btn-success" onclick="password('#password', $('#upper2').is(':checked'), $('#lower2').is(':checked'), $('#specialChar2').is(':checked'), $('#number2').is(':checked'), $('#length2').val())">Generate</button>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
	