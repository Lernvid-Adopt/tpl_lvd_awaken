jq(document).ready(function() {


	// Searchbox animation on hover
	jq("#search_inner .inputbox").hover(function () {
		jq(this).stop().animate({'width' : '150px'},'slow');
	},function() {
		jq(this).stop().animate({'width' : '121px'},'slow');
	}); 

	// Topmenu animation on hover
	jq("#navigation ul.menu li a").hover(function () {
		jq(this).stop().animate({'font-size' : '16px'},'fast');
	},function() {
		jq(this).stop().animate({'font-size' : '11px'},'fast');
	}); 

	// Mainmenu animation on hover
	jq(".module_menu ul.menu li a").hover(function () {
		jq(this).stop().animate({'font-size' : '16px'},'fast');
	},function() {
		jq(this).stop().animate({'font-size' : '12px'},'fast');
	}); 

	// Go to top link
	jq('a#gotop').click(function(){
	jq('html, body').animate({scrollTop:0}, 600); 
		return false; 
	});

	// System Messages
	jq('dl#system-message').hide('', function(){
	});
	jq("dl#system-message").slideDown({
		duration: 'slow'
	});
	jq("dl#system-message").fadeOut({
		duration: 8000
	});
	

});
