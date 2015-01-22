Gumby.init();

var $j = jQuery.noConflict();

$j(function() {

	// homepage carousel
	$j("#ch-carousel").owlCarousel({
		items: 1,
		lazyLoad : true,
		navigation : true,
		slideSpeed : 4000,
		paginationSpeed : 800,
		navigationText: ["",""],
		autoPlay: true,
		itemsDesktop: false,
		itemsDesktopSmall: false,
		itemsTablet: false,
		itemsTabletSmall: false,
		itemsMobile: false,
		stopOnHover: true
	});
	
	// dates
	var dateMin = new Date();
	var weekDays = AddWeekDays(1);
	dateMin.setDate(dateMin.getDate() + weekDays);
	var natDays = [
	  [1, 1, 'uk'],
	  [12, 25, 'uk'],
	  [12, 26, 'uk']
	];
	function noWeekendsOrHolidays(date) {
		var noWeekend = $j.datepicker.noWeekends(date);
		if (noWeekend[0]) {
			return nationalDays(date);
		} else {
			return noWeekend;
		}
	}
	function nationalDays(date) {
		for (i = 0; i < natDays.length; i++) {
			if (date.getMonth() == natDays[i][0] - 1 && date.getDate() == natDays[i][1]) {
				return [false, natDays[i][2] + '_day'];
			}
		}
		return [true, ''];
	}
	function AddWeekDays(weekDaysToAdd) {
		var mydate = new Date();
		if (mydate.getHours()>=10) 
		var daysToAdd = 1;
		else var daysToAdd = 0;
		var day = mydate.getDay()
		weekDaysToAdd = weekDaysToAdd - (5 - day)
		if ((5 - day) < weekDaysToAdd || weekDaysToAdd == 1) {
			daysToAdd = (5 - day) + 2 + daysToAdd
		} else { // (5-day) >= weekDaysToAdd
			daysToAdd = (5 - day) + daysToAdd
		}
		while (weekDaysToAdd != 0) {
			var week = weekDaysToAdd - 5
			if (week > 0) {
				daysToAdd = 7 + daysToAdd
				weekDaysToAdd = weekDaysToAdd - 5
			} else { // week < 0
				daysToAdd = (5 + week) + daysToAdd
				weekDaysToAdd = weekDaysToAdd - (5 + week)
			}
		}

		return daysToAdd;
	}	
	
	$j('.input-text.addon.addon-custom').datepicker({
		beforeShowDay: function(day){
             if (day.getDay()<2 || day.getDay()>4){
                return [false, ""];
            }
            return noWeekendsOrHolidays(day);
        },
		minDate : dateMin,
		defaultDate: +1,
		firstDay: 1,
		changeFirstDay: true,
		dateFormat: "DD, dd MM yy"
	});
	
	// smooth scroll
	$j('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $j(this.hash);
			target = target.length ? target : $j('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$j('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
});