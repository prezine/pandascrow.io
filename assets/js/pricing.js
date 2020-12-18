class Pricing {
	fundtoggle() {
		$('#fundtoggler li').on('click', function() {
			$('#fundtoggler li').removeClass('active');
			$(this).addClass('active');
			var pricingtype = $(this).data('sort');
			$(".pricingframe").addClass('hide');
			$("#"+pricingtype).removeClass('hide');
		})
	}
	perc(amount, percent) {
		return percent / 100 * amount;
	}
	currencyFormat(num) {
	    return "₦ " + num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
	}
	sendercalc(amt) {
		// amount, scrowfee, processfee, total
		var a, s, p, t; 
		a = $("#damtcalc");
		s = $("#dscrowfee");
		p = $("#dprocessfee");
		t = $("#dtotalamt");
		// realtime calculator
		a.text(this.currencyFormat(Number(amt)));
		s.text(this.currencyFormat(this.perc(Number(amt), 1.5)))
		p.text(this.currencyFormat(this.perc(Number(amt), 0.1)))
		
		var x, y, z;
		x = Number(amt)
		y = this.perc(Number(amt), 1.5)
		z = this.perc(Number(amt), 0.1)
		t.text(this.currencyFormat((x+y+z)));
	}

	withdrawal(amt) {
		// amount, scrowfee, total
		var a, s, t; 
		a = $("#wamtcalc");
		s = $("#wscrowfee");
		t = $("#wtotalamt");
		// realtime calculator
		a.text(this.currencyFormat(Number(amt)));
		s.text(this.currencyFormat(this.perc(Number(amt), 1.5)))
		
		var y, z;
		y = Number(amt)
		z = this.perc(Number(amt), 1.5)
		t.text(this.currencyFormat((y-z)));
	}
}

pricing = new Pricing();
pricing.fundtoggle();