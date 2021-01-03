<?php

include '../core/CommentaireC.php';
include '../entities/Commentaire.php';
session_start();
$com=$commentaire = $description=null;
$comC=new CommentaireC();

if (isset($_GET["id_evenement"])&&isset($_GET["id_com"])) {
    $id      = $_GET["id_evenement"];
    $id1=$_GET["id_com"];
	$com=$comC->RecupererCom($id1);
	foreach($com as $row){
		$id_evenement=$row['id_evenement'];
		$id_user=$row['id_user'];
        $description=$row['description'];
       $id_com=$row['id_com'];

    }

}

?>




<?php include 'Layouts/head.php';?>



<section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier Commentaire</font></font></h2>

                        <form action="updateCommentaire.php" method="post" class="contact-form webform aos-init aos-animate" data-aos="fade-up" data-aos-delay="400" role="form">
                            
                        <input type="hidden" name="id_evenement" value="<?php echo $id_evenement ?>">
                        <input type="hidden" name="id_com" value="<?php echo $id_com ?>">

                            <textarea class="form-control" rows="5" name="description"  ><?php echo  $description;?></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modifier Commentaire</font></font></button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        

                        

                        
                    </div>

               </div>
          </div>
     </section>
     <?php include 'Layouts/footer.php';?>