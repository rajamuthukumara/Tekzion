$(window).scroll(function(){
  fixednav();
  updateTimer();
  // menuhide();
  // parallax();
})

function fixednav(){
    if($(document).scrollTop() > 50){
      $('nav').addClass('fixed-nav');
      $('.banner').addClass('fixed-banner');
    }
    else {
      $('nav').removeClass('fixed-nav');
      $('.banner').removeClass('fixed-banner');
    }
}

// function menuhide(){
//   $('.toggle-btn').click(function(){
//     $('.sidemenu').addClass('mhide');
//   });
// }

// function parallax(){
//   var wScroll = $(this).scrollTop();
//   $('.parallax').css('background-position','center '+(-wScroll*0.01)+'px');
// }

// function parallax() {
//   var scroll = $(window).scrollTop();
//   var screenHeight = $(window).height();
//
//   $('.parallax').each(function() {
//     var offset = $(this).offset().top;
//     var distanceFromBottom = offset - scroll - screenHeight
//
//     if (offset > screenHeight && offset) {
//       $(this).css('background-position', 'center ' + (( distanceFromBottom  ) * 0.2) +'px');
//     } else {
//       $(this).css('background-position', 'center ' + (( -scroll ) * 0.01) + 'px');
//     }
//   })
// }

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: ($(hash).offset().top)
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

// $(document).ready(function(){
//   // var date = new Date();
//   var today = new Date();
//   var symp = new Date();
//   today.setDate('2018','24','02');
//   symp.setDate('2018','17','03');
//   var ans = new Date();
//   ans = today - symp;
//   $("#daystogo").html(ans+" days to go");
// });

function updateTimer(){
   // Get the element to append to
   var counter = document.getElementById("daystogo");
   // Set the targetDate
   var targetDate = new Date("march 17, 2018 08:30:00");

   var remainingSeconds = ~ ~((targetDate - new Date()) / 1000);
   var remainingTime = {
       "days": remainingSeconds / (60 * 60 * 24)
   };

   var str = " ";
   for (var i in remainingTime) {
       str += ~ ~remainingTime[i] + " " + i + " ";
   }

   str = str+" to go";
   // Store the result in the element
   counter.innerHTML = str;
}

function expandmenu(){
  document.getElementById('side-menu').style.width = '250px';
}

function closemenu(){
  document.getElementById('side-menu').style.width = '0';
}

function pp(){
  window.open("pp.html");
}

function fpaint(){
  window.open("facepaint.html");
}
