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

/* --------------------------------- */
$(".quote-form").on('submit', function (e) {
	e.preventDefault();
	let mail = $('#mailid').val();
	let btn = $('.btn-submit');
	if (mail.split("@").length != 2) {
		btn.attr("disabled", false).text('Get Started');
		$(".errno").text('Uhmm! Email not right')
	} else {
		$.ajax({
			type: 'POST',
			dataType: 'JSON',
			url: './app/newslater',
			data: {
				mail: mail
			},
			success: function(res) {
				if (res == 200) {
					btn.attr("disabled", true).text("Email Sent 🚀");
					$(".errno").addClass('text-success').html("Awesome, way to go, we'd treat you more seriously &nbsp; 🚀")
				} else {
					btn.attr("disabled", false).text('Get Started');
					$(".errno").addClass('text-danger').html('Oops, something went wrong &nbsp; ❌')
				}
				return false;
			},
			error: function (res) {
				$(".errno").text('OMG! ❌ — '+ JSON.stringify(res));
				return false;
			}
		});
	}
})

/* ---------------------------------- */
$("#contactscrow").on('submit', (e) => {
	e.preventDefault();
	$("#contactbtn").attr("disabled", true).text('Message sending 🚀');
	let name = $("#name").val();
	let email = $("#email").val();
	let message = $("#message").val();
	let btn = $('#contactbtn');
	let contactdata = {
		contactname: name,
		contactemail: email,
		contactmessage: message
	}
	$.ajax({
		type: 'POST',
		dataType: 'JSON',
		url: './app/contact',
		data: contactdata,
		success: function(res) {
			if (res == 200) {
				btn.attr("disabled", true).text("Message sent");
				$(".errno").addClass('text-success').html("Awesome, we've recieved your messaged, thank you for reaching out 🚀")
			} else {
				btn.attr("disabled", false).text('Send message');
				$(".errno").addClass('text-danger').html('Oops, something went wrong &nbsp; ❌')
			}
			return false;
		},
		error: function (res) {
			$(".errno").text('OMG! ❌ — '+ JSON.stringify(res));
			return false;
		}
	});
});