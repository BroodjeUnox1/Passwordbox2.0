function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function loadNav() {
	$(".sidenav").css("transition", "0.0s")
	if($(".sidenav").css("width") == "0px") {
		$(".sidenav").css("width", "250px");
		setTimeout(
  			function(){
  				$(".sidenav").css("transition", "0.5s")
  			}, 500);
	}
}