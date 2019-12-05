<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../../fonts/font.css">
    <link rel="stylesheet" href="../../dist/app.css">
</head>

<body>

<!-- SVG -->
<?php include(__DIR__ . '/../../partials/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-auto d-flex align-items-center mb-3 mb-md-0">
                <h4 class="logo">
                    <a href="/">
                        <?= $preparation; ?>
                    </a>
                </h4>
                <ul class="languages-list">
                    <li>
                        <div class="select-languages">
                            <?= $locale; ?>
                            <svg width="9" height="5">
                                <use xlink:href="#shape-icon"></use>
                            </svg>
                        </div>
                        <ul>
                            <?php if ($locale === 'ua') : ?>
                                <li>
                                    <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ru']) ?>">
                                        ru
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($locale === 'ru') : ?>
                                <li>
                                    <a href="<?php echo url() . '?' . http_build_query(['hl' => 'ua']) ?>">
                                        ua
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-auto">
                <ul class="contacts-list contacts-list--flex">
                    <li class="contacts-item">
                        <?= $header['application']; ?>
                    </li>
                    <li class="contacts-item">
                        <a href="tel:+38<?= phone_link($phone_1); ?>" class="contacts-item__link">
                            <svg width="20" height="20">
                                <use xlink:href="#phone-icon"></use>
                            </svg>
                            <?= $phone_1; ?>
                        </a>
                    </li>
                    <li class="contacts-item">
                        <a href="tel:+38<?= phone_link($phone_2); ?>" class="contacts-item__link">
                            <svg width="20" height="20">
                                <use xlink:href="#phone-icon"></use>
                            </svg>
                            <?= $phone_2; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>