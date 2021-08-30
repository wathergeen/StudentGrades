/* Loader animation */
$(window).on("load", function () {
    $("body").hide();
    $(".loader-wrapper").fadeOut(730);
    $("body").fadeIn(1000);
});