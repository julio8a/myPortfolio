$(document).ready(function(){
	function preload(arrayOfImages) {
		$(arrayOfImages).each(function(){
			$('<img/>')[0].src = this;
		});
	}
	
	function preloader() {
		preload([
			// 'http://www.nicolastarier.com/projects/artspire/ban.jpg','http://www.nicolastarier.com/projects/artspire/imac.png','http://www.nicolastarier.com/projects/artspire/iphone.png',
			// 'http://www.nicolastarier.com/projects/chevalblanc/ban.jpg','http://www.nicolastarier.com/projects/chevalblanc/imac.png','http://www.nicolastarier.com/projects/chevalblanc/iphone.png',
			// 'http://www.nicolastarier.com/projects/lecoqsportif/ban.jpg','http://www.nicolastarier.com/projects/lecoqsportif/imac.png',
			// 'http://www.nicolastarier.com/projects/culturebox/ban.jpg','http://www.nicolastarier.com/projects/culturebox/imac.png','http://www.nicolastarier.com/projects/culturebox/iphone.png',
			// 'http://www.nicolastarier.com/projects/nicolastarierphotography/ban.jpg','http://www.nicolastarier.com/projects/nicolastarierphotography/imac.png',
			// 'http://www.nicolastarier.com/projects/louvre/ban.jpg','http://www.nicolastarier.com/projects/louvre/affiche.png',
			// 'http://www.nicolastarier.com/projects/orangenfc/ban.jpg','http://www.nicolastarier.com/projects/orangenfc/imac.png',
			// 'http://www.nicolastarier.com/projects/eliesaab/ban.jpg','http://www.nicolastarier.com/projects/eliesaab/imac.png','http://www.nicolastarier.com/projects/eliesaab/iphone.png',
			// 'http://www.nicolastarier.com/projects/citelum/ban.jpg','http://www.nicolastarier.com/projects/citelum/imac.png',
			// 'http://www.nicolastarier.com/projects/diorsnow/ban.jpg','http://www.nicolastarier.com/projects/diorsnow/imac.png',
			// 'http://www.nicolastarier.com/projects/mixtaroute/ban.jpg','http://www.nicolastarier.com/projects/mixtaroute/imac.png',
			// 'http://www.nicolastarier.com/projects/xboxgamer/ban.jpg','http://www.nicolastarier.com/projects/xboxgamer/imac.png',
		]);
	}
	
	function addLoadEvent(func) {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				if (oldonload) {
					oldonload();
				}
				func();
			}
		}
	}
	addLoadEvent(preloader);

});