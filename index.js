// COMMENT

var $target = document.getElementsByClassName('.wrapper');
  var color = document.getElementsByClassName(el).attr('data-background-color');
function hehe(el){
  $target.css('background-color', color );
};
('.section').on('enter', hehe(el));




/*JS FOR STICKY TOP NAVIGATION BAR */
	// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

	// // Get the topnav
var topnav = document.getElementById("topnav");

	// // Get the offset position of the topnav
var sticky = topnav.offsetTop;

var	bot = document.getElementById("botnav");
var botstick = bot.offsetTop;

	// // Add the sticky class to the topnav when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
	  if (botstick >= sticky) {
	    topnav.add("position:static;")
	  } else {
	    topnav.classList.remove("sticky");
	  }
	} 



/*JS FOR GOOGLE MAP*/

	// Initialize and add the map
	function initMap() {
	  // The location of Uluru
	  var uluru = {lat: 15.26883, lng: 76.39092};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
	      document.getElementById('map'), {zoom: 11, center: uluru});
	  // The marker, positioned at Uluru
	  var marker = new google.maps.Marker({position: uluru, map: map});
	}


/*JS FOR BACK TO TOP BUTTON*/

	var offset = 300, // browser window scroll (in pixels) after which the "back to top" link is shown
	offsetOpacity = 1200, //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
	
	scrollDuration = 700;


/**JS FOR MODAL POPUP WINDOW*/

	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal 
	btn.onclick = function() {
	  modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	} 