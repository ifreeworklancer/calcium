<!-- Intro -->
<section id="intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-xl-4">
                <img src="<?= $intro['image']; ?>" alt="<?= $preparation; ?>" class="intro-image">
            </div>
            <div class="col-md-8 col-lg-6 mb-5 mb-lg-0">
                <div class="intro-item">
                    <div class="section-description">
                        <h5 class="section-description__subtitle">
                            <?= $intro['subtitle']; ?>
                        </h5>
                        <h1 class="section-description__title">
                            <?= $intro['title']; ?>
                        </h1>
                    </div>
                    <div class="d-flex flex-column flex-sm-row align-items-center">
                        <div class="price mb-3 mb-sm-0 mr-4">
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
            </div>
            <div class="col-md-8 col-lg-6 mb-4 mb-lg-0">
                <a href="#" class="btn btn-outline-primary btn-icon d-flex w-100 intro-btn-icon">
                    <div class="btn__description">
                        <?= $btn_instruction; ?>
                    </div>
                    <div class="icon">
                        <svg width="23" height="23">
                            <use xlink:href="#document-icon"></use>
                        </svg>
                        <?= $instruction; ?>
                    </div>
                </a>
            </div>
            <div class="col-md-8 col-lg-6">
                <a href="#" class="btn btn-outline-primary btn-icon d-flex w-100 intro-btn-icon">
                    <div class="btn__description">
                        <?= $btn_certificate; ?>
                    </div>
                    <div class="icon">
                        <svg width="23" height="23">
                            <use xlink:href="#certificate-icon"></use>
                        </svg>
                        <?= $certificate; ?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
