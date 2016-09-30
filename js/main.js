jQuery(function($) {
$('.disable').click(function(){
        $('#bgblack, #popupBlock').fadeIn();
    });

    $('#popupBlock').on('click','.x-clos',function(){
        $('#bgblack, #popupBlock').fadeOut();
    });

    $('#bgblack').click(function(){
        $('#bgblack, #popupBlock').fadeOut();
    });
});
