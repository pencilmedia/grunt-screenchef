<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("config.inc");
    $ROOT = '/'; // Set root for relative paths
    $thisPage="home"; 
?>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js">
    <!--<![endif]-->
    <head>
        <title>
            <?php echo hmpgTitle ?>
        </title>
        <?php include("inc/head.inc.php"); ?>
    </head>
    <body class="hmpg">
        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <main class="chef-grid">
            <?php include("inc/nav.inc.php"); ?>
            <section class="chef-grid--content">
                <article>
                    <section>
                        <h2>Color Palette</h2>
                        <h6>Black</h6>
                        <div class="box-color black"></div>
                        <div class="box-color black-light"></div>
                        <div class="box-color black-lighter"></div>
                        <div class="box-color black-lightest"></div>
                        <h6>Grey</h6>
                        <div class="box-color grey-darkest"></div>
                        <div class="box-color grey-darker"></div>
                        <div class="box-color grey-dark"></div>
                        <div class="box-color grey"></div>
                        <div class="box-color grey-light"></div>
                        <div class="box-color grey-lighter"></div>
                        <div class="box-color grey-lightest"></div>
                    </section>
                    <section>
                        <h2>Playground</h2>
                        <p>
                            <a href="playground/css-variables.php">CSS Variables</a>
                        </p>
                        <p>
                            <a href="playground/css-grid.php">CSS Grid</a>
                        </p>
                        <h5>Strikethrough</h5>
                        <p>
                            <span style="text-decoration: line-through">strike this out</span>
                        </p>
                        <p>line through whitespace
                            <span style="text-decoration: line-through">&nbsp;&nbsp;&nbsp;</span>
                        </p>
                        <p>
                        <span style='color:red;text-decoration:line-through'>
                            <span style='color:black'>black with red strikethrough</span>
                        </span>
                        </p>
                    </section>
                </article>
            </section>
            <?php include("inc/foot.inc.php"); ?>
        </main>
    </body>
</html>