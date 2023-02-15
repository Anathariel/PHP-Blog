<?php include './front/header.php'; ?>
        <section>
            <h1>Les derniers articles</h1>
            <div class="articles row-limit-size">
                <!-- PHP-->
                <?php
                require_once 'connection.php';

                $sql = "SELECT `id`,`title`,`extract`,`thumbnail` FROM `post` ORDER BY `id`DESC LIMIT 12";
                $req = $db->query($sql);
                
                while($article = $req->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    <article>
                        <figure>
                            <img src="./img/<?= $article['thumbnail'] ?>" alt="<?= $article['title'] ?>">
                        </figure>
                        <div class="article-content">
                            <h2 class="article-title"><?= $article['title'] ?></h2>
                            <p class="article-extract"><?= $article['extract'] ?></p>
                            <p><a href="./front/post.php?id=<?= $article['id'] ?>">Lire l'article</a></p>
                        </div>
                    </article>
                    <!-- PHP Fin-->
                <?php
                } ?>
            </div>
        </section>
    </main>
</body>

</html>