$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});
// ==============================================================
// Login and Recover Password
// ==============================================================
$('#to-recover').on("click", function() {
    $("#login_form").slideUp();
    $("#recoverform").fadeIn();
});
