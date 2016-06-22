$(document).ready(function()
{
    // Handlebars
    Handlebars.registerHelper('ifCond', function (v1, operator, v2, options) {

        switch (operator) {
            case '==':
                return (v1 == v2) ? options.fn(this) : options.inverse(this);
            case '===':
                return (v1 === v2) ? options.fn(this) : options.inverse(this);
            case '<':
                return (v1 < v2) ? options.fn(this) : options.inverse(this);
            case '<=':
                return (v1 <= v2) ? options.fn(this) : options.inverse(this);
            case '>':
                return (v1 > v2) ? options.fn(this) : options.inverse(this);
            case '>=':
                return (v1 >= v2) ? options.fn(this) : options.inverse(this);
            case '&&':
                return (v1 && v2) ? options.fn(this) : options.inverse(this);
            case '||':
                return (v1 || v2) ? options.fn(this) : options.inverse(this);
            default:
                return options.inverse(this);
        }
    });
    // Set Height
    var resizeTimer;
    setHeight();
    function setHeight()
    {
        var neg = $('.header').outerHeight() + $('.footer').outerHeight() + 30;
        $('.content').css('min-height', 0);
        var window_height = $(window).height();
        var sidebar_height = $('.sidebar').height();
        var postSetWidth;
        if ((window_height - neg) >= sidebar_height) {
            $('.content').css('min-height', window_height - neg);
            postSetWidth = window_height - neg;
        } else {
            $('.content').css('min-height', sidebar_height);
            postSetWidth = sidebar_height;
        }
    }
    $(window).on('resize', function(event)
    {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function()
        {
            setHeight();
        }, 150);
    });
    // Sidebar Toggle
    $('.sidebar-toggle').on('click', function(event)
    {
        $('body').toggleClass('sidebar-open');
    });
    // Sidebar Expand
    $('.collapsible').on('click', function(event)
    {
        $(this).find('.rotate').toggleClass('down');
    });

    // Thumbnail Popup
    $('.thumbnail-popup').on('click', function(event)
    {
        event.preventDefault();
        var src = $(this).attr('href');
        var caption = $(this).data('caption');
        var source = $("#img-modal-template").html();
        var template = Handlebars.compile(source);
        var html = template({
            src: src,
            caption: caption
        });
        $('#img-modal .modal-body').html(html);
        $('#img-modal').modal('show');
    });
});