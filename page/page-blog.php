<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Blog -->
    <section id="page-blog" class="page page-archive">
        <div class="page-header">
            <figure class="banner" style="background-image: url('<?= $page_blog['image_banner']; ?>');">
                <div class="page-description">
                    <div class="page-subtitle">
                        <?= $page_blog['subtitle']; ?>
                    </div>
                    <h1 class="title">
                        <?= $page_blog['title']; ?>
                    </h1>
                </div>
            </figure>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active"><?= $page_blog['title']; ?></li>
            </ol>
        </div>
        <div class="page-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <?php
                    $count = 0;
                    foreach ($page_blog['item'] as $item) :
                        $count++;
                        ?>
                        <div class="col-sm-10 col-md-6 col-xxl-4 px-1">
                            <a href="../single/single-article.php">
                                <article class="article-card">
                                    <figure class="image"
                                            style="background-image: url('<?= $item['image']; ?>');">
                                        <div class="date">
                                            <?= $item['date']; ?>
                                        </div>
                                    </figure>
                                    <div class="content">
                                        <h4 class="title">
                                            <?= $item['title']; ?>
                                        </h4>
                                        <div class="description">
                                            <p>
                                                <?= $item['description']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-12 text-center mt-5">
                        <a href="#" class="btn btn-outline-primary">
                            показать еще
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');