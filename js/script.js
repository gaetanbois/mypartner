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

$('#date_naissance_form').datepicker({
    changeYear: true,
    yearRange: "-100:+0",
    changeMonth: true,
    dateFormat: 'dd/mm/yy',
    maxDate: new Date(2010, 0, 1),
    monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre',
                'Novembre', 'Décembre'],
    monthNamesShort: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sept', 'Oct',
        'Nov', 'Déc']
});