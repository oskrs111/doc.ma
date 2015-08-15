<?php
//VSUM - CODE - BLOCK - START
require('./vsum/vsum-class.php');   
if(isset($_POST['do']))
{
    if($_POST['do']== 'register')
    {         
        //NOTE: Be sure password has been checked before form sending... 
        $user = new vsumClass($_POST['username'],$_POST['password1'],$_POST['password2']);
        $user->vUserLogin();
        $status = $user->vGetUserStatus();
        switch($status)
        {
            case vUserStatus::stValidUser: 
                 $user->vGoLoginPage(0); //Already registered???
                 $user = 0;
                 break;
            case vUserStatus::stUnknownUser:
            case vUserStatus::stWrongCredentials:
            case vUserStatus::stValidationPending:
            default:  
                     $r = $user->vUserRegister(false);                     
                     $user->vGoLoginPage($r); //Go to login page if register is done...                                                 
        }
    }
}
//VSUM - CODE - BLOCK - END
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
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
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
                  <div class="top-nav s-12 l-10 right">
                   
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
                        <article class="s-6">
                           <form id="logFormId" class="customform" action="registro.php" enctype="application/x-www-form-urlencoded" method="post">
                    <div class="articlePara">
                    <label for="username">Email:</label><br />
                    <input name="username" id="username" size="25" type="text" class="vui-biginput vui-std-border"/>
                    </div>

                    <div class="articlePara">
                    <label for="password1">Password:</label><br />
                    <input name="password1" id="passwordId1" size="25" type="password" class="vui-biginput vui-std-border"/>
                    </div>
                    <div class="articlePara">
                    <label for="password2">Re-type Password:</label><br />
                    <input name="password2" id="passwordId2" size="25" type="password" class="vui-biginput vui-std-border"/>
                    </div>                                   
                               <button size="25" type="submit" value="register">Registrar</button>
                                 <input name="do" size="25" type="hidden" value="register"/>
                    </form>                                  
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
                     <p>Copyright 2015, Vision Design - graphic zoo</p>
                  </div>
                  <div class="s-12 l-6">
                     <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
                  </div>
               </div>
            </footer>
         </div>
      </div>
   </body>
</html>