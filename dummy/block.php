<?php
/*
 * Name: Dummy
 * Section: content
 * Description: A dummy block to learn how to code them
 */

/* @var $options array */

// On future releases of Newsletter, default options will be part of the options.php
// file, it is the best place to have them. By now, be patience.

// The "block_*" options are reserved and could be processed dutrectly by Newsletter. For example the
// "block_background" and "block_padding_*" are used to generated the wrapper of the block content.

$default_options = array(
    'title' => 'You title',
    'text' => 'Your nice text to describe whatever you want to describe.',

    'block_padding_left' => 15,
    'block_padding_right' => 15,
    'block_padding_top' => 15,
    'block_padding_bottom' => 15,
    'block_background' => '', // Leave empty to use the block background set on the newsletter settings
);

$options = array_merge($default_options, $options);

// Ok, this is a bit tricky and should be improved. $title_style and $text_style are object containing the merged font style between
// that is configured in the block and what is configured in the newsletter settings. When a block font option is set to "default" the
// global value is used.
// The methods ask for: the block options, the option prefix to identify the block font settings (if the prefix is "title" the method will
// look for options starting with "title_font_*". Then they need the $composer which contains the global options. The method "get_title_style"
// takes from the global options the general style for titles and the method get_text_style takes from the global options the 
// general style for text.

$title_style = TNP_Composer::get_title_style($options, 'title', $composer);
$text_style = TNP_Composer::get_text_style($options, 'text', $composer);


// $options is processed with the wp_kses(...) so there is no need to escape it and that
// allow a richer content with safe HTML tags.

?>

<?php
// Here we define a single block style with classes that are then transoformed in inline styles. Style for fonts can be easily generated with
// the object created above. The style block is REMOVED on rendering.
?>
<style>
    .title {
        <?php $text_style->echo_css() ?>
    }
    
    .text {
        <?php $text_style->echo_css() ?>
    }
</style>

<?php
// The attribute "inline-class" is then replaced with a "style" attribute with all rules of the referenced class. 
?>

<h1 inline-class="title"><?php echo $options['title']?></h1>

<p inline-class="text"><?php echo $options['text']?></p>
