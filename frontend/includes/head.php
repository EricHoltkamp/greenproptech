<head>
    <title><?php echo getPageTitle([$navHeader, $navFooter], $currentPage); ?></title>
    <meta name="description" content="<?php echo getPageDesc([$navHeader, $navFooter], $currentPage); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:title" content="<?php echo getPageTitle([$navHeader, $navFooter], $currentPage); ?>">
    <meta property="og:description" content="<?php echo getPageDesc([$navHeader, $navFooter], $currentPage); ?>">
    <meta property="og:type" content="Website">
    <meta property="og:image" content="<?php echo "$root"; ?>src/images/facebook.jpg">
    <?php include('src/favicon/favicon.php'); ?>
    <link rel="stylesheet" href="<?php echo "$root"; ?>src/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo "$root"; ?>src/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo "$root"; ?>src/css/styles.css">


    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo "$root";?>src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo "$root";?>src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo "$root";?>src/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="<?php echo "$root"; ?>src/favicon/safari-pinned-tab.svg" color="#4baa41">
    <link rel="shortcut icon" href="<?php echo "$root"; ?>src/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-config" content="<?php echo "$root"; ?>src/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>



