IconPicker.Init({
    jsonUrl: 'js/iconpicker-1.5.0.json',
    searchPlaceholder: 'Search Icon',
    showAllButton: 'Show All',
    cancelButton: 'Cancel',
    noResultsFound: 'No results found.',
    borderRadius: '20px'
});
IconPicker.Run('#GetIconPicker', function () {
});

 function password(which, upper, lower, special, number, length) {
 	console.log (upper)
	let selection = {
		upper: upper,
		lower: lower,
		special: special,
		number: number
	};

	let config = {
		upper : "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
		lower : "abcdefghijklmnopqrstuvwxyz",
		number : "1234567890",
		special : "!@#$%^&*()_+{}[],.?/~"
	}

	let charList = '';
	var options = ['upper', 'lower', 'special', 'number'];

	options.forEach(function(key, index){
		if(selection[key]){
			charList += config[key];
		}
	})

	let generatePassword = '';

	for(i=0;i<length;i++){
	 	var randomNum = Math.ceil(Math.random() * parseInt(charList.length))
	 	generatePassword += charList.charAt(randomNum);
	}

	console.log(generatePassword)

	$(which).val(generatePassword);

}


// function showPassword(password) {

// 	if (password.attr('type') == "password") {
// 		password.attr('type', 'text');
// 	} else {
// 		password.attr('type', 'password');
// 	}
// }