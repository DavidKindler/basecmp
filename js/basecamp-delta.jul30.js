$(function(){

   // $(document).on('click', '.megamenu .dropdown-menu', function(e) {
   //   e.stopPropagation();
   // });

var pageNavLi = $('#page-nav ul.nav li');

var topOffset = 50;

 $('#page-nav').affix({
   offset: {top:topOffset}
 });


 $('body').scrollspy({ target: '#page-nav'});
 $('body').data()['bs.scrollspy'].options.offset = topOffset;
 // force scrollspy to recalculate the offsets to your targets
 $('body').data()['bs.scrollspy'].process();


 $('#page-nav').on('activate.bs.scrollspy', function ()   {
    var _this = $(this).find('.active');
    if (!_this.hasClass('first-page-nav') )
     { 
     var leftOffset = Math.ceil((_this.find('a').width())/2)+'px';
     _this.find('.arrow-down').css('left', leftOffset);
     }
 });

$('#page-nav ul.nav li a[href^="#"]').click(function(event) {
    event.preventDefault();
    _this = $(this);
    var hash = this.hash;
    var hashID = document.getElementById(hash.substr(1));
    pageNavLi.removeClass('active');
    var navOffset = $('#page-nav').height() > topOffset ? topOffset+100 : pageNavLi.height();
    hashID.scrollIntoView(true);
    scrollBy(0, -navOffset);
    _this.parent().addClass('active');
    if(history.pushState) {
        history.pushState(null, null, hash);
    }
    else {
        location.hash = hash;
    }
});

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