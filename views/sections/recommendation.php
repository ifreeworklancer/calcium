<!-- Recommendation -->
<section id="recommendation">
    <div class="container">
        <div class="row justify-content-center align-items-end">
            <div class="col-sm-8 col-lg-6">
                <div class="recommendation-item">
                    <h2 class="recommendation-item__title">
                        <?= $recommendation['title']; ?>
                    </h2>
                    <div class="recommendation-item__description">
                        <?= $recommendation['description']; ?>
                    </div>
                    <a href="<?= $btn_instruction_link; ?>" download
                       class="btn btn-outline-primary btn-icon d-flex w-100">
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
            </div>
            <div class="col-sm-6">
                <img src="<?= $recommendation['image']; ?>" alt="recommendation"
                     class="recommendation-image d-none d-lg-block">
            </div>
        </div>
    </div>
</section>