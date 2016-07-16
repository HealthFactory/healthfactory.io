<?php

function sanitize_txt($text) {
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, '-');
  $text = preg_replace('~-+~', '-', $text);
  $text = strtolower($text);
  if (empty($text)) {return 'error';}
  return $text;
}

function select_lang($current) {

	$liste_lang = array('fr'); ?>

	<div class="select-lang">
        <ul>
            <li class="active"><?php echo $current; ?></li>
            <?php foreach ($liste_lang as $value) { ?>
            	<?php if ( $value != $current ) { ?>
            		<li><a href="http://bm-studio.fr/hf2/<?php echo ($value!='fr')?$value:''; ?>"><?php echo $value; ?></a></li>
            	<?php } ?>
            <?php } ?>
        </ul>
    </div>

<?php } ?>
