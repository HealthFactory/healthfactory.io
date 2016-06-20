<article class="article_right">
    <div class="col_2 col_2_v">
        <div class="visuel">
            <img src="img/visuel.jpg" class="image queue-loading">
        </div>
    </div>
    <div class="col_2 col_2_t">
        <div class="box_content animate-v-c">
            <div class="titre animate-v">
                <h2><?php echo $title_h2; ?></h2>
                <h3><?php echo $title_h3; ?></h3>
            </div>
            <div class="content animate-v">
                <p><?php echo $content; ?></p>
                <div class="action">
                    <a href="<?php echo $link; ?>" class="btn" data-text="<?php echo L::btn_plus; ?>" title=""><?php echo L::btn_plus; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</article>
