class Form {
	ajax(method = '', dtype = '', path = '', data = '') {
		$.ajax({
			type: method,
			dataType: dtype,
			url: path,
			data: data,
			success: function(res) {
				alert(JSON.stringify(res))
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

	error(pos, message) {
		var errno = { 
			// Success Message
			"success":
			'<div class="alert alert-success alert-dismissible fade show" role="alert">\
	            <button aria-label="Close" class="close" data-dismiss="alert" type="button">\
	                <span aria-hidden="true"> ×</span>\
	            </button>\
	            <strong>Yay! </strong>'+ message +'\
	        </div>',
			// Warning Message
			"warning":
			'<div class="alert alert-warning alert-dismissible fade show" role="alert">\
	            <button aria-label="Close" class="close" data-dismiss="alert" type="button">\
	                <span aria-hidden="true"> ×</span>\
	            </button>\
	            <strong>Uhmm! </strong>'+ message +'\
	        </div>',
			// Danger Message
			"danger":
			'<div class="alert alert-danger alert-dismissible fade show" role="alert">\
	            <button aria-label="Close" class="close" data-dismiss="alert" type="button">\
	                <span aria-hidden="true"> ×</span>\
	            </button>\
	            <strong>Oops! </strong>'+ message +'\
	        </div>',
			// Information Message
			"info":
			'<div class="alert alert-info alert-dismissible fade show" role="alert">\
	            <button aria-label="Close" class="close" data-dismiss="alert" type="button">\
	                <span aria-hidden="true"> ×</span>\
	            </button>\
	            <strong>Hey! </strong>'+ message +'\
	        </div>',
		}
		return errno[pos];
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

	contact(){
		$("#contactscrow").on('submit', (e) => {
			e.preventDefault();
			$("#contactbtn").attr("disabled", true).val('Message sending...');
			let name = $("#name").val();
			let email = $("#email").val();
			let message = $("#message").val();
			if (name != "") {
				$("#contactbtn").attr("disabled", false).val('Send message ');
				$("#errno").html(this.error("danger", "Name field is invalid"));
			} else if (email.split("@").length != 2) {
				$("#contactbtn").attr("disabled", false).val('Send message ');
				$("#errno").html(this.error("danger", "Email field is invalid"));
			} else if (message != "") {
				$("#contactbtn").attr("disabled", false).val('Send message ');
				$("#errno").html(this.error("danger", "Message field is invalid"));
			} else {
				let contactdata = {
					contactname: name,
					contactemail: email,
					contactmessage: message
				}
				this.ajax('POST', 'json', './app/contact', contactdata);
			}
		});
	}
}

form = new Form();
form.submit();
form.contact();