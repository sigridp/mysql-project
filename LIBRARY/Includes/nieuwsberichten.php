<?php
$queryAll = 'SELECT * FROM nieuwsberichten ORDER BY publicatie_datum DESC';
$queryItem  = 'SELECT * FROM nieuwsberichten WHERE url = ?';

//query ophalen
if(! empty($_GET['url'])){
    //haal url op
    $selectUrl= $_GET['url'];
    
    //prepare
    if(! $checkQuery= $mysqliConnection-> prepare($queryItem)){
        throw new Exception ('Preparation failed: ' . $mysqliConnection->error);  
    }
    
    //bind
    $checkQuery->bind_param('s', $selectUrl);
}
else{
    //prepare
    if(! $checkQuery= $mysqliConnection-> prepare($queryAll)){
        throw new Exception ('Preparation failed: ' . $mysqliConnection->error);  
    }
}

//execute
if(!$checkQuery->execute()){
    throw new Exception('Excecution failed: ' . $mysqliConnection->error);
}

//collect
$query = $checkQuery->get_result();

//controleer of je informatie hebt ontvangen
if(empty($query->num_rows)){
    echo '<p>Er zijn momenteel geen berichten.</p>';
    die();
}

//omzetten in een array en aanmaken variabelen
while($nieuwsBericht = $query->fetch_assoc()){
    $berichtTitel   = $nieuwsBericht['titel'];
    $berichtInhoud  = $nieuwsBericht['content'];
    $berichtDatum   = date_create($nieuwsBericht['publicatie_datum']);
    $berichtEdit    = date_create($nieuwsBericht['update_datum']);
    $berichtId      = $nieuwsBericht['id'];
    $berichtUrl     = $nieuwsBericht['url'];
    
    if(1 == ($query->num_rows)){
        echo "<h2>$berichtTitel</h2>";
        echo "<p> $berichtInhoud</p>";
        echo '<p class="datum">laatst gewijzigd op: ' . date_format($berichtEdit, 'd-m-Y H:i') .'</p>';
    }
    else {
        echo '<div class="col-lg-4"><h2>' . $berichtTitel . '</h2>';
        echo '<p>Gepubliceerd: ' . date_format($berichtDatum, 'd-m-Y H:i') . '</p>';
        echo '<p class="summary">' . $berichtInhoud . '...</p>';
        echo '<a href="' . WEB_URL . '/pages/bericht.php?url=' . $berichtUrl . '">lees meer</a></div>';
    }
}