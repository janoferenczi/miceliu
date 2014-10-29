$(document).ready(function(){
    init();
});

$(window).resize(function(){
    init();
});

jQuery(document).ready(function($) {
    $('#banner').bjqs({
        width : 900,
        height : 200,

	// animation values
	animtype : 'fade', // accepts 'fade' or 'slide'
	animduration : 450, // how fast the animation are
	animspeed : 4000, // the delay between each slide
	automatic : true, // automatic

        // control and marker configuration
	showcontrols : false, // show next and prev controls
	centercontrols : false, // center controls verically
	nexttext : 'Next', // Text for 'next' button (can use HTML)
	prevtext : 'Prev', // Text for 'previous' button (can use HTML)
	showmarkers : false, // Show individual slide markers
	centermarkers : true, // Center markers horizontally

	// interaction values
	keyboardnav : true, // enable keyboard navigation
	hoverpause : true, // pause the slider on hover

	// presentational options
	usecaptions : true, // show captions for images using the image title tag
	randomstart : true, // start slider at random slide
	responsive : true // enable responsive capabilities (beta)
    });
});

var init = function(){
    $("#mainLayout").css("margin-left",(($(document).width() - $("#mainLayout").width()) /2 ));
    $("#menu").css("margin-left",(($("#menuHolder").width() - $("#menu").width()) / 2));
    if($("#mainContent").height() < $(".sidebar").height()){
        $("#mainContent").css("height",(($(".sidebar").height())));
    }
}