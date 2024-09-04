<main>
        <section>
            <h2>Listes des langages</h2>
            <!--php liste-->
          
            <?php
                # liste inclusion
                include_once "./model/listlang.inc.php";
                # print_r($articles);
                
            ?>
            <?php foreach($articles as $article):?>
                <ul>
                    <li>
                        <h2><?= $article["title"]?></h2>
                    </li>
                    <li>
                        <?= $article["content"]?>
                    </li>
                    <li>
                    <a href="<?= $article["url"]?>" target="blank">
                            <?= $article["link"]?>&raquo;
                        </a>
                    </li>
                </ul>
            <?php endforeach?>
         

        </section>
</main>