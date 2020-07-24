class Form {
	ajax(method = '', dtype = '', path = '', data = '') {
		$.ajax({
			type: method,
			dataType: dtype,
			url: path,
			data: data,
			success: function(res) {
				if (res == 200) {
					$("#btnsend").attr("disabled", true).val("Subscribed");
					$(".sucess-message").text('Way to go 🚀');
				} else {
					$("#btnsend").attr("disabled", false).val('Subscribe');
					$(".error-message").text('oops! failed try ❌')
				}
				return false;
			},
			error: function (res) {
				$(".error-message").text('OMG! ❌ — '+ JSON.stringify(res));
				return false;
			}
		});
	}

	grabmail(email = ''){
		if (email.split("@").length != 2) {
			$("#btnsend").attr("disabled", false).val('Subscribe');
			$(".error-message").text('uhmm! email not right')
		} else {
			this.ajax('POST', 'json', './app/newslater', {mail: email});
		}
	}

	submit(){
		$("#newslatter").on('submit', (e) => {
			e.preventDefault();
			$("#btnsend").attr("disabled", true).val('Signing up...');
			let email = $(".email-input").val();
			this.grabmail(email);
		});
	}
}

form = new Form();
form.submit();