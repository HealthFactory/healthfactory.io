

<div id="main" class="page-layout" data-page="Home">

<section class="section-slideshow slideshow screen-height">

    <?php select_lang($lang); ?>

    <div class="logo_slider">
        <div class="logo_img"></div>
        <div class="logo_txt">go beyond ideas</div>
    </div>

    <div class="mh mhl mh1"><span class="scrollto shuffle" data-target="concept"><?php echo L::menu_1; ?></span></div>
    <div class="mh mhl mh2"><span class="scrollto shuffle" data-target="innovation"><?php echo L::menu_2_1; ?><br><?php echo L::menu_2_2; ?></span></div>
    <div class="mh mhl mh3"><span class="scrollto shuffle" data-target="metho"><?php echo L::menu_3; ?></span></div>
    <div class="mh mhr mh4"><span class="scrollto shuffle" data-target="offre"><?php echo L::menu_4; ?></span></div>
    <div class="mh mhr mh5"><span class="scrollto shuffle" data-target="equipe"><?php echo L::menu_5; ?></span></div>
    <div class="mh mhr mh6"><span class="scrollto shuffle" data-target="contact"><?php echo L::menu_6; ?></span></div>

    <div class="scroller">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <div class="slideshow-inner">
        <div class="slides">
            <div class="slide is-active">
                <div class="slide-content">
                    <div class="center-v-c">
                        <div class="center-v animate-txt">
                            <div class="title"><?php echo L::slide_1_title; ?></div>
                            <div class="text"><p><?php echo L::slide_1_content; ?></p></div>
                        </div>
                    </div>
                </div>
                <div class="image-container screen-height"> <img src="img/slider_1.jpg" data-src="img/slider_2.jpg" alt="" width="1920" height="1080" class="image queue-loading as-background" style="display: none;"></div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <div class="center-v-c">
                        <div class="center-v animate-txt">
                            <div class="title"><?php echo L::slide_2_title; ?></div>
                            <div class="text"><p><?php echo L::slide_2_content; ?></p></div>
                        </div>
                    </div>
                </div>
                <div class="image-container screen-height"> <img src="img/slider_3.jpg" data-src="img/slider_3.jpg" alt="" width="1920" height="1080" class="image queue-loading as-background" style="display: none;"></div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <div class="center-v-c">
                        <div class="center-v animate-txt">
                            <div class="title"><?php echo L::slide_3_title; ?></div>
                            <div class="text"><p><?php echo L::slide_3_content; ?></p></div>
                        </div>
                    </div>
                </div>
                <div class="image-container screen-height"> <img src="img/slider_2.jpg" data-src="img/slider_1.jpg" alt="" width="1920" height="1080" class="image queue-loading as-background" style="display: none;"></div>
            </div>

        </div>
        <div class="pages">
            <div class="page is-active"><span class="icon">1</span></div>
            <div class="page"><span class="icon">2</span></div>
            <div class="page"><span class="icon">3</span></div>
        </div>
    </div>
</section>
