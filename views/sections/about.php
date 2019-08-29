<!-- About -->
<section id="about">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-xxl-6 order-2 order-xxl-1">
                <div class="about-item">
                    <h2 class="title">
                        <?= $about['title']; ?>
                    </h2>
                    <div class="description">
                        <p>
                            <?= $about['description']; ?>
                        </p>
                    </div>
                    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                        <a href="single/single-article.php" class="link-more mb-4 mb-sm-0 mr-sm-4">
                            Узнать больше
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-watch"
                           data-src="<?= getVideoLinkAttribute($about['video_link']); ?>">
                            <div class="icon"></div>
                            смотреть видео
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 order-1 order-xxl-2">
                <figure class="about-image" style="background-image: url('<?= $about['image']; ?>');"></figure>
            </div>
        </div>
    </div>
</section>