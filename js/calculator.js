function addnumber(val) {
	$("#result").val($("#result").val()+val)
}

function calc(calc) {
	$("#result").val(eval(calc))
}

function clearscreen() {
	$("#result").val("")
}

function squared() {
	$("#result").val(eval($("#result").val() * $("#result").val()))
}