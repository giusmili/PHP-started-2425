<?php
   include_once __DIR__."/model/config.inc.php"
?>

<!DOCTYPE html>
<html lang="<?= $lang[0] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title ?></title>
	<link rel="apple-touch-icon" sizes="180x180" href="./public/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>

	<header>
		<h1>
			🚀 
			<?= title. " version $version" ?>
		</h1>
	</header>
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
	<!-- <pre>
	</pre> -->
	<footer>
		<p>&copy; - MIT - <?=  $date_footer->format("Y")?></p>
	</footer>
    <pre>
        <?php
            # print_r($_SERVER)

        ?>
    </pre>
	
</html>
