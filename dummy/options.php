<?php
/* @var $options array It contains all the options of the current block, but usually there is no need to access it directly */
/* @var $fields NewsletterFields */

/**
 * This is a simple options panel for a Newsletter Composer Block.
 * $fields contains many useful methods to create controls in a easy way.
 */
?>

<?php $fields->text('title', 'Title') ?>

<?php $fields->textarea('text', 'Text') ?>

<?php 
// Two font selector, see the block.php on how to use them with the default newsletter values and inline style 
// For compatibility reasons the "default" option for family, size and weight selectors should be explicitely enabled
?>
<?php $fields->font('title_font', 'Title font', ['family_default' => true, 'size_default' => true, 'weight_default' => true]) ?>
<?php $fields->font('text_font', 'Text font', ['family_default' => true, 'size_default' => true, 'weight_default' => true]) ?>

<?php 
// Always add that at the bottom: it generates a set of options automatically processed by Newsletter 
?>
<?php $fields->block_commons() ?>



