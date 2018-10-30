<?php
	require_once ('../../Library/settings.php');
	require_once (LIB_ROOT . '/Includes/header.php');
	include (LIB_ROOT . '/Includes/navigatie.php');
?>
<div class="jumbotron">
    <div class="container">
        <h1><?=ucfirst("Mijn berichten pagina")?></h1>
        <p>Op deze pagina is de inhoud van het bericht te lezen.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <?php include(LIB_ROOT . '/Includes/nieuwsberichten.php');?>
            <a class="btn btn-default" href="<?=WEB_URL?>">&laquo; back</a>
            <?php editBericht();?>
        </div> 
    </div>
    <hr>
<?php
    require_once (LIB_ROOT . '/Includes/footer.php');