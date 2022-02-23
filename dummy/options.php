<?php
/* @var $options array containing all the options of the current block */
/* @var $fields NewsletterFields */

/**
 * This is a simple options panel for a Newsletter Composer Block.
 * $fields contains many useful methods to create controls in a easy way.
 */
?>

<?php $fields->text('title', 'Title') ?>

<?php $fields->textarea('text', 'Text') ?>

<?php // Always add that at the bottom ?>
<?php $fields->block_commons() ?>



