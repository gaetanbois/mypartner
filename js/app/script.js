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


// function from stackoverflow
function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}


$('#soutenez-nous, #fleche-soutenez-nous').on('click', function() {
    scrollToAnchor('user-form');
});



/*************************** FORMS ***************************/

$('input:radio[name="user_type"]').change(function() {
    if($(this).val() === 'Licencie') {
        $('#licencie_form').show();
        $('#commercant_form').hide();
        $('#association_form').hide();
    } else if($(this).val() === 'Commercant') {
        $('#commercant_form').show();
        $('#licencie_form').hide();
        $('#association_form').hide();
    } else {
        $('#association_form').show();
        $('#commercant_form').hide();
        $('#licencie_form').hide();
    }
    scrollToAnchor('user-form');
});


$('#date_naissance_form').datepicker({
    changeYear: true,
    yearRange: "-100:+0",
    changeMonth: true,
    dateFormat: 'dd/mm/yy',
    maxDate: new Date(2007, 11, 1),
    monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre',
        'Novembre', 'Décembre'],
    monthNamesShort: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sept', 'Oct', 'Nov', 'Déc']
});

