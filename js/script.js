$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});

$( document ).ready(function(){
  $(".button-collapse").sideNav();
});

$(document).ready(function(){
      $('.parallax').parallax();
    });


$('input:radio[name="user_type"]').change(function() {
    if($(this).val() === 'Licencie') {
        $('.user-form').show();
        scrollToAnchor('user-form')
    }
});

function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}