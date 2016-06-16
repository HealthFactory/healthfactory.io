<?php 

global $define_page;

$define_page = array(
    'class'         => 'page',
    'titre'         => 'Health Factory',
    'description'   => ''
);

?>

<?php include('section-header.php'); ?>
    
    <?php include('section-menu.php'); ?>

    <?php include('section-top-page.php'); ?>

    <?php include('section-articles.php'); ?>

    <?php $color = 'grey'; ?>
    <?php include('section-pages.php'); ?>

    <?php $color = 'white'; ?>
    <?php include('section-pages.php'); ?>

    <?php $titre = "aeiko lorem delaretum"; ?>
    <?php $image = "paralaxe_2.jpg"; ?>
    <?php include('section-paralaxe.php'); ?>

    <?php include('section-articles-grid.php'); ?>

    <?php $color = 'grey_low'; ?>
    <?php include('section-rounds.php'); ?>

    <?php include('section-partenaires.php'); ?>

    <?php include('section-contact.php'); ?>

<?php include('section-footer.php'); ?>
