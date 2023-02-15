<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header id="main-header">
        <div class="row-limit-size">
            <div id="logo"><a href="./index.php">Blog</a></div>
            <nav>
                <ul>
                    <li><a href="./index.php">Accueil</a></li>
                    <?php
                    require_once './connection.php';

                    $sql = "SELECT id,name FROM category";
                    $req = $db->query($sql);

                    ?>
                    <li><a href="#">Catégories</a>
                        <div class="subcategory">
                            <ul>
                                <?php while ($category = $req->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <li><a href="./front/category.php?id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>

                    <li><a href="./front/random.php">Random post</a></li>
                    <li><a href="#">New post</a></li>
                </ul>
            </nav>
        </div>

    </header>
    <main>