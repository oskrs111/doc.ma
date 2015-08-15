<?php
require('./vsum/vsum-page.php');   
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>doc.ma</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/jtable-master/lib/jquery.jtable.js"></script>
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <script type="text/javascript">
      $( document ).ready(function() 
      { 
<?php
      switch ($user->vGetUserRole())
      {
           case "vsum-user":
              echo "$('#menuContainer').load('userRoleMenu.php');";    
              echo "$('#uiContainer').load('userRoleUi.php');";    
              break;
          
          case "vsum-client":
              echo "$('#menuContainer').load('clientRoleMenu.php');";    
              echo "$('#uiContainer').load('clientRoleUi.php');";    
              break;          
          
          case "vsum-admin":
              echo "$('#menuContainer').load('adminRoleMenu.php');";    
              echo "$('#uiContainer').load('adminRoleUi.php');";  
              //echo "setTimeout(function(){ ; }, 1000);"
              break;          
          
          default:
              echo "$('#uiContainer').load('defaultRoleUi.php');";    
              break;
      }
?>   
      }          
      </script>
   </head>
   <body class="size-1140">
      <div id="all-content" class="with-sticky-footer">
         <!-- TOP NAV WITH LOGO -->
         <header>
            <nav>
               <div class="line">
                  <div class="s-12 l-2">
                     <img class="s-5 l-12 center"src="img/logo.png">
                  </div>
                  <div class="top-nav s-12 l-10 right" id="menuContainer">
                   
                  </div>
               </div>
            </nav>
         </header>
         <section>
            <!-- FIRST BLOCK -->
            <div id="first-block">
               <div class="line">
                  <div class="margin-bottom">
                     <div class="margin">
                        <article class="s-6" id="uiContainer">                           
                        </article>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- FOOTER -->
         <div id="footer-content" class="sticky-footer">
            <footer>
               <div class="line">
                  <div class="s-12 l-6">
                 
               </div>
            </footer>
         </div>
      </div>
   </body>
</html>

