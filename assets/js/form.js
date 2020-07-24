class Form {
	ajax(method = '', dtype = '', path = '', data = '', successfunc = '', errorfunc = '') {
		$.ajax({
			type: method,
			dataType: dtype,
			url: path,
			data: getstarteddata,
			success: function(res) {
				successfunc(res);
			},
			error: function (res) {
				errorfunc(res)
			}
		});
	}
	grabmail(email = ''){
		if (email.split("@").length != 2) {
			$("#btnsend").attr("disabled", false).val('Subscribe');
			$(".error-message").text('uhmm! email not right')
		} else {
			// success function
			let successfunc = (res) => {
				if (res == 200) {
					$("#btnsend").attr("disabled", true).val("Subscribed");
					$(".sucess-message").text('Way to go 🚀');
				} else {
					$("#btnsend").attr("disabled", false).val('Subscribe');
					$(".error-message").text('oops! failed try ❌')
				}
			}
			// error function
			let errorfunc = (res) => {
				$(".error-message").text('OMG! ❌ — '+ JSON.stringify(res));
				return false;
			}
			this.ajax('POST', 'json', './app/newslater', {mail: email}, successfunc(res), errorfunc(res));
		}
	}
	submit(){
		$("#newslatter").on('submit', function (e) {
			e.preventDefault();
			let email = $(".email-input").val();
			this.grabmail();
		})
	}
}

form = new Form();
form.submit();