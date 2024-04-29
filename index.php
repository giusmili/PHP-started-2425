<?php
    const title = "Started PHP";
    $version = phpVersion();
    $date = date("d-m-Y");
    $lang = ["fr","en","it"];
    $date_footer = new DateTime()
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
	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
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
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?= $date ?></h2>
			<p>
				Votre navigateur est : Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0<br>
				Votre adress IP est le :127.0.0.1
				<br>Signature serveur
				
			</p>
			<address>Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34 Server at localhost Port 80</address>
		</section>
	</main>
	<!-- <pre>
	</pre> -->
	<footer>
		<p>&copy; - MIT - <?=  $date_footer->format("Y")?></p>
	</footer>
	
</html>
