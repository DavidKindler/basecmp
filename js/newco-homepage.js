$('#slides div').css('display','block');
      var $bannerThumbs = $('#banner-thumbs img').toArray();
      $("#slides").carouFredSel({
        auto:{
           // timeoutDuration: 12000 
           timeoutDuration: 12000
        },
       responsive: true,
        width: '100%',
        height: 'variable',
        items: {
            height: 'variable',
            width: '990',
            visible: 'variable'
        },
       scroll      : {
        fx          : "crossfade",
        easing      : "quadratic",
        duration    : 500
        // pauseOnHover: true
        }
      ,pagination : {
        container: '#slides-nav'
        ,duration: 200
        ,anchorBuilder: function(nr, item) {
          // var thumb = $bannerThumbs[nr-1].src;
          // return '<a href="#'+nr+'"><img src="'+thumb+'"></a>';
          return '<a href="#'+nr+'" class="img-circle banner-nav"></a>';
        }
      }
    });