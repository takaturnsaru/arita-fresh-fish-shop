$(".header-menu").click(function(){
  $("#top-menu").fadeIn();
});
$(".header-menu").click(function(){
  $(".header-menu").fadeOut();
});

$("#close-menu").click(function(){
  $("#top-menu").fadeOut();
});
$("#close-menu").click(function(){
  $(".header-menu").fadeIn();
});