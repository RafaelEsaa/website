<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php echo body_class(); ?>>
    <div id="bg-sketch"></div>
    <?php wpas_critical_head(); ?>
    <?php get_template_part('partials/navbar','main'); ?>