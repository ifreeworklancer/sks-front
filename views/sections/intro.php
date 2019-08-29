<!-- Intro -->
<section id="intro">
    <div class="intro-slider">
        <?php
        foreach ($intro['item'] as $item) :
            ?>
            <div class="intro-slider-item" style="background-image:url('<?= $item['image']; ?>');"></div>
        <?php endforeach; ?>
    </div>
    <div class="intro-slider-description">
        <?php
        foreach ($intro['item'] as $item) :
            ?>
            <div class="intro-slider-description-item">
                <div class="content">
                    <h3 class="title">
                        <?= $item['title']; ?>
                    </h3>
                    <div class="description">
                        <p>
                            <?= $item['description']; ?>
                        </p>
                    </div>
                    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                        <div class="price">
                            <div class="price__text">
                                Цена
                            </div>
                            <div class="price__value">
                                $ <span><?= $item['price']; ?></span> за м2
                            </div>
                        </div>
                        <a href="single/single-article.php" class="btn btn-outline-primary">
                            подробнее
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="slider-arrow slider-arrow--intro">
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
</section>
