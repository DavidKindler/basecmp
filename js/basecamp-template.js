

var writeHead = function (title){
if (!title) {title="BaseCamp";}
if (title == 'test') {
		document.write('<link href="./css/basecamp.css" rel="stylesheet">');
		} else {
		document.write('  <link href="./nxprebrand/css/nxp-common.min.css" rel="stylesheet">' );
}

document.write(''+
' 			<title>'+title+'</title>'+
'        <link href="./css/basecamp-docs.css" rel="stylesheet">'+
'        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->'+
'        <!--[if lt IE 9]>'+
'           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>'+
'           <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>'+
'         <![endif]-->'+
'        <link rel="shortcut icon" href="./ico/favicon.ico">'+
'        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">'+
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
'           <a href="./" class="navbar-brand" "><span class="icon-home"></span> BaseCamp</a>'+
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


