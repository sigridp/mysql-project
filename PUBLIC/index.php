<?php
	require_once ('../Library/settings.php');
	require_once (LIB_ROOT . '/Includes/header.php');
    include (LIB_ROOT . '/Includes/navigatie.php');
    
?>
  <div class="jumbotron">
        <div class="container">
            <h1><?=ucfirst('Mijn eerste project')?></h1>
            <p>Welkom op mijn webdeveloper's project-pagina</p>
            <p><a href="<?=PAGES_URL?>/over-mij.php" class="btn btn-primary btn-lg">Lees meer over mij&raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div><?php include(LIB_ROOT . '/Includes/nieuwsberichten.php');?></div>
        <hr>
<?php
    require_once (LIB_ROOT . '/Includes/footer.php');