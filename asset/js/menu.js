jQuery(".header-menu").click(function($){
  jQuery("#top-menu").fadeIn();
});
jQuery(".header-menu").click(function($){
  jQuery(".header-menu").fadeOut();
});

jQuery("#close-menu").click(function($){
  jQuery("#top-menu").fadeOut();
});
jQuery("#close-menu").click(function($){
  jQuery(".header-menu").fadeIn();
});

jQuery(function(){
  jQuery(window).scroll(function(){
    const display = jQuery(window).height();
    const position = jQuery(window).scrollTop();
    jQuery(".show").each(function(){
      const targetPosition = jQuery(this).offset().top;
      if(position > targetPosition - display + 60){
        jQuery(this).addClass("fadeInDown");
      }
    });
  });
});