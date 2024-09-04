<main>
        <figure>
            <img src="./public/asset/cover.svg" alt="cover php">
            <figcaption>
                <h2>
                    PHP version <?= $versionPHP ?>
                </h2>
				
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?= $date_hours->format("d-m-Y")?></h2>
			<p>
				Votre navigateur est : <?= $navigator ?><br>
				Votre adress IP est le : <?= $addrIP ?>
				<br>Le chemin de votre fichier<?= $path ?>
				
			</p>
			<address>Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34 Server at localhost Port 80</address>
		</section>
		<section>
			<h2>PHP : langage de programmation</h2>
			<?php
				include_once "tab.inc.php";
			?>
			
		</section>
		
	</main>
	<!-- end main -->