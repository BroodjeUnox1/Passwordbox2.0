<!-- <form method="POST" id="Register">
						<div class="form-group text-secondary">
							<input class="form-control" type="text" name="username" required="" placeholder="Please enter your username:">
							<input style="margin-top: 7px;" class="form-control" type="password" name="password" required="" placeholder="Please enter your password:">
							<input style="margin-top: 7px;" class="form-control" type="password" name="SecPassword" required="" placeholder="Please Repeat your password:">
							<input style="margin-top: 7px;" class="form-control" type="email" name="email" required="" placeholder="Please enter your email:">
							<button type="submit" name="Register" style="margin-top: 7px;" class="btn btn-primary form-control"><strong style="color: #333">Register</strong></button>
						</div>
					</form> -->


		<!-- 			<form method="POST" id="Login">
								<div class="form-group text-secondary">
									<label class="control-label has-feedback">Username</label>
									<input class="form-control rounded-input" type="text" name="username" required="" placeholder="Enter your username:">
									<i class="glyphicon glyphicon-user form-control-feedback"></i>
								</div>
								<div class="form-group text-secondary">
									<label class="control-label has-feedback">Password</label>
									<input style="margin-top: 7px;" class="form-control rounded-input" type="password" name="password" required="" placeholder="Password:">	
									<i class="glyphicon glyphicon-ok form-control-feedback"></i>
								</div>
								<button type="submit" name="Login" style="margin-top: 7px;" class="btn btn-primary form-control rounded-button"><strong style="color: #333">Login</strong></button>	
							</form> -->







<form method="POST">
								<div class="input-group shadow">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input class="form-control rounded-input" type="text" name="username" required="" placeholder="Enter your username:">
								</div>
								<div class="input-group shadow" style="margin-top: 20px;">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-envelope"></i>
									</span>
									<input class="form-control rounded-input" type="email" name="email" required="" placeholder="Enter your email:">
								</div>
								<div class="input-group shadow" style="margin-top: 20px;">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-lock"></i>
									</span>
									<input class="form-control rounded-input" type="password" name="password" required="" placeholder="Password:">
								</div>
								<div class="input-group shadow" style="margin-top: 20px;">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-lock"></i>
									</span>
									<input class="form-control rounded-input" type="password" name="SecPassword" required="" placeholder="Repeat password:">
								</div>
								<button type="submit" name="Register" style="margin-top: 7px;" class="btn btn-primary form-control rounded-button">
									<strong style="color: #333">Register</strong>
								</button>
							</form>
							<div class="col-xs-8 col-xs-offset-2">
								<a href="login.php"><h6>Already have an account?</h6></a>
							</div>







						

<form method="POST">
								<div class="input-group shadow">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-user"></i>
									</span>
									<input class="form-control rounded-input" type="text" name="username" required="" placeholder="Enter your username:">
								</div>
								<div class="input-group shadow" style="margin-top: 20px;">
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-lock"></i>
									</span>
									<input class="form-control rounded-input" type="password" name="password" required="" placeholder="Password:">
								</div>
								<button type="submit" name="Login" style="margin-top: 7px;" class="btn btn-primary form-control rounded-button">
									<strong style="color: #333">Login</strong>
								</button>
							</form>
							<div class="col-xs-8 col-xs-offset-2">
								<a href="register.php"><h6>Create account⟶</h6></a>
							</div>


							<div id="edit_modal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Edit data</h4>
		      </div>
		      <div class="modal-body">
		      	<div class="row">
		      		<input type="hidden" id="edit_id">
		        	<div class="col-md-6">
		        		<label>User</label>
		        		<input type="text" class="form-control" id="edit_user">
		        	</div>
		        	<div class="col-md-6">
		        		<label>Password</label>
		        		<input type="text" class="form-control" id="edit_password">
		        	</div>

		        	<div class="col-md-6">
		        		<label>Appliction</label>
		        		<input type="text" class="form-control" id="edit_application">
		        	</div>
		        	<div class="col-md-6">
		        		<label>Link</label>
		        		<input type="text" class="form-control" id="edit_link">
		        	</div>
		        	<div class="col-md-12">
		        		<button class="btn btn-success" style="float: right;margin-top: 7px" onclick="update()"><i class="fas fa-check"></i> Save data</button>
		        	</div>

		      	</div>
		      </div>
		    </div>

		  </div>
	</div>

		  <div class="col-md-12 col-xs-12 text-right bg-light">
			<h1 id="user-id" style="padding-bottom: 7px; margin-bottom: 0px;">Welkom: </h1>
		</div>
		<div class="row h-75" style="margin: 0;">
			<div class="col-md-2 bg-primary">
				<h1>tasks selecteren zoals socials</h1>
			</div>
			<div class="col-md-10 bg-secondary">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
				</div>
				<table class="table" id="table">
      					<thead>
      						<tr>
      							<th class="tg-0pky">User</th>
      							<th class="tg-0pky">Password</th>
      							<th class="tg-0pky">Application</th>
      							<th class="tg-0pky">Link</th>
      							<th class="tg-0pky">Change</th>
      							<th class="tg-0pky">Delete</th>
      						</tr>
      					</thead>
      					<tbody id="remote_data">
      						<!-- loaded via get call -->
      					</tbody>
      				</table>
			</div>
		</div>
		<script type="text/javascript">

			function update() {
				var user = $('#edit_user').val()		
				var password = $('#edit_password').val()
				var application = $('#edit_application').val()
				var link = $('#edit_link').val()
				var id = $('#edit_id').val()

			}

			function edit(el) {
				console.log(el);

				var data = el.dataset;
				console.log(data);

				Object.keys(data).forEach(function (key){
					let value = data[key];
					console.log(value);
					$(`#edit_${key}`).val(value);
				})

				$('#edit_modal').modal('toggle')
			}

			
			function loadTable(){
				// Make sure there is no datatable initialized
				$('#table').DataTable().destroy()

				// Make sure that the table is empty before filling
				$('#remote_data').empty()

				$.get('./api/get/get.php', function(data){

					var data = JSON.parse(data)

					for(i=0;i<data.length;i++){
						$('#remote_data').append(`
							<tr>
								<td>${data[i].user}</td>
								<td>${data[i].password}</td>
								<td>${data[i].application}</td>
								<td>${data[i].link}</td>
								<td><span class='fakeAnchor' onclick="edit(this)" data-user='${data[i].user}' data-password='${data[i].password}' data-application='${data[i].application}'  data-link='${data[i].link}' data-id='${data[i].id}'>Edit</span></td>
								<td><i class="fas fa-times" style="color:red;font-size=30px;cursor:pointer" onclick="deleteRecord(${data[i].id})"></i></td>
							</tr>
						`)

					}

					$('#table').DataTable({
						lengthMenu: [ 4, 6, 8 ],
						order: [[ 4, "asc" ]]
					});

				})
			}

			$(document).ready(function(){
				loadTable();
			// })
		</script>