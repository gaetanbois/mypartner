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


$('#soutenez-nous, #fleche-soutenez-nous, .soutiens-nous').on('click', function() {
    scrollToAnchor('user-form');
});

/*************************** ROSACE ***************************/

$('#licencie_rosace').on('click', function() {
    $('#text_rosace_licencie').show();
    $('#text_rosace_commercant').hide();
    $('#text_rosace_association').hide();
});

$('#commercant_rosace').on('click', function() {
    $('#text_rosace_commercant').show();
    $('#text_rosace_association').hide();
    $('#text_rosace_licencie').hide();
});

$('#association_rosace').on('click', function() {
    $('#text_rosace_association').show();
    $('#text_rosace_commercant').hide();
    $('#text_rosace_licencie').hide();
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


$("#date_naissance_form").keyup(function(){
    if ($(this).val().length == 2){
        $(this).val($(this).val() + "/");
    }else if ($(this).val().length == 5){
        $(this).val($(this).val() + "/");
    }
});

jQuery.fn.ForceNumericOnly =
    function()
    {
        return this.each(function()
        {
            $(this).keydown(function(e)
            {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                    key == 8 ||
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };

$("#date_naissance_form, #cp_form, #cp_form_association, #cp_form_association, #telephone_form, #telephone_form_association").ForceNumericOnly();