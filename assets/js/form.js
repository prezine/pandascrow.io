class Form {
	ajax(method = '', dtype = '', path = '', data = '', successfunc = '', errorfunc = '') {
		$.ajax({
			type: "POST",
			dataType: "json",
			url: './app/models/getstarted',
			data: getstarteddata,
			success: function(res) {
				if (res == 200) {
					$("#submitbtn").text("Created!");
					error.html(err('success', 'Awesome, Your business has been created'))
					window.location = "./";
				} else {
					$("#submitbtn").attr("disabled", false);
					$("#submitbtn").text("Create a business");
					error.html(err('danger', 'Something went wrong, try again soon'))
				}
			},
			error: function (res) {
				error.html(err('danger', 'Server message: '+ JSON.stringify(res)))
				return false;
			}
		});
	}
	grabmail(email) {
		if (email.split("@").length != 2) {

		} else {
			let successfunc = {
				
			}
			this.ajax('POST', 'json', './app/newslater', {mail: email}, successfunc)
		}
	}
}