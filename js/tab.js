//$('.tab a').on('click', function (e) {
//
//    e.preventDefault();
//
//    $(this).parent().addClass('active');
//   $(this).parent().siblings().removeClass('active');
//
//    target = $(this).attr('href');
//
//    $('.tab-content > div').not(target).hide();
//
//   $(target).fadeIn(600);
//
//});


function BtnEsq() {
    $("#btEsq").addClass('active');
    $("#btDir").removeClass('active');



    $('#right').hide();

    $("#left").fadeIn(600);
}

function BtnDir() {
    $("#btDir").addClass('active');
    $("#btEsq").removeClass('active');



    $('#left').hide();

    $("#right").fadeIn(600);
}