<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
      <title>LUIGI DE CARLO / PRENSA</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="css/supersized.css" type="text/css" media="screen" />
      <link rel="stylesheet" href="theme/supersized.shutter.css" type="text/css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/contact.css">
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
         {image : 'img/slides/contacto.jpg'}
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
                        <td bgcolor="#000">
                           <table width="100%" border="0" cellspacing="0" cellpadding="30">
                              <tr>
                                 <td class="titulo">CONTACTO</td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td height="30">&nbsp;</td>
                     </tr>
                     <tr>
                        <td>
                           <table width="984" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td width="656" valign="top" background="img/back.png">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="30">
                                       <tr>
                                          <td class="texto">Consúltanos cualquier inquietud, sobre telas, precios, tiempos y garantías, a través de un e-mail y  rápidamente te contestaremos.<br />
                                             <br />
                                             Así mismo podes solicitarnos muestrarios de :<br />
                                             • telas de camisas (voile-poplin 2X2),,<br />
                                             • ambos (lana super 120,cashemere y mohair),<br />
                                             • pantalones sport ,etc.<br />
                                             Y te lo enviamos a tu domicilio<br />
                                             <br />
                                             Para solicitar muestrarios o entrevistas el 4-813-9239 -156-569-0022<br />
                                             <a href="mailto:contactos@luigidecarlo.com.ar" class="botontexto">contactos@luigidecarlo.com.ar</a>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                                 <td width="328"><img src="img/productos/contacto.png" width="328" height="500" /></td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                     <tr>
                        <td height="75">&nbsp;</td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>
         <form>
			<input name="name" placeholder="Ingrese su nombre.." class="name" required />
			<input name="emailaddress" placeholder="Ingrese su email.." class="email" type="email" required />
		    <textarea rows="4" cols="50" name="subject" placeholder="Ingrese su mensaje.." class="message" required></textarea>
		    <input name="submit" class="btn" type="submit" value="Enviar" />
		</form>
      </div>
      <div name="newContact">
      	
      </div>
      <div id="footercontent"><?php include("inc/footer.php"); ?></div>
   </body>
</html>