<?php
require '../vendor/autoload.php';

require '../elements/header.php';
?>

<main>
   <section id="coordonne">
    <div class="container-fluid mt-2 text-center">
        <div class="row align-items-center">
            <div class="col-md-4">
                <address class="text-start">
                    <h6>Me Contacter</h6>
                    <i class="bi bi-house my-3"> Chemin de la Gravière 31, 1225 Chêne-Bourg</i><br>
                    <i class="bi bi-phone"><a href="tel:+41798745493" class="my-3"> 079 874 54 93</a></i><br>
                    <i class="bi bi-envelope-at"><a href="mailto:sylvain.beggiora@outlook.com" class="my-3"> Mon email</a></i><br>
                    <i class="bi bi-github"><a href="https://github.com/24Syleo"> Github</a></i><br>
                    <i class="bi bi-linkedin"><a href="https://www.linkedin.com/in/sylvain-beggiora-151b258b/" class="my-3"> Linkedin</a></i>
                </address>
            </div>
            <div class="col-4 d-none d-md-block">
                <div class="">
                    <a href="./pics/sylvain_beggiora_informatique.pdf">CV en format PDF</a>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img src="./pics/toonme_sylvain.jpg" alt="" class="img-fluid w-25 img-thumbnails rounded">
                </div>
            </div>
        </div>
    </div>
   </section> 
</main>


<?php require '../elements/footer.php'; ?>