/* Master JS File */

MasterControl = can.Control(
{
	init: function()
    {
    	
    },
    //Events
    '.menu-toggle click': function(element, event)
    {
        event.preventDefault();
        if($('body').is('.menu-open'))
        {
            $('body').removeClass('menu-open');
            $('.mask').remove();
        }
        if(!$('.sidebar').is('.open'))
        {
            $('.sidebar').addClass('open');
            if(!$('body').is('.menu-open'))
            {
                $('body').addClass('menu-open');
                $('body').append('<div class="mask"></div>');
            }
        } else {
            $('.sidebar').removeClass('open');
        }
    },
    '.mask click': function(element, event)
    {
        event.preventDefault();
        $('.mask').remove();
        $('body').find('.sidebar.open').removeClass('open');
    },
    //Methods
});

master_control = new MasterControl($('body'));