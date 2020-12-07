<?PHP
include "../Core/ParticipationC.php";

if (isset($_GET['id_evenement'])){
	$evenementC=new evenementC();
    $result=$evenementC->recupererEvenement($_GET['id_evenement']);
	foreach($result as $row){
		$id_evenement=$row['id_evenement'];
		$name=$row['name'];
		$date=$row['date'];
        $image=$row['image'];
        $description=$row['description'];
        $nb_participants=$row['nb_participants'];
        $nb_places=$row['nb_places'];

    }
}
?>
<!DOCTYPE html>
<html class="translated-ltr" lang="fr"><head>

     <title>Modèle HTML Gymso Fitness</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50" data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> <img src="../images/logo.jpg" alt="" class="gys"> </font></font></a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Basculer la navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" color="red">Accueil</font></font></a>
                    </li>

                    <li class="nav-item">
                        <a href="afficherEvenement.php" class="nav-link smoothScroll"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Evénements</font></font></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link smoothScroll" href="pages/packs.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Packs</font></font></a>
                    </li>

                    <li class="nav-item">
                        <a href="#schedule" class="nav-link smoothScroll"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Blog</font></font></a>
                    </li>

                    <li class="nav-item">
                        <a href="Authentification.html" class="nav-link smoothScroll active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >Connexion</font></font></a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


    


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">
                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">

                                    <img src="../back/Images/<?PHP echo $image ?>" class="img-fluid" alt="Entraîneur">

                                    <div class="team-info d-flex flex-column">

                                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Date de l'evenement: <?PHP echo $date ?></font></font></h3>
                                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">places restantes  :        <?PHP echo $nb_places ?></font></font></span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                        <?php


$participationC=new ParticipationC();
$test=$participationC->verifierParticipation($id_evenement,1);
if(!$test){?>
                                        <a href="#" class="btn custom-btn bg-color mt-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Participer</font></font></a>        
                                        <?PHP

}

else {?>  
                                        <a href="AnnulerParticipation.php?id_evenement=<?PHP echo $id_evenement ?>" class="btn custom-btn bg-color mt-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Annuler Participation</font></font></a>        
                                        <?PHP
                                    }
                                    ?>
                          </div>
                                    
                                </div>
                                
                            </div>
                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bienvenue à <?PHP echo $name ?></font></font></h2>

                                <p data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?PHP echo $description ?></font></p>

                                

                            </div>

                           

                           

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     


     <!-- SCHEDULE -->





     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Copyright © 2020 Alpha.

                         </font></font><br></p>
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">alpha@xxxxxxxx.xxx</font></font></a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 000-000-0000</font></font></p>
                    </div>

               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reservation</font></font></h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="proche">
              <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form" action="participer.php">

                <input class="form-control" name="placesdemandees" placeholder="Nombre des Places">

                <input type="hidden" class="form-control" name="id_evenement" value="<?PHP echo $id_evenement ?>">


                <button type="submit" class="form-control" id="submit-button" name="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bouton de soumission</font></font></button>

                
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="../js/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/aos.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" alt="Google Translate" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>


<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div>
</body></html>