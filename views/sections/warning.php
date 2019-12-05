<!-- Warning -->
<section id="warning">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                    <div class="warning-row mb-4 mb-lg-0">
                        <img src="<?= $intro['image']; ?>" alt="<?= $preparation; ?>" class="warning-image">
                        <div class="d-flex flex-column flex-md-row align-items-center">
                            <div class="price mb-3 mb-md-0 mr-4">
                            <span class="price__title">
                                <?= $price['title']; ?>
                            </span>
                                <span class="price__value">
                                <?= $price['value']; ?>
                            </span>
                                <span class="price__currency">
                                <?= $price['currency'] ?>
                            </span>
                            </div>
                            <a href="<?= $preparation_link; ?>" class="btn btn-secondary">
                                <svg width="20" height="20">
                                    <use xlink:href="#basket-icon"></use>
                                </svg>
                                <?= $btn_order; ?>
                            </a>
                        </div>
                    </div>
                    <div class="warning-description">
                        <?= $warning['text']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>