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

    //左侧菜单关闭与开启
    $(".sidebartoggler").on('click', function () {
        if ($("body").hasClass("mini-sidebar")) {
            $("body").trigger("resize");
            $("body").removeClass("mini-sidebar");
            $('.navbar-brand span').show();
        }
        else {
            $("body").trigger("resize");
            $("body").addClass("mini-sidebar");
            $('.navbar-brand span').hide();
        }
    });

    var mySkins = [
        "skin-default",
        "skin-green",
        "skin-red",
        "skin-blue",
        "skin-purple",
        "skin-megna",
        "skin-default-dark",
        "skin-green-dark",
        "skin-red-dark",
        "skin-blue-dark",
        "skin-purple-dark",
        "skin-megna-dark"
    ]

    setupListener()

    /**
     * Replaces the old skin with the new skin
     * @param String cls the new skin class
     * @returns Boolean false to prevent link's default action
     */
    function changeSkin(cls) {
        $.each(mySkins, function (i) {
            $('body').removeClass(mySkins[i])
        })
        $('body').addClass(cls)
        // store('skin', cls)
        return false
    }

    function setupListener() {
        jQuery(document).on('click', '.mega-dropdown', function (e) {
            e.stopPropagation()
        });

        // Add the change skin listener
        $('[data-skin]').on('click', function (e) {
            if ($(this).hasClass('knob')) return
            e.preventDefault()
            changeSkin($(this).data('skin'))
        })

        $("#themecolors").on("click", "a", function () {
            $("#themecolors li a").removeClass("working"),
                $(this).addClass("working")
        })

    }

    $('#tooltipmodals').on('show.bs.modal', function (event) {
        var modelData = $(event.relatedTarget);
        var type = modelData.data('type');
        var content = modelData.parent().find('.hide #r_'+type).html();
        var modal = $(this);  //get modal itself
        modal.find('.modal-body').html(content);
        modal.find('.modal-title').html(type+'资源文件');
    });

    if($(".tab-wizard")){
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            // titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                previous:"上一步",
                next:"下一步",
                finish: "完成"
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

            }
        });
    }

    if($("#storeType")){
        $("#storeType").change(function () {
            var content = $(this).children('option:selected').val();
            if(content != ""){
                $('div[group="storeInfoGroup"][id!='+content+']').hide();
                $('div[group="storeInfoGroup"][id='+content+']').show();
            }else{
                $('div[group="storeInfoGroup"]').hide();
            }
        });
    }

});