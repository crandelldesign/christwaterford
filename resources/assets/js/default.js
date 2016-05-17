$(document).ready(function()
{
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
    var neg = $('.main-header').outerHeight() + $('.main-footer').outerHeight();
    var window_height = $(window).height();
    var sidebar_height = $(".sidebar").height();
    var postSetWidth;
    if (window_height >= sidebar_height) {
        $(".content").css('min-height', window_height - neg);
        postSetWidth = window_height - neg;
    } else {
        $(".content").css('min-height', sidebar_height);
        postSetWidth = sidebar_height;
    }

    $('.sidebar-toggle').on('click', function(event)
    {
        $('body').toggleClass('sidebar-open');
    });
});