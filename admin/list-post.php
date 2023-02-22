<?php include_once './header-admin.php'; ?>

<main>
    <h1>Listes des articles</h1>
    <div id="list-posts">
        <!-- PHP-->
        <?php
        require_once '../connection.php';

        $sql = "SELECT `id`,`title`,`extract` FROM `post` ORDER BY `id`DESC LIMIT 12";
        $req = $db->query($sql);

        while ($article = $req->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <article>
                <div class="article-content">
                    <p class="article-title"><?= $article['title'] ?></p>
                    <div>
                        <p><a href="#">Modifier</a></p>
                        <p> | </p>
                        <p><a href="#">Supprimer</a></p>
                    </div>
                </div>
            </article>
            <!-- PHP Fin-->
        <?php
        } ?>
    </div>
</main>
</body>

</html>