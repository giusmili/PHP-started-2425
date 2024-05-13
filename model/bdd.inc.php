<?php
    const langs = [
        "PHP"=> "Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. Wikipédia",
        "Conçu"=> "Par : Rasmus Lerdorf",
        "Dernière version" => "8.3.6 (11 avril 2024)",
        "Développeurs"=>"The PHP Group",
        "Écrit en"=>"C",
        "Extension de fichier"=>"php et phar",
        "Licence" => "Licence libre: Licence PHP",
        "Paradigmes" =>"Impératif, orienté objet, fonctionnel, procédural, réflexif et interprété"
    ];
    
    foreach (langs as $key => $value) {
       print "<li><strong>$key</strong> : $value</li>";
    }
    