<!-- Packages -->
<section id="packages">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="section-title text-center mb-4 mb-sm-5">
                    <?= $packages['title']; ?>
                </h2>
            </div>
            <?php
            foreach ($packages['item'] as $item) :
                ?>
                <div class="col-xxl-6 px-xxl-2">
                    <a href="single/single-article.php" class="packages-card">
                        <div class="packages-card-prev">
                            <figure style="background-image: url('<?= $item['image']; ?>');"></figure>
                        </div>
                        <div class="packages-card-content">
                            <div class="packages-card-content-header">
                                <div class="subtitle">
                                    <?= $item['subtitle']; ?>
                                </div>
                                <h4 class="title">
                                    <?= $item['title']; ?>
                                </h4>
                                <div class="price">
                                    <div class="price__text">
                                        Цена
                                    </div>
                                    <div class="price__value">
                                        $ <span><?= $item['price']; ?></span> за м<sup>2</sup>
                                    </div>
                                </div>
                            </div>
                            <div class="packages-card-content-body">
                                <div class="description">
                                    <?= $item['description']; ?>
                                </div>
                                <div class="more-details">
                                    Подробнее
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>