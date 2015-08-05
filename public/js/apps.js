$(document).ready(function(){

	/** SIDEBAR FUNCTION **/
	$('.sidebar-left ul.sidebar-menu li a').click(function() {
		"use strict";
		$('.sidebar-left li').removeClass('active');
		$(this).closest('li').addClass('active');	
		var checkElement = $(this).next();
			if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				$(this).closest('li').removeClass('active');
				checkElement.slideUp('fast');
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				$('.sidebar-left ul.sidebar-menu ul:visible').slideUp('fast');
				checkElement.slideDown('fast');
			}
			if($(this).closest('li').find('ul').children().length == 0) {
				return true;
				} else {
				return false;	
			}		
	});

	if ($(window).width() < 1025) {
		$(".sidebar-left").removeClass("sidebar-nicescroller");
		$(".sidebar-right").removeClass("right-sidebar-nicescroller");
		$(".nav-dropdown-content").removeClass("scroll-nav-dropdown");
	}
	/** END SIDEBAR FUNCTION **/
	
	
	/** BUTTON TOGGLE FUNCTION **/
	$(".btn-collapse-sidebar-left").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle");
		$(".sidebar-left").toggleClass("toggle");
		$(".page-content").toggleClass("toggle");
		$(".icon-dinamic").toggleClass("rotate-180");
		
		if ($(window).width() > 991) {
			if($(".sidebar-right").hasClass("toggle-left") === true){
				$(".sidebar-right").removeClass("toggle-left");
				$(".top-navbar").removeClass("toggle-left");
				$(".page-content").removeClass("toggle-left");
				$(".sidebar-left").removeClass("toggle-left");
				if($(".sidebar-left").hasClass("toggle") === true){
					$(".sidebar-left").removeClass("toggle");
				}
				if($(".page-content").hasClass("toggle") === true){
					$(".page-content").removeClass("toggle");
				}
			}
		}
	});
	$(".btn-collapse-sidebar-right").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle-left");
		$(".sidebar-left").toggleClass("toggle-left");
		$(".sidebar-right").toggleClass("toggle-left");
		$(".page-content").toggleClass("toggle-left");
	});
	$(".btn-collapse-nav").click(function(){
		"use strict";
		$(".icon-plus").toggleClass("rotate-45");
	});
	/** END BUTTON TOGGLE FUNCTION **/
	
	
	/** BEGIN PREETY PRINT **/
	$(window).load(function() {
    "use strict";
	prettyPrint()})
	/** END PREETY PRINT **/
	

	/** BEGIN TOOLTIP FUNCTION **/
	$('.tooltips').tooltip({
	  selector: "[data-toggle=tooltip]",
	  container: "body"
	})
	$('.popovers').popover({
	  selector: "[data-toggle=popover]",
	  container: "body"
	})
	/** END TOOLTIP FUNCTION **/
	
	
	/** NICESCROLL AND SLIMSCROLL FUNCTION **/
    $(".sidebar-nicescroller").niceScroll({
		cursorcolor: "#121212",
		cursorborder: "0px solid #fff",
		cursorborderradius: "0px",
		cursorwidth: "0px"
	});
    $(".sidebar-nicescroller-visible-scroller").niceScroll({
		cursorcolor: "#121212",
		cursorborder: "0px solid #fff",
		cursorborderradius: "0px",
		cursorwidth: "5px",
		cursoropacitymax: 0.2
	});
	$(".sidebar-nicescroller").getNiceScroll().resize();
    $(".right-sidebar-nicescroller").niceScroll({
		cursorcolor: "#111",
		cursorborder: "0px solid #fff",
		cursorborderradius: "0px",
		cursorwidth: "0px"
	});
	$(".right-sidebar-nicescroller").getNiceScroll().resize();
	
	$(function () {
		"use strict";
		$('.scroll-nav-dropdown').slimScroll({
			height: '350px',
			position: 'right',
			size: '4px',
			railOpacity: 0.3
		});
	});
	/** END NICESCROLL AND SLIMSCROLL FUNCTION **/
	
	
	
	
	/** BEGIN BACK TO TOP **/
	$(function () {
		$("#back-top").hide();
	});
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
		
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
	/** END BACK TO TOP **/

	/** BEGIN SUMMERNOTE **/
	if ($('.summernote-lg').length > 0){
		$('.summernote-lg').summernote({
			height: 400
		});
	}
	
	if ($('.summernote-sm').length > 0){
		$('.summernote-sm').summernote({
			height: 200,
			  toolbar: [
				//['style', ['style']], // no style button
				['style', ['bold', 'italic', 'underline', 'clear']],
				['font', ['strike']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['height', ['height']],
				//['insert', ['picture', 'link']], // no insert buttons
				//['table', ['table']], // no table button
				//['help', ['help']] //no help button
			  ]
		});
	}
	/** END SUMMERNOTE **/
	

   

	/** BEGIN CHOSEN JS **/
	$(function () {
		"use strict";
		var configChosen = {
		  '.chosen-select'           : {},
		  '.chosen-select-deselect'  : {allow_single_deselect:true},
		  '.chosen-select-no-single' : {disable_search_threshold:10},
		  '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		  '.chosen-select-width'     : {width:"100%"}
		}
		for (var selector in configChosen) {
		  $(selector).chosen(configChosen[selector]);
		}
	});
	/** END CHOSEN JS **/

	/** BEGIN ICHECK **/
	/** Minimal Skins **/
	if ($('.i-black').length > 0){
		$('input.i-black').iCheck({
			checkboxClass: 'icheckbox_minimal',
			radioClass: 'iradio_minimal',
			increaseArea: '20%'
		});
	}
	if ($('.i-red').length > 0){
		$('input.i-red').iCheck({
			checkboxClass: 'icheckbox_minimal-red',
			radioClass: 'iradio_minimal-red',
			increaseArea: '20%'
		});
	}
	if ($('.i-green').length > 0){
		$('input.i-green').iCheck({
			checkboxClass: 'icheckbox_minimal-green',
			radioClass: 'iradio_minimal-green',
			increaseArea: '20%'
		});
	}
	if ($('.i-blue').length > 0){
		$('input.i-blue').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue',
			increaseArea: '20%'
		});
	}
	if ($('.i-aero').length > 0){
		$('input.i-aero').iCheck({
			checkboxClass: 'icheckbox_minimal-aero',
			radioClass: 'iradio_minimal-aero',
			increaseArea: '20%'
		});
	}
	if ($('.i-grey').length > 0){
		$('input.i-grey').iCheck({
			checkboxClass: 'icheckbox_minimal-grey',
			radioClass: 'iradio_minimal-grey',
			increaseArea: '20%'
		});
	}
	if ($('.i-orange').length > 0){
		$('input.i-orange').iCheck({
			checkboxClass: 'icheckbox_minimal-orange',
			radioClass: 'iradio_minimal-orange',
			increaseArea: '20%'
		});
	}
	if ($('.i-yellow').length > 0){
		$('input.i-yellow').iCheck({
			checkboxClass: 'icheckbox_minimal-yellow',
			radioClass: 'iradio_minimal-yellow',
			increaseArea: '20%'
		});
	}
	if ($('.i-pink').length > 0){
		$('input.i-pink').iCheck({
			checkboxClass: 'icheckbox_minimal-pink',
			radioClass: 'iradio_minimal-pink',
			increaseArea: '20%'
		});
	}
	if ($('.i-purple').length > 0){
		$('input.i-purple').iCheck({
			checkboxClass: 'icheckbox_minimal-purple',
			radioClass: 'iradio_minimal-purple',
			increaseArea: '20%'
		});
	}
		
	/** Square Skins **/
	if ($('.i-black-square').length > 0){
		$('input.i-black-square').iCheck({
			checkboxClass: 'icheckbox_square',
			radioClass: 'iradio_square',
			increaseArea: '20%'
		});
	}
	if ($('.i-red-square').length > 0){
		$('input.i-red-square').iCheck({
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red',
			increaseArea: '20%'
		});
	}
	if ($('.i-green-square').length > 0){
		$('input.i-green-square').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
			increaseArea: '20%'
		});
	}
	if ($('.i-blue-square').length > 0){
		$('input.i-blue-square').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%'
		});
	}
	if ($('.i-aero-square').length > 0){
		$('input.i-aero-square').iCheck({
			checkboxClass: 'icheckbox_square-aero',
			radioClass: 'iradio_square-aero',
			increaseArea: '20%'
		});
	}
	if ($('.i-grey-square').length > 0){
		$('input.i-grey-square').iCheck({
			checkboxClass: 'icheckbox_square-grey',
			radioClass: 'iradio_square-grey',
			increaseArea: '20%'
		});
	}
	if ($('.i-orange-square').length > 0){
		$('input.i-orange-square').iCheck({
			checkboxClass: 'icheckbox_square-orange',
			radioClass: 'iradio_square-orange',
			increaseArea: '20%'
		});
	}
	if ($('.i-yellow-square').length > 0){
		$('input.i-yellow-square').iCheck({
			checkboxClass: 'icheckbox_square-yellow',
			radioClass: 'iradio_square-yellow',
			increaseArea: '20%'
		});
	}
	if ($('.i-pink-square').length > 0){
		$('input.i-pink-square').iCheck({
			checkboxClass: 'icheckbox_square-pink',
			radioClass: 'iradio_square-pink',
			increaseArea: '20%'
		});
	}
	if ($('.i-purple-square').length > 0){
		$('input.i-purple-square').iCheck({
			checkboxClass: 'icheckbox_square-purple',
			radioClass: 'iradio_square-purple',
			increaseArea: '20%'
		});
	}
		
	/** Flat Skins **/
	if ($('.i-black-flat').length > 0){
		$('input.i-black-flat').iCheck({
			checkboxClass: 'icheckbox_flat',
			radioClass: 'iradio_flat',
			increaseArea: '20%'
		});
	}
	if ($('.i-red-flat').length > 0){
		$('input.i-red-flat').iCheck({
			checkboxClass: 'icheckbox_flat-red',
			radioClass: 'iradio_flat-red',
			increaseArea: '20%'
		});
	}
	if ($('.i-green-flat').length > 0){
		$('input.i-green-flat').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass: 'iradio_flat-green',
			increaseArea: '20%'
		});
	}
	if ($('.i-blue-flat').length > 0){
		$('input.i-blue-flat').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue',
			increaseArea: '20%'
		});
	}
	if ($('.i-aero-flat').length > 0){
		$('input.i-aero-flat').iCheck({
			checkboxClass: 'icheckbox_flat-aero',
			radioClass: 'iradio_flat-aero',
			increaseArea: '20%'
		});
	}
	if ($('.i-grey-flat').length > 0){
		$('input.i-grey-flat').iCheck({
			checkboxClass: 'icheckbox_flat-grey',
			radioClass: 'iradio_flat-grey',
			increaseArea: '20%'
		});
	}
	if ($('.i-orange-flat').length > 0){
		$('input.i-orange-flat').iCheck({
			checkboxClass: 'icheckbox_flat-orange',
			radioClass: 'iradio_flat-orange',
			increaseArea: '20%'
		});
	}
	if ($('.i-yellow-flat').length > 0){
		$('input.i-yellow-flat').iCheck({
			checkboxClass: 'icheckbox_flat-yellow',
			radioClass: 'iradio_flat-yellow',
			increaseArea: '20%'
		});
	}
	if ($('.i-pink-flat').length > 0){
		$('input.i-pink-flat').iCheck({
			checkboxClass: 'icheckbox_flat-pink',
			radioClass: 'iradio_flat-pink',
			increaseArea: '20%'
		});
	}
	if ($('.i-purple-flat').length > 0){
		$('input.i-purple-flat').iCheck({
			checkboxClass: 'icheckbox_flat-purple',
			radioClass: 'iradio_flat-purple',
			increaseArea: '20%'
		});
	}
	/** END ICHECK **/
	

   

	/** BEGIN INPUT FILE **/
	if ($('.btn-file').length > 0){
		$(document)
			.on('change', '.btn-file :file', function() {
				"use strict";
				var input = $(this),
				numFiles = input.get(0).files ? input.get(0).files.length : 1,
				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
				input.trigger('fileselect', [numFiles, label]);
		});
		$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			
			var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' files selected' : label;
			
			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}
		});
	}
	/** END INPUT FILE **/
	
	/** BEGIN INPUT MASK **/
	$(function () {
		"use strict";
		$('.cc_masking').mask('0000-0000-0000-0000');
		$('.cc_security_masking').mask('0000');
		$('.date_masking').mask('00/00/0000');
		$('.time_masking').mask('00:00:00');
		$('.date_time_masking').mask('00/00/0000 00:00:00');
		$('.phone_us_masking').mask('(000) 000-0000');
		$('.cpf_masking').mask('000.000.000-00', {reverse: true});
		$('.money_masking').mask('000.000.000.000.000,00', {reverse: true});
		$('.money2_masking').mask("#.##0,00", {reverse: true, maxlength: false});
		$('.ip_address_masking').mask('0ZZ.0ZZ.0ZZ.0ZZ', {translation: {'Z': {pattern: /[0-9]/, optional: true}}});
		$('.ip_address_masking').mask('099.099.099.099');
		$('.percent_masking').mask('##0,00%', {reverse: true});
	});
	/** END INPUT MASK **/
	
	

   
	/** BEGIN MAGNIFIC POPUP **/
	if ($('.magnific-popup-wrap').length > 0){
			$('.magnific-popup-wrap').each(function() {
			"use strict";
				$(this).magnificPopup({
					delegate: 'a.zooming',
					type: 'image',
					removalDelay: 300,
					mainClass: 'mfp-fade',
					gallery: {
					  enabled:true
					}
				});
			}); 
	}
	
	if ($('.inline-popups').length > 0){
			$('.inline-popups').magnificPopup({
			  delegate: 'a',
			  removalDelay: 500,
			  callbacks: {
				beforeOpen: function() {
				   this.st.mainClass = this.st.el.attr('data-effect');
				}
			  },
			  midClick: true
			});
	}
	$('.magnific-img').magnificPopup({
		type:'image',
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});
	/** END MAGNIFIC POPUP **/
	
});
