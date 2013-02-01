		$(document).ready(function(){
			$('.slideShow img:gt(0)').hide();
			setInterval(function(){$('.slideShow :first-child').fadeOut().next('img').fadeIn().end().appendTo('.slideShow');}, 3000);
		});