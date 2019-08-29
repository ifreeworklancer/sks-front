<!-- Advantages -->
<section id="advantages" style="background-image: url('<?= $advantages['image_bg']; ?>');">
    <div class="decor-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">
                    <?= $advantages['title']; ?>
                </h2>
            </div>
        </div>
        <div class="advantages-row">
            <?php
            foreach ($advantages['advantages'] as $item) :
                ?>
                <?php if ((count($item['advantages_item']) > 0) && (is_null($item['image']))) : ?>
                <div class="advantages-item">
                    <div class="advantages-item-header">
                        <div class="icon"
                             style="background-image:url('<?= $item['advantages_item']['icon']; ?>');"></div>
                        <h4 class="title">
                            <?= $item['advantages_item']['title']; ?>
                        </h4>
                    </div>
                    <div class="advantages-item-body">
                        <div class="description">
                            <p>
                                <?= $item['advantages_item']['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="advantages-item advantages-item--image">
                    <figure style="background-image: url('<?= $item['images']; ?>');"></figure>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>