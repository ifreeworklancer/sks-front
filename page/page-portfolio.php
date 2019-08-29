<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Portfolio -->
    <section id="page-portfolio" class="page page-archive">
        <div class="page-header">
            <figure class="banner" style="background-image: url('<?= $page_portfolio['image_banner']; ?>');">
                <div class="page-description">
                    <div class="page-subtitle">
                        <?= $page_portfolio['subtitle']; ?>
                    </div>
                    <h1 class="title">
                        <?= $page_portfolio['title']; ?>
                    </h1>
                </div>
            </figure>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active"><?= $page_portfolio['title']; ?></li>
            </ol>
        </div>
        <div class="page-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <?php
                    $count = 0;
                    foreach ($page_portfolio['item'] as $item) :
                        $count++;
                        ?>
                        <div class="col-sm-10 col-md-6 col-xl-4 px-1">
                            <a href="../single/single-article.php" class="project-card">
                                <div class="decor-hover"></div>
                                <div class="count">
                                    <?php if ($count < 10) : ?>
                                        0<?= $count; ?>
                                    <?php else : ?>
                                        <?= $count; ?>
                                    <?php endif; ?>
                                </div>
                                <figure class="image" style="background-image:url('<?= $item['image']; ?>');"></figure>
                                <div class="content">
                                    <h4 class="title">
                                        <?= $item['title']; ?>
                                    </h4>
                                    <div class="description">
                                        <p>
                                            <?= $item['description']; ?>
                                        </p>
                                        <div href="#" class="link-more">
                                            Узнать больше
                                        </div>
                                    </div>
                                </div>
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