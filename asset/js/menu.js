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

