(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		//Scroll to top

		$("#top").on('click', function() { $("HTML, BODY").animate({ scrollTop: 0 }, 250); });

		
		//Scroll to Categories

		$("#menu-item-112 a").on('click', function() { 

			var position = $("#Indica").offset().top; 

			$("HTML, BODY").animate({ scrollTop: position }, 250); 

		});

		$("#menu-item-111 a").on('click', function() { 

			var position = $("#Sativa").offset().top; 

			$("HTML, BODY").animate({ scrollTop: position }, 250); 

		});

		$("#menu-item-116 a").on('click', function() { 

			var position = $("#Hybrid").offset().top; 

			$("HTML, BODY").animate({ scrollTop: position }, 250); 

		});

		$("#menu-item-113 a").on('click', function() { 

			var position = $("#Concentrates").offset().top; 

			$("HTML, BODY").animate({ scrollTop: position }, 250); 

		});

		$("#menu-item-114 a").on('click', function() { 

			var position = $("#Edibles").offset().top; 

			$("HTML, BODY").animate({ scrollTop: position }, 250); 

		});	

		$("#menu-item-115 a").on('click', function() { 

			var position = $("#Gear").offset().top; 

			$("HTML, BODY").animate({ scrollTop: position }, 250); 

		});							
		
	});
	
})(jQuery, this);
