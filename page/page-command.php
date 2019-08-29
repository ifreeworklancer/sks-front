<?php

require_once('../store.php');
require_once('../functions.php');
require_once('../views/base/header.php');
?>

    <!-- Page Command -->
    <section id="page-command" class="page page-archive">
        <div class="page-header">
            <figure class="banner" style="background-image: url('<?= $page_command['image_banner']; ?>');">
                <div class="page-description">
                    <div class="page-subtitle">
                        <?= $page_command['subtitle']; ?>
                    </div>
                    <h1 class="title">
                        <?= $page_command['title']; ?>
                    </h1>
                </div>
            </figure>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active"><?= $page_command['title']; ?></li>
            </ol>
        </div>
        <div class="page-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <?php
                    $count = 0;
                    foreach ($page_command['item'] as $item) :
                        $count++;
                        ?>
                        <div class="col-sm-10 col-md-6 col-xxl-4 px-1">
                            <div class="command-card">
                                <figure class="image" style="background-image: url('<?= $item['image']; ?>');"></figure>
                                <div class="content">
                                    <h4 class="name">
                                        <?= $item['name']; ?>
                                    </h4>
                                    <div class="position">
                                        <?= $item['position']; ?>
                                    </div>
                                </div>
                            </div>
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