$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
    
     $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1199,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination: true,
        autoPlay:true
    });
    
    window.sr = ScrollReveal();
    sr.reveal('.img-team',  { duration: 2000 }, 100);
    
    // $( "#yesCorper" ).on( "click", function() {
    //   alert('hello');
    // });
    $('input:radio[name="radioInline"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() == 'Yes') {
            $('.corp-form').css('display', 'block');
        }
        if ($(this).is(':checked') && $(this).val() == 'No') {
            $('.corp-form').css('display', 'none');
        }
    });
    
})
