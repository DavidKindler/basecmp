$(function(){

$('body').scrollspy({ target: '.sidebar'});
 
if (typeof top_nav != 'undefined') { $('#header .megamenu .navbar-center').html(top_nav) }

$('.popup').click(function(e) {
    e.preventDefault();

    var width = $(this).attr('data-width') || 700,
       height=$(this).attr('data-height') || 400,
       left  = ($(window).width()/2)-(width/2),
       top   = ($(window).height()/2)-(height/2);
    var windowTitle = $(this).attr('data-title') || "popupWindow";
    window.open($(this).attr("href"), windowTitle, "width="+width+",height="+height+",top="+top+",left="+left+",scrollbars=yes");
});


});