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
                    <i class="bi bi-envelope-at"><a href="mailto:sylvain.beggiora@outlook.com" class="my-3 lien"> Mon email</a></i><br>
                    <i class="bi bi-github"><a href="https://github.com/24Syleo" class="my-3 lien"> Github</a></i><br>
                    <i class="bi bi-linkedin"><a href="https://www.linkedin.com/in/sylvain-beggiora-151b258b/" class="my-3 lien"> Linkedin</a></i>
                </address>
            </div>
            <div class="p-2">
                <div class="d-none d-md-block pdf">
                    <a href="./pics/sylvain_beggiora_informatique.pdf" class="pdf-link" target="_blank">CV en format PDF</a>
                </div>
            </div>
            <div class="p-2">
                <img src="./pics/sylvain.jpg" alt="" class="img-fluid w-75 img-thumbnail">
            </div>
        </div>
    </section>
    <section id="competences" class="bg-body-secondary p-2">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-6">
                    <button class="pdf-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExamplelangages" aria-expanded="false" aria-controls="collapseWidthExample">
                        Langages informatiques
                    </button>
                    <div class="collapse collapse-horizontal" id="collapseWidthExamplelangages">
                        <div class="card card-body text-center" style="width: 200px;">
                            HTML / CSS
                            JAVASCRIPT
                            PHP
                            MySql
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <p>
                        <button class="pdf-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                            Compétences
                        </button>
                    </p>
                    <div style="min-height: 120px;">
                        <div class="collapse collapse-horizontal" id="collapseWidthExample">
                            <div class="card card-body" style="width: 300px;">
                                This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php require '../elements/footer.php'; ?>