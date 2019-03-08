$(function () {
    "use strict";
    $(function () {
        $(".preloader").fadeOut();
    });

    $(".right-side-toggle").click(function () {
        $(".right-sidebar").slideDown(50);
        $(".right-sidebar").toggleClass("shw-rside");
    });

    $('.scroll-sidebar, .right-side-panel, .message-center, .right-sidebar').perfectScrollbar();
});