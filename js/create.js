function create(){
  	var user = $('#user').val()		
	var password = $('#password').val()
	var application = $('#application').val()
	var link = $('#link').val()
	var icon = $('.iconclass').val()

	$.post('./api/create/create.php', {user: user, password: password, application: application, link: link, icon: icon}, function(response){
		console.log(response)

	 	if(response == 'Success'){
	 		alertify.success('Created');
			setTimeout(
  			function(){
  				window.location.href = './index.php?content=passwords';
  			}, 1000);
		}
	 })
}

function createService() {
	alertify.confirm("Confirm", "Are you sure?", function(){
    	alertify.success('Requested');
    	setTimeout(
  			function(){
  				realCreateService();
  			}, 1000);
    },
  	function(){
    	alertify.error('Canceled');
    	return
  	}).set({labels:{ok:'Yes', cancel: 'No'}, padding: false});
	
}

function realCreateService() {
	var header = $('#header').val()		
	var body = $('#body').val()
	var footer = $('#footer').val()
	var link = $('#link').val()
	$.post('./api/create/createservice.php', {header: header, body: body, footer: footer, link: link}, function(response){
		console.log(response)
		if(response == 'Success'){
	 		alertify.success('Created');
			setTimeout(
  			function(){
  				window.location.href = './index.php?content=services';
  			}, 1000);
		}
	})
}
