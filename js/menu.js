//menu
$(document).ready(function(){
  
  $('li.mainlevel').mousemove(function(){
  $(this).find('ul').slideDown("500");//you can give it a speed
  });
  $('li.mainlevel').mouseleave(function(){
  $(this).find('ul').slideUp("fast");
  });
  
});
