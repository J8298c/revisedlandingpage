<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php
    global $gassetsDir;
    $gassetsDir  = realpath(
            $_SERVER["DOCUMENT_ROOT"]
            . DIRECTORY_SEPARATOR . 'gassets'
        ) . DIRECTORY_SEPARATOR;
    $rootURL     = dirname(get_bloginfo('url'));
    if (!isset($useGlobal)) {
        echo "<link rel=\"stylesheet\" href=\"" . get_template_directory_uri() . "/includes/global/css/global-header-footer.min.css\"/>";
    }
    wp_head(); ?>
</head>
<body>
<?php
if (file_exists($gassetsDir . "global-header.php")) {
    include $gassetsDir . "global-header.php";
} else {
    include "includes/global/global-header.php";
}
?>