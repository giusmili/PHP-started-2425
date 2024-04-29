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
                    include_once "demo_php.php";
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