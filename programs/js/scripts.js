$(function() {
	
	
		
		// Append the mobile icon nav
		$('.nav').append($('<div class="nav-mobile"></div>'));
		
		// Add a <span> to every .nav-item that has a <ul> inside
		$('.nav-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
		
		// Click to reveal the nav
		$('.nav-mobile').click(function(){
			$('.nav-list').toggle();
		});
	
		// Dynamic binding to on 'click'
		$('.nav-list').on('click', '.nav-click', function(){
		
			// Toggle the nested nav
			$(this).siblings('.nav-submenu').toggle();
			
			// Toggle the arrow using CSS3 transforms
			$(this).children('.nav-arrow').toggleClass('nav-rotate');
			
		});
	    
	
	

	 window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 30,
                header = document.querySelector("header");
				if (distanceY > shrinkOn) {
					$("header").addClass("smaller");
					$("nav .logo").addClass("smaller");
				} else {
					if($('header').hasClass('smaller')){
						$("header").removeClass("smaller");
						$("nav .logo").removeClass("smaller");
					}
				}
        });


	function IsEmail(email) {
	  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}
	
	window.sr = ScrollReveal();
	sr.reveal('.mainholder', { distance:'30px', duration: 800,delay: 0, scale: 1});
	//sr.reveal('.mainholder2', { distance:'30px', duration: 800,delay: 0, scale: 1});
	sr.reveal('.show1', { distance:'30px', duration: 800,delay: 0, scale: 1});
	sr.reveal('.show2', { distance:'30px', duration: 800,delay: 0, scale: 1});
	
	


	
	
	$('form#qcform').submit(function(e) {

		$('.form-group').removeClass('error'); 
		$('.help-block').remove(); 

		var formData = {
			'name' 		: $('input[name=name]').val(),
			'phone' 		: $('input[name=phone]').val(),
			'email' 		: $('input[name=email]').val(),
			'company' 	: $('input[name=company]').val()
		};

		$.ajax({
			type 		: 'POST', 
			url 			: 'process.php', 
			data 		: formData, 
			dataType 	: 'json', 
			encode 		: true
		})

			.done(function(data) {
				if ( ! data.success) {
	
					if (data.errors.name) {
						$('#name-group').addClass('error'); // add the error class to show red input
						$('#name-group').attr("placeholder","Name required");
					} else {
						$('#name-group').removeClass('error');
					}

	
					if (data.errors.phone) {
						$('#phone-group').addClass('error'); // add the error class to show red input
						$('#phone-group').attr("placeholder","Phone required");
					} else {
						$('#phone-group').removeClass('error');
					}
					
					if (data.errors.email) {
						$('#email-group').addClass('error'); // add the error class to show red input
						$('#email-group').attr("placeholder","Email required");
					} else {
						$('#email-group').removeClass('error');
					}
					
					if (data.errors.company) {
						$('#company-group').addClass('error'); // add the error class to show red input
						$('#company-group').attr("placeholder","Company required");
					} else {
						$('#company-group').removeClass('error');
					}

				} else {
					$('#qcform').hide();
					$('#formsent').show();
				}
			});

			
		e.preventDefault();
	});








  
 }); 