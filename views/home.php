<?php
require '../vendor/autoload.php';

require '../elements/header.php';
?>

<main>
    <section id="coordonne" class="bg-body-tertiary p-2">
        <div class="d-flex flex-column flex-md-row justify-content-md-around justify-content-center align-items-center">
            <div class="p-2">
                <address>
                    <h6>Me Contacter</h6>
                    <i class="bi bi-house my-3"> Chemin de la Gravière 31, 1225 Chêne-Bourg</i><br>
                    <i class="bi bi-phone"><a href="tel:+41798745493" class="my-3 lien"> 079 874 54 93</a></i><br>
                    <i class="bi bi-envelope-at"><a href="mailto:sylvain.beggiora@outlook.com" class="my-3 lien"> Mon
                            email</a></i><br>
                    <i class="bi bi-github"><a href="https://github.com/24Syleo" class="my-3 lien"> Github</a></i><br>
                    <i class="bi bi-linkedin"><a href="https://www.linkedin.com/in/sylvain-beggiora-151b258b/"
                            class="my-3 lien"> Linkedin</a></i>
                </address>
            </div>
            <div class="p-2">
                <div class="d-none d-md-block pdf">
                    <a href="./pics/sylvain_beggiora_informatique.pdf" class="pdf-link" target="_blank">CV en format
                        PDF</a>
                </div>
            </div>
            <div class="p-2">
                <img src="./pics/sylvain.jpg" alt="" class="img-fluid w-75 img-thumbnail">
            </div>
        </div>
    </section>
    <section id="competences" class="bg-body-secondary p-2">
        <div class="d-flex justify-content-around align-items-center flex-column flex-md-row">
            <div class="p2">
                <div class="pdf mb-3">
                    <a class="pdf-link" data-bs-toggle="collapse" href="#langages" role="button"
                        aria-expanded="false" aria-controls="langages">
                        Langages Informatiques
                    </a>
                </div>
                <div class="collapse" id="langages">
                    <div class="card card-body shadow-md">
                        HTML CSS PHP MySql Bootstrap
                    </div>
                </div>
            </div>
            <div class="p2 ">
                <div class="pdf mb-3 ms-3">
                    <a class="pdf-link" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Compétences
                    </a>
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body shadow-md">
                        Aperçu système et architectures informatiques.
                        Installation et configuration ainsi que mise à niveau de
                        système d'exploitation.
                        Installation de matériel, par exemple : disques durs, cartes
                        graphiques, etc...
                        Migrations de données.
                        Installation d'imprimantes et autres périphériques.
                        Installation et configuration de logiciel standard.
                        Mise en évidence et répétition de la procédure à suivre en
                        cas d'erreur.
                        Acquisition des bases de l'installation d'un réseau.

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php require '../elements/footer.php'; ?>