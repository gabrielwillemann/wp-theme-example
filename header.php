<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <title>WordPress Theme Example</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="page">
    <div class="header">
      <header>
        <h1>My Header</h1>
      </header>
    </div>
