<?php 
require_once './header-front.php';
include_once '../connection.php';

$id = $_GET['id'];
?>

<section>
            <div class="articles row-limit-size">
                <!-- PHP-->
                <?php
                $req = $db->prepare("SELECT `id`, `title`, `extract`, `thumbnail`, `content`, `published_at`, `author` FROM `post` WHERE `id` = :id");
                $req->bindParam('id', $id, PDO::PARAM_INT);
                
                $req->execute();
                
                while($article = $req->fetch(PDO::FETCH_ASSOC)){
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
                } ?>
            </div>
        </section>
    </main>