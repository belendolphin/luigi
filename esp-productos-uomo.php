<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>LUIGI DE CARLO</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.easing.min.js"></script>
      <script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
      <script type="text/javascript" src="theme/supersized.shutter.min.js"></script>
      <script type="text/javascript">
         jQuery(function($){
         $.supersized({
         // Functionality
         slide_interval          :   3000,		// Length between transitions
         transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
         transition_speed		:	1500,		// Speed of transition
         // Components							
         slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
         slides 					:  	[			// Slideshow Images
         {image : 'img/slides/galeria.jpg'}
         ]
         });
         });
      </script>
      <link href="css/ldc.css" rel="stylesheet" type="text/css" />
      <link href="fonts/stylesheet.css" rel="stylesheet" type="text/css" />
      <style type="text/css">
         body {
         background-color: #000;
         }
      </style>
      <script src="js/jquery-1.11.0.min.js"></script>
      <script src="js/lightbox.js"></script>
      <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="css/responsiveslides.css">
      <link rel="stylesheet" href="css/demo.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
           // Slideshow 3
           $("#slider3").responsiveSlides({
             maxwidth: 400,
             manualControls: '#slider3-pager',
           });
         
           
         });
      </script>
   </head>
   <body>
      <div id="framecontent">
         <?php include("inc/menu.php"); ?>
      </div>
      </div>
      <div id="maincontent">
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
               <td align="center">
                  <table width="984" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                        <td height="135px">&nbsp;</td>
                     </tr>
                     <tr>   
                     <tr>
                        <td bgcolor="#000" class="titulo"></BR> GALERIA UOMO</BR></td>
                     </tr>
                     <td bgcolor="#000">
                        <table width="100%" border="0" cellspacing="0" cellpadding="30">
                           <tr>
                              <ul class="rslides" id="slider3">
                                 <li><img src="img/uomo/LDC-Atache 006 - baja.JPG" alt=""></li>
                                 <li><img src="img/uomo/LDC-Camisa Pera 006 - baja.JPG" alt=""></li>
                                 <li><img src="img/uomo/LDC-Cinturon Negro y Rosa 006 - baja.JPG" alt=""></li>
                                 <li><img src="img/uomo/LDC-Gemelos Cristal 008 - baja.JPG" alt=""></li>
                                 <li><img src="img/uomo/LDC-Traje y Chaleco Rallas 004 - baja.JPG" alt=""></li>
                                 <li><img src="img/uomo/LDC-Zapatos Bota 032 - baja.JPG" alt=""></li>
                              </ul>
                              <ul id="slider3-pager">
                                 <li><a href="#"><img src="img/uomo/thmb_LDC-Atache 006 - baja.JPG" alt=""></a></li>
                                 <li><a href="#"><img src="img/uomo/thmb_LDC-Camisa Pera 006 - baja.JPG" alt=""></a></li>
                                 <li><a href="#"><img src="img/uomo/thmb_LDC-Cinturon Negro y Rosa 006 - baja.JPG" alt=""></a></li>
                                 <li><a href="#"><img src="img/uomo/thmb_LDC-Gemelos Cristal 008 - baja.JPG" alt=""></a></li>
                                 <li><a href="#"><img src="img/uomo/thmb_LDC-Traje y Chaleco Rallas 004 - baja.JPG" alt=""></a></li>
                                 <li><a href="#"><img src="img/uomo/thmb_LDC-Zapatos Bota 032 - baja.JPG" alt=""></a></li>
                              </ul>
                           </tr>
                        </table>
                     </td>
                     </tr>
                     <tr>
                        <td height="30">&nbsp;</td>
                     </tr>
                     <tr>
                     </tr>
                     <tr>
                        <td height="75">&nbsp;</td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>
      </div>
      <div id="footercontent"><?php include("inc/footer.php"); ?></div>
   </body>
</html>