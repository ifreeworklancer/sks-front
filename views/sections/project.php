<!-- Project -->
<section id="project">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">
                    <?= $project['title']; ?>
                </h2>
                <div class="project-slider simple-slider">
                    <?php
                    $count = 0;
                    foreach ($project['item'] as $item) :
                        $count++;
                        ?>
                        <div class="project-slider-item">
                            <a href="single/single-article.php" class="project-card">
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
                    <div class="slider-arrow slider-arrow--project">
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
            </div>
        </div>
    </div>
</section>