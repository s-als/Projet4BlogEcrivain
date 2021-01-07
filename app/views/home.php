<?php require_once (ROOT.'app/views/header.php');?>

<!-- About-->
<section class="about-section margeAndRounded text-center" id="about">
    <div class="anchor">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4"> A propos de moi </h2>
                    <p class="text-white-50">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac sem rhoncus libero venenatis malesuada. Duis eget velit neque. Etiam vel aliquam nulla, quis rhoncus ipsum. Nulla at aliquet velit, eget pellentesque nisl. Donec facilisis massa a ligula ultricies, quis gravida lorem consectetur. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam vel scelerisque lectus. Phasellus justo augue, vulputate et consectetur eget, tincidunt ac nisl. Nunc semper cursus ligula, id placerat velit ullamcorper at. In metus purus, ornare at sagittis eu, rutrum ut mauris.
                    </p>
                    <a class="btn btn-secondary btn-sm" href="#projects">Mon livre</a>
                    <a class="btn btn-secondary btn-sm" href="#projects">Mes roles</a>
                </div>
            </div>
            <img class="img-fluid" src="public/images/book-picture1.png" alt="" />
        </div>
    </div>
</section>
<!-- Projects-->
<section class="projects-section margeAndRounded bg-light" id="projects">
    <div class="anchor">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="public/images/alaska4.jpg" alt="" /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Un billet simple pour l'Alaska</h4>
                        <p class="text-black-50 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac sem rhoncus libero venenatis malesuada.</p>
                        <a class="btn btn-secondary btn-sm" href="/articles">Commencer la lecture</a>
                    </div>
                </div>
            </div>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Pièces</th>
                    <th scope="col">Metteur en scène</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Années</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">L'étrange Noel de Monsieur Patate</th>
                        <td>Tim Broshas</td>
                        <td>Monsieur Patate</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <th scope="row">Hamlet</th>
                        <td>Arnold Albert Schweitzer</td>
                        <td>Le doux prince</td>
                        <td>1993</td>
                    </tr>
                    <tr>
                        <th scope="row">Starpers Trooship</th>
                        <td>Pipo klendathu</td>
                        <td>Rico</td>
                        <td>1997</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<div class="anchor" id="signup">
</div>
<!-- Signup-->
<section class="signup-section margeAndRounded" id="">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <h2 class="text-white">Bonne lecture à tous et n'hésitez pas à écrire un petit commentaire pour partagez votre ressentit.</h2>
            </div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="contact-section margeAndRounded bg-black">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt mb-2"></i>
                        <h4 class="text-uppercase m-0">Boite Postale</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">0 Rue fictive 03079 Melas</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">contact@jeanforteroche.fr</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt mb-2"></i>
                        <h4 class="text-uppercase m-0">Tatoo</h4>
                        <hr class="my-4" />
                        <div class="small text-black-50">04 22 52 10 10</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="mx-2" href="https://github.com/s-als/Projet4BlogEcrivain"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>