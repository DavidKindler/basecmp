

var writeHead = function (title){
if (!title) {title="BaseCamp";}
if (title == 'test') {
		document.write('<link href="./css/basecamp.css" rel="stylesheet">');
		} else {
		document.write('  <link href="./css/nxp-common.min.css" rel="stylesheet">' );
		document.write('  <link href="./css/nxp-common-delta.css" rel="stylesheet">' );
}

document.write(''+
' 			<title>'+title+'</title>'+
'        <link href="./css/basecamp-docs.css" rel="stylesheet">'+
'        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->'+
'        <!--[if lte IE 9]> '+
'          <link rel="stylesheet" href="../css/nxp-common-ie.min.css">'+
'          <script src="//www.freescale.com/files/js/html5shiv.js"></script>'+
'        <![endif]-->'+
'         <!--[if lt IE 9]>'+
'          <script src="//www.freescale.com/files/js/html5shiv.js"></script>'+
'          <link rel="stylesheet" href="../css/nxp-common-ie8.css">'+
'        <![endif]-->'+
'');
};


var writeHeader = function(){
	document.write(''+  
'     <header class="navbar navbar-default megamenu navbar-static-top " id="top" >'+
'         <div class="navbar-header">'+
'           <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#fsl-navbar-collapse">'+
'             <span class="icon-bar"></span>'+
'             <span class="icon-bar"></span>'+
'             <span class="icon-bar"></span>'+
'           </button>'+
'           <a href="./" class="navbar-brand" "><span class="icon-home"></span> NXP Web Branding</a>'+
'         </div>'+
'         <nav id="fsl-navbar-collapse" class="collapse navbar-collapse" >'+
'           <ul class="nav navbar-nav">'+
'						<li>'+
'               <a class="active" href="./index.html">Home</a>'+
'             </li>'+
'						<li>'+
'               <a class="active" href="./best-practices.html">Best Practices</a>'+
'             </li>'+
'             <li >'+
'               <a href="./grids.html">Grids</a>'+
'             </li>'+
'             <li >'+
'               <a href="./css.html">CSS</a>'+
'             </li>'+
'             <li >'+
'               <a href="./less.html">LESS</a>'+
'             </li>'+
'             <li>'+
'               <a href="./components.html">Components</a>'+
'             </li>'+
// '             <li>'+
// '               <a href="./javascript.html">JavaScript</a>'+
// '             </li>'+
'             <li>'+
'                 <a href="./icons.html">Icons</a>'+
'             </li>'+
'             <li>'+
'               <a class="active" href="./templates.html">Templates</a>'+
'             </li>'+			
'             <li>'+
'               <a class="active" href="./resources.html">Resources</a>'+
'             </li>'+
'           </ul>'+
'         </nav>'+
'     </header>'+
     '');
}


