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
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<title><?php echo hmpgTitle ?></title>
<?php include("inc/head.inc.php"); ?>
</head>
<body class="hmpg">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <main>
    <?php //include("inc/nav.inc.php"); ?>
        <article>
            <section>
                <h1>CSS Grid</h1>
                <p>
                    <a href="https://css-tricks.com/snippets/css/complete-guide-grid/#prop-display">CSS Tricks: css-grid</a>
                </p>
                <div class="css-grid css-grid--col-3">
                    <div class="css-grid--col">1</div>
                    <div class="css-grid--col">2</div>
                    <div class="css-grid--col">3</div>
                    <div class="css-grid--col">4</div>
                </div>
            </section>
            <section>
                <div class="wrapper">
                    <div class="grid">
                        <div class="grid__item grid__item--heading">
                            <h2>Heading</h2>
                        </div>
                        <div class="grid__item grid__item--media">
                        </div>
                        <div class="grid__item grid__item--body">
                            <h3>Subheading</h3>
                            <p>Lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </section>
        </article> 
        <?php include("inc/foot.inc.php"); ?>   
    </main> 
</body>
</html>
