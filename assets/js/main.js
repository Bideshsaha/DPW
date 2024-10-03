console.log('hi');
jQuery(document).ready(function(){
    jQuery(".owl-carousel").owlCarousel({
        autoplay:true,
        nav:true,
        loop:true,
        items:1,
    });

  });

  
  function dpwMenuDisplay() {
    console.log('calling dpw function');
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

