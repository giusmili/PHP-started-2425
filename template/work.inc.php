<main>
        <figure>
            <img src="./public/asset/cover.svg" alt="cover php">
            <figcaption>
                <h2>
                    PHP <?= " version $version" ?>
                </h2>
                <p>
					Votre répertoire il est dans ce chemin : <?= $path ?>
				</p>
                <ul>
                  
                    <?php
                        # test php
                        include_once "tableaux.inc.php";

                        /* for($i = 0; $i < count(langs); $i++){
                            print "<li>".($i+1)." ".langs[$i]."</li>";
                        } */
                       /*  foreach (product as $key => $value) {
                            if($key !=="Image"){
                                print "<li>$key : $value</li>";
                            }
                            else{
                                print "<li><img src=".$value." alt =\"cover\"></li>";
                            }
                            
                        } */
                        foreach (User as $key => $value) {
                            if($key !== "location"){
                                print "<li>$value</li>";
                                }
                                else{
                                    foreach (User["location"] as $key => $value) {
                                        print "<li>$key : $value</li>";
                                    }
                                }
                            
                        }
                    
                    ?>
                </ul>
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?= $date ?></h2>
			<p>
				Votre navigateur est : <?= $navigator ?> <br>
				Votre adress IP est le : <?= $add_ip ?>
				<br>Signature serveur
				
			</p>
			<?= $sign ?>
		</section>
     
	</main>