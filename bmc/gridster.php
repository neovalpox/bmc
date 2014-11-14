
<html>
<head>
<meta charset="utf-8">
<title>Metro Grid - Demo</title>
<script src="js/jquery.js"></script>
  <script>jQuery.noConflict()</script>
  <script src="js/jquery.gridster.min.js" type="text/javascript" charset="utf-8"></script>

  <link rel="stylesheet" type="text/css" href="css/jquery.gridster.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script src="js/jquery.gridster.js"></script>

  <script type="text/javascript">
    jQuery(function(){ //DOM Ready 

      jQuery(".gridster ul").gridster({
          widget_margins: [15, 15],
          widget_base_dimensions: [150, 150]
      });

  });

  </script>

</head>
<body>

<section class="container">
	  	<div class="wrapper gridster">
	    	<ul>
	        	<li data-row="1" data-col="1" data-sizex="2" data-sizey="2" class="bg-blueLight fg-darken-link"><span class="Diver"></span></li>
	        	<li data-row="1" data-col="3" data-sizex="2" data-sizey="3" class="bg-blue fg-white-link"><span class="sauvegarde"></span></li>
	        	<li data-row="1" data-col="4" data-sizex="1" data-sizey="1" class="bg-blueDark fg-white-link"><span class="PowerShell"></span></li>
	        	<li data-row="1" data-col="6" data-sizex="1" data-sizey="1" class="bg-red fg-white-link"><span class="about"></span></li>
	        	<li data-row="1" data-col="7" data-sizex="1" data-sizey="1" class="bg-orangeDark fg-white-link"><span class="snippets"></span></li>
	        	<li data-row="1" data-col="8" data-sizex="1" data-sizey="2" class="bg-pinkDark fg-white-link"><span class="resources"></span></li>

	        	<li data-row="2" data-col="5" data-sizex="1" data-sizey="1" class="bg-orangeDark fg-white-link"><span class="googleplus"></span></li>
	        	<li data-row="2" data-col="6" data-sizex="2" data-sizey="1" class="bg-pink fg-white-link"><span class="contact"></span></li>

		        <li data-row="3" data-col="1" data-sizex="1" data-sizey="1" class="bg-greenDark fg-white-link"><span class="articles"></span></li>
		        <li data-row="3" data-col="2" data-sizex="1" data-sizey="1" class="bg-yellow fg-darken-link"><span class="tutorials"></span></li>
	    	    <li data-row="3" data-col="5" data-sizex="1" data-sizey="1" class="bg-red fg-white-link"><span class="pinterest"></span></li>
	        	<li data-row="3" data-col="6" data-sizex="3" data-sizey="1" class="bg-green fg-white-link"><span class="archives"></span></li>
	      	</ul>
	    </div>

</section>
</body>
</html>