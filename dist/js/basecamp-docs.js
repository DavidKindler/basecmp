window.onresize = displayWindowSize;
window.onload = displayWindowSize;
function displayWindowSize() { var myWidth = 0, myHeight = 0;
    if( typeof( window.innerWidth ) == 'number' ) {
        myWidth = window.innerWidth; myHeight = window.innerHeight;
    } else if( document.documentElement && ( document.documentElement.clientWidth ||document.documentElement.clientHeight ) ) {
        myWidth = document.documentElement.clientWidth; myHeight = document.documentElement.clientHeight;
    } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
        myWidth = document.body.clientWidth; myHeight = document.body.clientHeight;
    }// your size calculation code here
    if (document.getElementById("dimensions")) { document.getElementById("dimensions").innerHTML = myWidth + "x" + myHeight; }
};

jQuery(document).ready(function($) {


    var headings = $( ":header[id]" );
     
    var node = {};
    var list = [];
    var parent  = 1;
    var hPrevLevel = 1;
     for (var i = 0; i <= headings.length -1; i++) {
        var node = {"tag": headings[i].tagName, "id": headings[i].id, "text": headings[i].innerText, "level": parent};
        var hLevel = parseInt(node.tag.charAt(1));
        if (hLevel < 4){
          if (hLevel < hPrevLevel) {
            parent--;
          } 
          if (hLevel > hPrevLevel){
            parent++;
          } 
          node.level = parent;    
          list.push(node);
          hPrevLevel = hLevel;    
       }
     };
    // console.log (list);

    var rootUl = "<ul class='nav'>";
    var hPrevLevel = 1;
    for (var i = 0; i <=list.length-1; i++){
        var listItem = "<li><a href='#"+list[i].id+"'>"+list[i].text+"</a>"    
        if (list[i].level == hPrevLevel) {
             rootUl += listItem;
        }
        if (list[i].level > hPrevLevel){
             rootUl += "<ul class='nav' id='number"+i+"'>"+listItem+"</li>";
        }
        if (list[i].level < hPrevLevel){
             rootUl += "</ul>"+listItem;
        }
        hPrevLevel = list[i].level;
    }
    rootUl += " </ul>";

    // $('.fsl-docs-sidebar').empty().append(rootUl);
    



    


    var fslContainer = $('.fsl-container');
    var fslContainerPosition = fslContainer.position();
    // console.log (fslContainerPosition);
    $('.fsl-docs-sidebar').affix({
          offset: {
            top: fslContainerPosition.top,
            bottom: 20
          }
    });
    $('body').scrollspy({ target: '.fsl-docs-sidebar' });
    
    // $('.active').parent().css('background-color','yellow');

   $('.fsl-docs-sidebar ul.nav ').on('activate.bs.scrollspy', function () {
      // console.log ( $('.active').parent().get(-1) );
      // $(ulParent).parent().css('background-color','yellow');
      $('.fsl-docs-sidebar ul.nav').removeClass('active-sidebar')
      // console.log (ulParent);
      $('.active').parent('ul.nav').addClass('active-sidebar');
      // $('.fsl-docs-sidebar ul.nav').not('.active-sidebar').css('background-color','linen');
   })


});

