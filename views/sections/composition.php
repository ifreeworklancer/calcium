<!-- Composition -->
<section id="composition">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="section-title text-center text-white">
                    <?= $composition['title']; ?>
                </h2>
            </div>
            <?php
            foreach ($composition['item'] as $item) :
                ?>
                <div class="col-sm-8 col-lg-7 col-xl-6">
                    <div class="composition-item">
                        <figure class="composition-item__image"
                                style="background-image: url('<?= $item['image']; ?>');"></figure>
                        <div class="composition-item__description">
                            <p>
                                <?= $item['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-lg-9 col-xl-8">
                <div class="composition-description">
                    <p>
                        <?= $composition['description']; ?>
                    </p>
                </div>
                <div class="text-center">
                    <a href="<?= $preparation_link; ?>" class="btn btn-secondary">
                        <svg width="20" height="20">
                            <use xlink:href="#basket-icon"></use>
                        </svg>
                        <?= $btn_order; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>