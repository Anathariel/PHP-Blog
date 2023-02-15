<?php
require_once './header-front.php';
include_once '../connection.php';

$id = $_GET['id'];
?>


<section>
    <div class="articles row-limit-size">
        <!-- PHP-->
        <?php
        $req = $db->prepare("SELECT `post`.`id`,`post`.`title`, `post`.`thumbnail`, `post`.`extract`, `post_category`.`id_category`
        FROM `post`
        INNER JOIN `post_category`
        ON `post_category`.`id_post` = `post`.`id`
        WHERE `post_category`.`id_category` = :id");

        $req->bindParam('id', $id, PDO::PARAM_INT);

        $req->execute();

        while ($article = $req->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <article>
                <figure>
                    <img src="../img/<?= $article['thumbnail'] ?>" alt="<?= $article['title'] ?>">
                </figure>
                <div class="article-content">
                    <h2 class="article-title"><?= $article['title'] ?></h2>
                    <p class="article-extract"><?= $article['extract'] ?></p>
                    <p><a href="../front/post.php?id=<?= $article['id'] ?>">Lire l'article</a></p>
                </div>

            </article>
            <!-- PHP Fin-->
        <?php
        } ?>
    </div>
</section>
</main>