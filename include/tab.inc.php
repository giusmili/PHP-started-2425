         <ul>
            <?php
                const product = [
                        "Marque"=>"Samsung S20",
                        "Type"=> "Smartphone",
                        "Année"=>2021,
                        "Etat"=>"Reconditionné",
                        "Prix"=>290,
                        "Image"=>"https://m.media-amazon.com/images/I/71EzBaGwVVL._AC_UF1000,1000_QL80_.jpg"
            
                ];
                //var_dump(product)
                foreach (product as $key => $value) {
                    # condition
                    if($key !== "Image"){
                        print "<li>$key : $value<li>";
                    }
                    else{
                        print "<li><img src=".$value." alt=\"cover\"></li>";
                    }
                    
                }
         ?>
         </ul> 
      
            
      