<?php
/*
 * Name: Dummy
 * Section: content
 * Description: A dummy block to learn how to code them
 */

/* @var $options array */

// On future releases of Newsletter, default options will be part of the options.php
// file, it is the best place to have them. By now, be patience.

$default_options = array(
    'title' => 'You title',
    'text' => 'Your nice text to describe whatever you want to describe.',

    // block_ prefixed options are reserved for Newsletter and the ones below managed directly by Newsletter
    'block_padding_left' => 15,
    'block_padding_right' => 15,
    'block_padding_top' => 15,
    'block_padding_bottom' => 15,
    'block_background' => '#ffffff',
);

$options = array_merge($default_options, $options);

// $options is processed with the wp_kses(...) to there is no need to escape it and that
// allow a richer content wirh safe HTML tags.

?>
<h1><?php echo $options['title']?></h1>
<p><?php echo $options['text']?></p>
