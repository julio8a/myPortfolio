$(document).ready(function(){

	$("#about").removeClass("debut");
	$("#contact").removeClass("debut");


	var vTop = 0;
	var mLeft = 0;
	var bgColor = "#FFFFFF";
	var currentProject = 0;
	var fromicon = false;

	var windowScroll = 0;
	$(window).trigger('scroll');
	$(window).scroll(function(event){
		windowScroll = $(window).scrollTop();
	});

	$(".about").click(function(){
		if (rubOpen == false) {
			$("#about").css("left", "0");
			$("#contact").css("left", "100%");
			menuderoule();
			aboutOpen = true;
			$(this).addClass("current");
		}
		else {
			if(contactOpen == true) {
				$("#contact").css("left", "100%");
				$("#about").css("left", "0");
				contactOpen = false;
				aboutOpen = true;
				$("#header a").removeClass("current");
				$(this).addClass("current");
			}
			else {
				menuferme();
				aboutOpen = false;
			}
		}
		return false;
	});

	$(".contact").click(function(){
		if (rubOpen == false) {
			$("#about").css("left", "-100%");
			$("#contact").css("left", "0");
			menuderoule();
			contactOpen = true;
			$("#header a.contact").addClass("current");
		}
		else {
			if(aboutOpen == true) {
				$("#about").css("left", "-100%");
				$("#contact").css("left", "0");
				aboutOpen = false;
				contactOpen = true;
				$("#header a").removeClass("current");
				$(".contact").addClass("current");
			}
			else {
				menuferme();
				contactOpen = false;
			}
		}
		return false;
	});

	$(".work").click(function(){
		if (rubOpen == true) {
			menuferme();
		}
		return false;
	});

	function menuderoule() {
		$("#about").css("marginTop", 0);
		$("#contact").css("marginTop", 0);
		$("#header a").removeClass("current");
		$("#header").css("top", "470px");
		// $(".block").css("top", "+=470px");
		// $("#footer").css("top", "2610px");
		// $("#intro").css("top", "430px");
		setTimeout(function() {
			$("#about").addClass("visible");
			$("#contact").addClass("visible");
		}, 300);
		rubOpen = true;
	}

	function menuferme() {
		$("#about").css("marginTop", "-470px");
		$("#contact").css("marginTop", "-470px");
		$("#header a").removeClass("current");
		$(".work").addClass("current");
		$("#header").css("top", "0");
		// $(".block").css("top", "-=470px");
		// $("#footer").css("top", "2140px");
		// $("#intro").css("top", "100px");
		$("#about").removeClass("visible");
		$("#contact").removeClass("visible");
		rubOpen = false;
	}

	$(".block").click(function(){
		if ($(this).hasClass("block1")) { $("#projet").load("projects/zip-tapestry/index.html", function(){ currentProject = 1; openprojet() } ); } ;
		if ($(this).hasClass("block2")) { $("#projet").load("projects/urb-ob-site/index.html", function(){ currentProject = 2; openprojet() } ); } ;
		if ($(this).hasClass("block3")) { $("#projet").load("projects/urb-ob-ui/index.html", function(){ currentProject = 3; openprojet() } ); } ;
		if ($(this).hasClass("block4")) { $("#projet").load("projects/public-health/index.html", function(){ currentProject = 4; openprojet() } ); } ;
		if ($(this).hasClass("block5")) { $("#projet").load("projects/inca/index.html", function(){ currentProject = 5;openprojet() } ); } ;
		if ($(this).hasClass("block6")) { $("#projet").load("projects/save-me/index.html", function(){ currentProject = 6; openprojet() } ); } ;
		if ($(this).hasClass("block7")) { $("#projet").load("projects/industries/index.html", function(){ currentProject = 7; openprojet() } ); } ;
		if ($(this).hasClass("block8")) { $("#projet").load("projects/workforce/index.html", function(){ currentProject = 8; openprojet() } ); } ;
		if ($(this).hasClass("block9")) { $("#projet").load("projects/dashboard/index.html", function(){ currentProject = 9; openprojet() } ); } ;
		if ($(this).hasClass("block10")) { $("#projet").load("projects/diorsnow/index.html", function(){ currentProject = 10; openprojet() } ); } ;
		if ($(this).hasClass("block11")) { $("#projet").load("projects/mixtaroute/index.html", function(){ currentProject = 11; openprojet() } ); } ;
		if ($(this).hasClass("block12")) { $("#projet").load("projects/xboxgamer/index.html", function(){ currentProject = 12; openprojet() } ); } ;
	});

	$(".icon").click(function(){
		fromicon = true;
		bgColor = $(this).find(".fond").css("background-color");
		$("#projet").removeClass("visible");
		if ($(this).hasClass("icon1")) { $("#projet").load("../projects/zip-tapestry/index.html", function(){ currentProject = 1; vTop2 = "400px"; openprojet() } ); } ;
		if ($(this).hasClass("icon2")) { $("#projet").load("../projects/urb-ob-site/index.html", function(){ currentProject = 2; vTop2 = "400px"; openprojet() } ); } ;
		if ($(this).hasClass("icon3")) { $("#projet").load("../projects/urb-ob-ui/index.html", function(){ currentProject = 3; vTop2 = "400px"; openprojet() } ); } ;
		if ($(this).hasClass("icon4")) { $("#projet").load("../projects/public-health/index.html", function(){ currentProject = 4; vTop2 = "830px"; openprojet() } ); } ;
		if ($(this).hasClass("icon5")) { $("#projet").load("../projects/inca/index.html", function(){ currentProject = 5; vtop2 = "830px"; openprojet() } ); } ;
		if ($(this).hasClass("icon6")) { $("#projet").load("../projects/save-me/index.html", function(){ currentProject = 6; vtop2 = "830px"; openprojet() } ); } ;
		if ($(this).hasClass("icon7")) { $("#projet").load("../projects/industries/index.html", function(){ currentProject = 7; vTop2 = "1260px"; openprojet() } ); } ;
		if ($(this).hasClass("icon8")) { $("#projet").load("../projects/workforce/index.html", function(){ currentProject = 8; vTop2 = "1260px"; openprojet() } ); } ;
		if ($(this).hasClass("icon9")) { $("#projet").load("../projects/dashboard/index.html", function(){ currentProject = 9; vTop2 = "1260px"; openprojet() } ); } ;
		if ($(this).hasClass("icon10")) { $("#projet").load("../projects/diorsnow/index.html", function(){ currentProject = 10; vTop2 = "1590px"; openprojet() } ); } ;
		if ($(this).hasClass("icon11")) { $("#projet").load("../projects/mixtaroute/index.html", function(){ currentProject = 11;  vTop2 = "1590px"; openprojet() } ); } ;
		if ($(this).hasClass("icon12")) { $("#projet").load("../projects/xboxgamer/index.html", function(){ currentProject = 12;  vTop2 = "1590px"; openprojet() } ); } ;
	});

	function openprojet() {
		$('#blocks-container').css('marginTop', '50px');
		$(".icon").removeClass("current");
		$(".icon"+currentProject).addClass("current");
		if (fromicon == true) {
			$("#projet").addClass("visible");
			$('#fond_projet.actif').animate({backgroundColor: bgColor},'600')
			//$("#fond_projet.actif").css("background-color", bgColor);
			$('html,body').delay(0).animate({scrollTop: 0},'10');
		}
		if (fromicon == false) {
			$("#fond_projet").addClass("actif");
			$("#projet").addClass("visible");
			$("#project-menu").addClass("visible");
			$("#fond_projet.actif").css("top", 0);
			$("#fond_projet.actif").css("left", 0);
			$("#fond_projet.actif").css("marginLeft", 0);
			$("#fond_projet.actif").css("height", "100%");
			$("#fond_projet.actif").css("width", "100%");
			$("#fond_projet.actif").css("background-color", bgColor);
			$('html,body').delay(300).animate({scrollTop: 0},'10');
		}
		if(rubOpen == true) {
			menuferme();
			contactOpen = false;
			aboutOpen = false;
		}
		fromicon = false;
	}

	$(".block").mouseover(function(){
		vTop = $(this).css("Top");
		vTop2 = vTop;
		vTop = parseInt(vTop) - windowScroll;
		mLeft = $(this).css("marginLeft");
		bgColor = $(this).find(".fond").css("background-color");
		$("#fond_projet").css("top", vTop+"px");
		$("#fond_projet").css("marginLeft", mLeft);
		$("#fond_projet").css("left", "50%");
		$("#fond_projet").css("height", "380px");
		$("#fond_projet").css("background-color", bgColor);
	});

	$(".back").click(function(){
		$('#blocks-container').css('marginTop', '282px');
		$("#projet").removeClass("visible");
		$("#project-menu").removeClass("visible");
		$("#fond_projet").removeClass("actif");
		$("#fond_projet").css("top", vTop2);
		$("#fond_projet").css("left", "50%");
		$("#fond_projet").css("marginLeft", mLeft);
		$("#fond_projet").css("height", "380px");
		$("#fond_projet").css("width", "300px");
		$("#fond_projet").css("background-color", bgColor);
		$('html,body').delay(220).animate({scrollTop: parseInt(vTop2)-100},'10');
	});

	$(".caseA").click(function(){
    	var lien =$(this).find("a").attr("href");
		window.open(lien);
	});

	$("#contactCanada").click(function(){
		$('html,body').animate({scrollTop: 0},'10');
	});

	$(".caseB").click(function(){
    	var lien =$(this).find("a").attr("href");
		window.open(lien);
	});

	var windowW = $(window).width();
	var windowW2 = -(windowW / 2);
	gestionResize();

	$(window).resize(function() {
		windowW = $(window).width();
		windowW2 = -(windowW / 2);
		gestionResize();
	});

	function gestionResize(){
		if( $(window).width() > 1920) {
			$(".banner img").css("width", windowW);
			$(".banner img").css("marginLeft", windowW2);
		}
		else {
			$(".banner img").css("width", "1920px");
			$(".banner img").css("marginLeft", "-960px");
		}
	}

});
