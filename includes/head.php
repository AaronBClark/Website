<head>
 	<?php getMeta(); ?>
 	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Pure-CSS mobile view-->
	
	<!-- Start of responsive css from purecss.io -->
	 	<!--[if lte IE 8]>
	    	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
		<![endif]-->
		<!--[if gt IE 8]><!-->
	    	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
		<!--<![endif]-->
	<!-- End of responsive css -->

	<link rel="stylesheet" type="text/css" href="<?=CSSPATH."main.css"?>"> <!-- MAIN STYLESHEET -->
	<link rel="stylesheet" type="text/css" href="<?=CSSPATH."mainHeader.css"?>"> <!-- MAINHEADER STYLESHEET: fenrirAB -->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css"> <!--Pure-CSS main code-->
	
	<script language="javascript" type="text/javascript" src="<?=JAVASCRIPT."jquery-2.1.1.min.js"?>"></script>
	<script language="javascript" type="text/javascript" src="<?=JAVASCRIPT."headerScript.js"?>"></script> <!--HEADERSCRIPT: fenrirAB-->

	<title><?php getTitle($pageNum); ?></title>
  		  
</head>