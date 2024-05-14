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
				Votre adress IP est le :127.0.0.1
				<br>Signature serveur
				
			</p>
			<address>Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34 Server at localhost Port 80</address>
		</section>
		<section>
			<h2>PHP : langage de programmation</h2>
			<ul>
				<li><strong>PHP</strong>: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur web, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet. Wikipédia</li>
				<li><strong>Conçu Par </strong>: Rasmus Lerdorf</li>
				<li><strong>Dernière version</strong> : 8.3.6 (11 avril 2024)</li>
				<li><strong>Développeurs</strong> : The PHP Group</li>
				<li><strong>Écrit en</strong>: C</li>
				<li><strong>Extension de fichier</strong> : php et phar</li>
				<li><strong>Licence</strong> : Licence libre: Licence PHP</li>
				<li><strong>Paradigmes</strong> : Impératif, orienté objet, fonctionnel, procédural, réflexif et interprété</li>
			</ul>
		</section>
		
	</main>
	<!-- end main -->