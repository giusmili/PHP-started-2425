<?php
       $_tab = ["html","css", true];
       $_tab_1 = ["java","xml", false];
       $_global = [];
       array_push($_global, $_tab, $_tab_1);
       //print_r($_global);

       # tableaux de base

    


       #itération
     /*   for($i = 0; $i < count($_tab); $i++){
              print ($i+1)." ".$_tab[$i]."\n";
       }
       $i = 0;
    
       while($i < count($_tab)){
              print $i." ".$_tab[$i]."\n";
              $i++;
              
       } */
       # foreach
       const lang = [
              "Langage"=>"PHP",
              "Description"=>"PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, 
              est un langage de programmation libre, principalement utilisé 
              pour produire des pages Web dynamiques via un serveur web, mais 
              pouvant également fonctionner comme n'importe quel langage interprété de façon local",
              "Réf"=>"https://fr.wikipedia.org/wiki/PHP",
              "Concepteur"=>"Rasmus Lerdorf",
              "Dernière version"=>"8.3.6 (11 avril 2024)"
       ];

       foreach (lang as $key => $value) {
              if($key == "Réf"){
                    print "<li><strong>".$key."</strong> <a href=".$value.">Wikipedia</a></li>";
              }
              else{
                      print "<li><strong>".$key."</strong> :  ".$value."</li>";
              }
     
       }
