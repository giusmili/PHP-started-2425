<?php
# config
   include_once __DIR__."/model/config.inc.php";
# head
   include_once __DIR__."/template/head.inc.php";

?>


<body>

<?php
    # banner
    include_once __DIR__."/template/banner.inc.php";
    # main
    include_once __DIR__."/template/main.inc.php";
    # footer
    include_once __DIR__."/template/footer.inc.php";
?>



<pre>
    <?php
        # print_r($_SERVER)

    ?>
</pre>
	
</html>
