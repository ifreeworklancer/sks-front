<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Blog -->
    <section id="page-blog" class="page page-single">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item"><a href="#">Блог</a></li>
                <li class="breadcrumb-item active"><?= $single_article['title']; ?></li>
            </ol>
        </div>
        <div class="page-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <div class="article-wrapper">
                            <div class="article-content">
                                <div class="article-slider article-slider--main">
                                    <?php
                                    foreach ($single_article['images'] as $item) :
                                        ?>
                                        <div class="article-slider-item">
                                            <figure style="background-image: url('<?= $item; ?>');"></figure>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="slider-arrow slider-arrow--article">
                                        <div class="slider-arrow-item slider-arrow-item--prev">
                                            <svg width="10" height="15">
                                                <use xlink:href="#arrow-prev"></use>
                                            </svg>
                                        </div>
                                        <div class="slider-arrow-item slider-arrow-item--next">
                                            <svg width="10" height="15">
                                                <use xlink:href="#arrow-next"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-slider article-slider--navFor">
                                    <?php
                                    foreach ($single_article['images'] as $item) :
                                        ?>
                                        <div class="article-slider-item">
                                            <figure style="background-image: url('<?= $item; ?>');"></figure>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <h1>
                                    <?= $single_article['title'];
                                    ?>
                                </h1>
                                <?= $single_article['description']; ?>
                            </div>
                            <div class="article-footer">
                                <div class="author mb-3 mb-xl-0">
                                    <?= $single_article['author']; ?>
                                </div>
                                <ul class="share-list">
                                    <li>
                                        <a href="https://www.facebook.com/sharer.php?http://sks.acrnm.pro" class="btn btn-outline-secondary">
                                            поделиться в
                                            <svg width="20" height="20">
                                                <use xlink:href="#facebook-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-outline-secondary">
                                            поделиться в
                                            <svg width="20" height="20">
                                                <use xlink:href="#instagram-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-5">
                        <a href="../page/page-blog.php" class="btn btn-outline-primary">
                            вернуться в блог
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('../views/base/footer.php');