<?php global $define_page; ?>

<section id="contact_map" class="section">
    
    <?php if ($define_page['class'] == 'home') { ?>
    <div class="center_page">
        <div class="titre">
            <h2>&nbsp;</h2>
        </div>
    </div>
    <?php } ?>
    <img src="img/map.png">
</section>

<section id="contact" class="section">
    <div class="center_page">
        <div class="titre">
            <h2>Contact</h2>
            <h3>Sera Aerial Seneo</h3>
        </div>
        <div class="content">
            <div class="col_2">
                <h4 class="contact">Où sommes-nous ?</h4>
                <address>16 rue des Fleurs <br>67000 Strasbourg</address>
                <p class="telephone">+33 398 485 96</p>
                <p class="email">contact@healthfactory.io</p>
                <ul class="social">
                    <li><a href="#" class="fb">Facebook</a></li>
                    <li><a href="#" class="tw">Twitter</a></li>
                    <li><a href="#" class="ig">Instagram</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col_2">
                <h4 class="contact">Nous écrire</h4>
                <div class="form_wrap">
                <form action="" method="">
                    <input name="prenom" type="text" placeholder="Prénom" />
                    <input name="nom" type="text" placeholder="Nom" />
                    <input name="email" type="email" placeholder="Email" />
                    <textarea rows="4" name="message" placeholder="Message"></textarea>

                    <a class="btn" data-text="Envoyer" href="#" onclick="$(this).closest('form').submit()">
                        <span>Envoyer</span>
                    </a>
                </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
