<?php 
require_once './header-front.php';
include_once '../connection.php';
?>

<section>
            <div class="articles row-limit-size">
                <!-- PHP-->
                <?php
                $sql = "SELECT * FROM `post` ORDER BY RAND() LIMIT 1";
                $sql = $db->query($sql);
                
                while($article = $sql->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <article>
                        <figure>
                            <img src="../img/<?= $article['thumbnail'] ?>" alt="<?= $article['title'] ?>">
                        </figure>
                        <div class="article-content">
                            <h2 class="article-title"><?= $article['title'] ?></h2>
                            <p class="article-extract"><?= $article['content'] ?></p>
                        </div>
                    </article>
                    <!-- PHP Fin-->
                    <?php 
                }
                ?>
            </div>
        </section>
    </main>