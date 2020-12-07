<?PHP
include "../Core/EvenementC.php";

$evenment1C=new EvenementC();
$listeEvenments=$evenment1C->afficherEvenements1();

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Gymso Fitness HTML Template</title>

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
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

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
                        <a href="#class" class="nav-link smoothScroll"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos Evénement</font></font></a>
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

     <!-- HERO -->
     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">

                                <h2 data-aos="fade-up" data-aos-delay="200">let's breathe together</h2>
                             </div>
                            
                                        <tbody>

                                          <?PHP
foreach($listeEvenments as $row){
    
if (date('Y-m-d')>$row['date']) {
    $evenment1C->modifierEvenementDelai($row,$row['id_evenement']);
    //header('Location: afficherEvenement.php');
    echo '<meta http-equiv="refresh" content="1;url=afficherEvenement.php" />';

}
?>
    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="../back/Images/<?PHP echo $row['image']; ?>"class="img-fluid" alt="Evenement">

                                    <div class="class-info">
                                        <h3 class="mb-1"><a href="detailEvenement.php?id_evenement=<?PHP echo $row['id_evenement']; ?>">
                                        <?PHP echo $row['name']; ?></a></h3>

                                        <span><strong>Date:</strong> <?PHP echo $row['date']; ?></span>

                                        <span class="class-price"><?PHP echo $row['nb_participants']; ?></span>

                                    </div>
                                </div>
                            </div>
	
	<?PHP

}
?>
                                           
                                        </tbody>
                                        
									
                                               </div>
               </div>
     </section>


     
     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2020 Gymso Fitness Co.
                        
                        <br>Design: <a href="https://www.tooplate.com">Tooplate</a></p>
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">hello@company.co</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                    </label>
                </div>
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
     <script src="../js/custom.js"></script>

</body>
</html>