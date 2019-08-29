<!-- Reviews -->
<section id="reviews" style="background-image: url('<?= $reviews['image_bg']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">
                    <?= $reviews['title']; ?>
                </h2>
                <div class="reviews-slider simple-slider">
                    <?php foreach ($reviews['item'] as $item) : ?>
                        <div class="reviews-slider-item">
                            <div class="reviews-item">
                                <div class="reviews-item-header">
                                    <figure class="image">
                                        <figure style="background-image: url('<?= $item['image']; ?>');"></figure>
                                    </figure>
                                </div>
                                <div class="reviews-item-body">
                                    <div class="decor-block">
                                        <svg width="75" height="50">
                                            <use xlink:href="#quote-icon"></use>
                                        </svg>
                                        <div class="line"></div>
                                    </div>
                                    <div class="description">
                                        <p>
                                            <?= $item['description']; ?>
                                        </p>
                                    </div>
                                    <div class="name">
                                        <?= $item['name']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="slider-arrow slider-arrow--reviews">
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