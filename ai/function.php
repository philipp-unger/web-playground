<?php 

    //
    // Bildergallerie erstellen
    // 
   
    // Verzeichnis, in dem die Dateien liegen
    $verzeichnis = 'img';

    // Versuche das Verzeichnis zu öffnen, oder gebe Fehlermeldung aus
    $dateihandle = @opendir($verzeichnis);
    if(!$dateihandle)
        die('FEHLER: Das Verzeichnis konnte nicht geoeffnet werden!');

    // Index-Variable und Array initialisieren
    $i = 0;
    $gallerie = array();

    // Dateien im Verzeichnis durchlaufen
    while (($datei = readdir($dateihandle)) !== false)
    {
        // Wenn die aktuelle Datei kein Verzeichnis ist, füge sie ins Array und erhöhe den Index-Wert
        // (Ein Verzeichnis ist im Prinzip auch nur eine Datei)
        if (!is_dir($verzeichnis.'/'.$datei))
        {
            $gallerie[$i] = $verzeichnis.'/'.$datei;
            $i++; // $i = $i + 1
        }
    }
    // Schließen des Verzeichnisses
    closedir($dateihandle);

    // Sortieren der Bilder
    sort($gallerie);

    // Ausgeben des erstellten Arrays
    // echo '<pre>';
    // print_r($gallerie);
    // echo '</pre>';
    
    
    $thumbVerzeichnis = $verzeichnis. '/' . 'thumb';
    
    // Versuche das Verzeichnis zu öffnen, oder gebe Fehlermeldung aus
    $dateihandleThumb = @opendir($thumbVerzeichnis);
    if(!$dateihandleThumb)
        die('FEHLER: Das Verzeichnis konnte nicht geoeffnet werden!');

    // Index-Variable und Array initialisieren
    $i = 0;
    $gallerieThumb = array();

    // Dateien im Verzeichnis durchlaufen
    while (($datei = readdir($dateihandleThumb)) !== false)
    {
        // Wenn die aktuelle Datei kein Verzeichnis ist, füge sie ins Array und erhöhe den Index-Wert
        // (Ein Verzeichnis ist im Prinzip auch nur eine Datei)
        if (!is_dir($verzeichnis.'/'.$datei))
        {
            $gallerieThumb[$i] = $thumbVerzeichnis.'/'.$datei;
            $i++; // $i = $i + 1
        }
    }
    // Schließen des Verzeichnisses
    closedir($dateihandleThumb);
    
    sort($gallerieThumb);
    
    // Ausgeben des erstellten Arrays
//    echo '<pre>';
//    print_r($gallerieThumb);
//    echo '</pre>';
    
     
     // Ausgabe der Bilder + Thumb
     function pics() {
         
    global $gallerieThumb; 
    global $gallerie;
    
        foreach ($gallerie as $key  => $val ) {
                echo '<a class="view" title="the Pack - project one" href="'. $val .'" rel="shadowbox[Mixed]" ><img class="gallery" rel="shadowbox" src="'. $gallerieThumb[$key] .'"  alt="the Pack - project one #'. $key .' " /></a>';

            }
            
     };

