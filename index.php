<?php

global $define_page;

include('config.php');

$define_page = array(
    'class'         => 'home',
    'titre'         => 'Health Factory',
    'description'   => ''
);

?>

<?php include('section-header.php'); ?>

    <?php include('section-menu.php'); ?>

    <?php include('section-slider.php'); ?>

    <?php $visuel = 'expertise-innovation-health.jpg'; ?>
    <?php $title_h2 = L::menu_1; ?>
    <?php $title_h3 = L::article_1_title; ?>
    <?php $content = L::article_1_content; ?>
    <?php $link = L::article_1_link; ?>
    <?php include('section-concept.php'); ?>

    <?php include('section-innovation.php'); ?>

    <?php include('section-methodologie.php'); ?>

    <?php include('section-offre.php'); ?>

    <?php $titre = L::paralaxe_1_title; ?>
    <?php $image = "paralaxe_2.jpg"; ?>
    <?php include('section-paralaxe.php'); ?>

    <?php include('section-equipe.php'); ?>

    <?php include('section-contact.php'); ?>

<?php include('section-footer.php'); ?>
