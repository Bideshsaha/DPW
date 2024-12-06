console.log('hi');
jQuery(document).ready(function(){
    jQuery(".owl-carousel").owlCarousel({
        autoplay:true,
        nav:true,
        loop:true,
        items:1,
    });

      //Ajax call
      jQuery("#ajax_call").click(function() {
        console.log("Calling ajax!!!")
        jQuery.ajax({
          type: "post",
          dataType: "json",
          url: my_ajax_object.ajax_url,
          data: {'fname': 'Sourav', action:'get_data_nli'},
          success: function(msg){
              console.log(msg);
          }
      });
    })

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



