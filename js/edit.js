 function edit(el){
        console.log(el)
        var data = el.dataset;

        Object.keys(data).forEach(function (key) {
            let value = data[key];
            console.log(`${key} - ${value}`)
            
            if (key == "icon") {
            	$(`#IconPreview`).attr("class", value)
            	$(`#IconInput`).val(value)
            }else {
            	$(`#edit_${key}`).val(value)
            }
        });

		$(".passwordGenerateForm").css("display", "none")
        
        $('#edit_modal').modal('toggle')
    }


let show = (test) => {
	console.log(test)
	if ($(test).attr("type") == "password"){
		$(test).attr("type", "text")
	}else {
		$(test).attr("type", "password")
	}	
}

let toggle = () => {
	$("#edit_modal").modal("toggle")
}

let showGenerator = () => {
	if($(".passwordGenerateForm").css("display") == "none") {
		$(".passwordGenerateForm").fadeIn("slow")
	}else {
		$(".passwordGenerateForm").fadeOut("slow")
	}
}

function update(){
	alertify.confirm("Confirm", "Are you sure?", function(){
    	alertify.success('Updated');
    	setTimeout(
  			function(){
  				realUpdate();
  			}, 1000);
    },
  	function(){
    	alertify.error('Canceled');
    	return
  	}).set({labels:{ok:'Yes', cancel: 'No'}, padding: false});
}

function realUpdate(){
  	var user = $('#edit_user').val()		
	var password = $('#edit_password').val()
	var application = $('#edit_application').val()
	var link = $('#edit_link').val()
	var icon = $('#IconInput').val()
	var id = $('#edit_id').val()

	$.post('./api/update/update.php', {user: user, password: password, application: application, link: link, icon: icon, id: id}, function(response){
		console.log(response)

	 	if(response == 'Success'){
			location.reload()
		}
	})
}

function deletePost(id) {
	alertify.confirm("Confirm", "Are you sure?", function(){
    	alertify.success('Deleted');
    	setTimeout(
  			function(){
  				realdeletePost(id);
  			}, 1000);
    },
  	function(){
    	alertify.error('Canceled');
    	return
  	}).set({labels:{ok:'Yes', cancel: 'No'}, padding: false});
}


function realdeletePost(id) {
	$.post('./api/delete/delete.php', {id: id}, function(response){
		console.log(response)

	 	if(response == 'Success'){
			location.reload()
		}
	})
}