



(function( $ ) {
	'use strict';



	 $(function() {

     $(".accordion").accordion({

          heightStyle: "content",
          active:false,
          collapsible:true,

           });


    });

    
    $( document.body ).on( 'updated_cart_totals', function(){
     
        $(".accordion").accordion({

            heightStyle: "content",
            active:false,
            collapsible:true,
  
             });
    });


})( jQuery );

 

