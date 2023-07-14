<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <script>
        const ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!-- Header Start -->
    <header class="header" id="page-header">
       
    
    <!-- Header End -->
    </header>

    <!-- Main Start -->
    <main class=" main-container">