jQuery(document).ready(function(){
    var asideOffset = jQuery("aside").offset().top;
    
    jQuery("aside").wrap('<div class="aside-placeholder"></div>');
    jQuery(".aside-placeholder").height(jQuery("aside").outerHeight());

    jQuery(window).scroll(function(){
         var scrollPos = jQuery(window).scrollTop();

         if(scrollPos >= asideOffset){
            jQuery("aside").addClass("fixed");
         }
         else{
             jQuery("aside").removeClass("fixed");
         }
    })
    
})