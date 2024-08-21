<?php require_once("../article/db_connect.php");
$sql = "SELECT * FROM article_main";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
//var_dump($result);
?>

<html lang="en">

<head>
    <title>文章總覽</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php include("../css.php") ?>
    <?php include("style.php") ?>
</head>

<body>
    <?php include("../article/nav.php") ?>
    <?php include("../article/sidebar.php") ?>
    <main class="main-content pp-3 px-3">
        <h1 class="main-title">文章總覽</h1>
        <div class="d-flex justify-content-between">

            <div>
                <div class="btn-group">
                    <button class="btn btn-outline-secondary">
                        按ID排序
                    </button>
                    <button class="btn btn-outline-secondary">
                        按類別排序
                    </button>
                    <button class="btn btn-outline-secondary">
                        按時間排序
                    </button>
                </div>

            </div>
        </div>
        <hr>
        <div class="container">
            <ul class="list-unstyled row">
                <?php foreach ($rows as $row): ?>
                    <li class="row">
                        <div class="article-box pt-2 ps-4 pe-4 col-4">
                            <a href=""><h2><?= $row["title"] ?></h2></a>
                            <h5>文章ID:<?= $row["id"] ?></h5>
                            <p><?= $row["description"] ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>