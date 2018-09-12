/**
 * Created by hahastein on 2018/1/12.
 */
(function($) {
    $.extend({
        initBeng: function () {
            $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
            $("body").removeClass('boxed-layout').addClass('fixed-nav fixed-nav-basic').addClass('fixed-sidebar');
            $(".footer").addClass('fixed');

            $("img").on("error", function () {
                $(this).attr('src',"/resource/img/img_error.png");
            });
        },
        complete: {
            upload: function(data) {
                var res = eval('(' + data.xhr.responseText + ')');
                if (res && $('.img-hidden-array')) {
                    res.forEach(function (item) {
                        if($('.img-hidden-array').length > 1){
                            $('.img-hidden-array').append('<input type="hidden" name="img[]" value='+item.path+'>');
                        }else{
                            $('.img-hidden-array').empty();
                            $('.img-hidden-array').append('<input type="hidden" name="img" id="img" value='+item.path+'>');
                        }
                    });
                }else{
                    console.log('没有找到可以存放数据的容器');
                }
            }
        },
        url: {
            to: function (r, options) {
                var config = {
                    isOpenRewrite: true,
                    rootPath: '/'
                };
                var _url="";
                //拼接地址
                var _param = '';
                var _count = 0;
                $.each(options,function(key,value){
                    _param += key+'='+value+'&';
                    _count++;
                });
                _param=_param.substring(0,_param.length-1);

                if(config.isOpenRewrite){
                    _url = config.rootPath + r;
                    _count>0?_url+='?':_url+='';
                }else{
                    _url = 'index.php?r=' + r;
                    _count>0?_url+='&':_url+='';
                }
                _url += _param;
                return _url;
            },
            param: function (name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
                var r = window.location.search.substr(1).match(reg);
                if (r != null) return unescape(r[2]); return null;
            }
        },
        tools:{
            alert: function(title, text, url='', type = 'warning'){
                if($('#alertbox')){
                    $('#alertbox').click(function () {
                        if(typeof(eval(swal))=="function") {
                            swal({
                                title: title,
                                text: text,
                                type: type,
                                showCancelButton: true,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "确定!",
                                cancelButtonText:"在想想",
                                closeOnConfirm: false
                            }, function () {
                                window.location.href = url;
                            });
                        }else{
                            if(confirm(title)){
                                window.location.href = url;
                            }
                        }
                    });
                }else{
                    console.log('对象不存在');
                }
            }
        },
        tip: function (title, msg, type) {
            if(typeof toastr !== 'undefined') {
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    if(type==='error'){
                        toastr.error(msg, title);
                    }else {
                        toastr.success(msg, title);
                    }

                }, 10);
            }else{
                console.log('提示插件初始化失败，请检查是否调用了相关插件库');
            }
        }
    });

    $.fn.extend({
        remote: function (url, type, params, callback) {
            if(params === undefined) params = new Object();
            if(typeof this !== 'undefined') {
                var obj = this[0];
                $.each(this[0].attributes, function () {
                    if(this.name.indexOf('param-')>-1){
                        //获取参数名并拼接到传入参数里
                        param = this.name.split("-");
                        if(param.length>1){
                            param_name = this.name.split("-")[1];
                            param_value = this.value;
                            params[param_name]=param_value;
                        }
                    }
                });

                $.ajax({
                    type: type,
                    url: $.Url.to(url),
                    data: params,
                    dataType: "json",
                    beforeSend: function() {
                        //处理发送之前的
                    }, success: function(data) {
                        callback(data);
                    }, error: function() {
                        $.tip('网络异常', '调用网络时出错，可能是404、500', 'error');
                        $(obj).removeAttr("disabled");
                    }
                });


            }else{
                console.log('对象不存在，请检查是否存在');
            }
        }
    });
    //默认参数

})(jQuery);

$.initBeng();
