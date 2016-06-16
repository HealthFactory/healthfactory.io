<?php 

global $define_page;

$define_page = array(
    'class'         => 'home',
    'titre'         => 'Health Factory',
    'description'   => ''
);

?>

<?php include('section-header.php'); ?>

    <?php include('section-menu.php'); ?>  

    <?php include('section-slider.php'); ?>
          
    <?php include('section-concept.php'); ?>

    <?php include('section-innovation.php'); ?>

    <?php include('section-methodologie.php'); ?>

    <?php include('section-offre.php'); ?>

    <?php $titre = "aeiko lorem delaretum"; ?>
    <?php $image = "paralaxe.jpg"; ?>
    <?php include('section-paralaxe.php'); ?>

    <?php include('section-equipe.php'); ?>

    <?php include('section-contact.php'); ?>

<?php include('section-footer.php'); ?>
