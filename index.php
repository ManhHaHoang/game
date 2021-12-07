<?php
    function config($key, $default = '') {
        $retval = $default;
        $file = __DIR__ . '/config.json';
        $fileContent = file_get_contents('./config.json');
        $config = json_decode($fileContent);
        if (isset($config->$key) && $config->$key !== "") {
            $retval = $config->$key;
        }
        return $retval;
    }
?>
<!DOCTYPE html>
<html lang="en" class="webp webp-alpha webp-animation webp-lossless skrollr skrollr-desktop">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Return to a farm bursting with life, and the old familiar feeling of a farmhouse home that’s all your own.">
        <link rel="shortcut icon" href="./images/favicon.ico">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@<?= config('sitename') ?>">
        <meta name="twitter:creator" content="<?= config('sitename') ?>">
        <meta name="twitter:title" content="<?= config('sitename') ?>">
        <meta name="twitter:description" content="Return to a farm bursting with life, and the old familiar feeling of a farmhouse home that’s all your own.">
        <meta name="twitter:image" content="./images/poster-art.jpg">
        <meta name="twitter:image:alt" content="9Code">
        <meta property="og:locale" content="en_us">
        <meta property="og:type" content="article">
        <meta property="og:title" content="9Code">
        <meta property="og:image" content="./images/poster-art.jpg">
        <meta property="og:description" content="Return to a farm bursting with life, and the old familiar feeling of a farmhouse home that’s all your own.">
        <script type="text/javascript" src="./style/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="./style/js/slider.js"></script>
        <script type="text/javascript" src="./style/js/script.js"></script>
        <link rel="stylesheet" href="./style/css/new.css">
        <link rel="stylesheet" href="./style/css/slick.css">
        <title><?= config('sitename') ?></title>
    </head>
    <body class="">
        <?php $menu = config('menu'); ?>
        <div class="fx-nav skrollable skrollable-after site-header">
            <div class="fx-logo skrollable skrollable-after">
                <img class="site-logo" alt="<?= config('sitename') ?>" src="/images/logo.png" height="80">
            </div>
            <div class="navigation">
                <ul class="navigation-list">
                    <?php if(count($menu) > 0): ?>
                        <?php foreach ($menu as $item):  ?>
                            <li class="navigation-item <?= ($item->active) ? 'active' : 'hidden' ?>">
                                <a class="navigation-link" href="<?= $item->url ?>" data-name="<?= $item->url ?>">
                                    <span><?= $item->name ?></span>
                                </a>
                                <?php if(isset($item->childs) && count($item->childs) > 0 ): ?>
                                    <div class="navigation-submenu">
                                        <?php foreach ($item->childs as $child):  ?>
                                            <a href="<?= $child->url ?>" class="navigation-link <?= ($child->active) ? 'active' : 'hidden' ?>" >
                                                <span><?= $child->name ?></span>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                        <li class="navigation-item close-menu">
                            <span class="navigation-link">
                                <span>Close</span>
                            </span>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="navigation-bg">
                </div>
            </div>
            <div class="fx-preregister">
                <a class="fx-register-btn" href="<?= config('playnow') ?>">
                    <img src="/images/playnow.svg" alt="<?= config('sitename') ?>" height="60">
                </a>
                <div class="nav-menu">
                    Menu
                </div>
            </div>
        </div>
        <div id="fx-header" class="fx-header">
            <div class="fx-keyart">
                <div class="fx-key-layer fx-background">
                    <div class="fx-key-image skrollable skrollable-after" data-0="transform:scale(1)translate(0,0vw)" data-500="transform:scale(1)translate(0,2vw)" ></div>
                </div>
                <div class="fx-key-layer fx-midground">
                    <div class="fx-key-image skrollable skrollable-after" data-0="transform:scale(1)translate(0,0vw)" data-500="transform:scale(1)translate(0,-13vw)"></div>
                </div>
                <div class="fx-key-layer fx-foreground">
                    <div class="fx-key-image skrollable skrollable-after" data-0="transform:scale(1)translate(0,10vw)" data-500="transform:scale(1)translate(0,-14vw)"></div>
                </div>
            </div>

            <div class="fx-video-overlay">
                <div class="fx-video-iframe fx-shadow" id="videoFrame">
                    <iframe src='https://www.youtube-nocookie.com/embed/KELeZObZy6M' frameborder='0' allowfullscreen='allowfullscreen'></iframe>
                </div>
            </div>
            <div class="fx-intro">
                <div class="fx-intro-device fx-feature-device">
                    <div class="fx-feature-frame"></div>
                    <span class="fx-watch-btn" id="watchGameplayTrailer">Watch Trailer</span>
                </div>
                <div class="fx-intro-cta">
                    <h1>Welcome Home!</h1>
                    <div class="fx-call-to-action"></div>
                    <div class="fx-call-to-action-text">Now available on iPhone, iPad, Mac M1 and Android</div>
                    <div class="action-badges">
                        <a class="native-badge" href="<?= config('pcurl') ?>" rel="noreferrer" target="_blank">
                            <img class="native-image" alt="AppStore" src="/images/windows.png">
                            <span class="native-txt">Download on the</span>
                            <span class="native-name">PC Store</span>
                        </a>
                        <a class="native-badge" href="<?= config('iosurl') ?>" rel="noreferrer" target="_blank">
                            <img class="native-image" alt="AppStore" src="/images/ios.png">
                            <span class="native-txt">Download on the</span>
                            <span class="native-name">App Store</span>
                        </a>
                        <a class="native-badge" href="<?= config('androidurl') ?>" rel="noreferrer" target="_blank">
                            <img class="native-image" alt="AppStore" src="/images/android.png">
                            <span class="native-txt">Download on the</span>
                            <span class="native-name">Google Play</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fx-table">
            <div class="fx-table-stack skrollable skrollable-after" data-400="transform: translate(0,-50%) scale(1.2); opacity: 0.8" data-600="transform: translate(0,0) scale(1); opacity: 1">
                <div class="fx-table-frame-holder skrollable skrollable-after" data-400="transform: translate(-2%,-42%) rotate(3deg)" data-800="transform: translate(-60%,-110%) rotate(-3deg)">
                    <div class="fx-table-frame fx-shadow"><img src="/images/table1.jpg"></div>
                </div>
                <div class="fx-table-frame-holder skrollable skrollable-after" data-400="transform: translate(2%,-42%) rotate(-3deg)" data-805="transform: translate(50%,-95%) rotate(3deg)">
                    <div class="fx-table-frame fx-shadow"><img src="/images/table5.jpg"></div>
                </div>
                <div class="fx-table-frame-holder skrollable skrollable-after" data-400="transform: translate(-2%,-42%) rotate(3deg)" data-810="transform: translate(-100%,0%) rotate(3deg)">
                    <div class="fx-table-frame fx-shadow"><img src="/images/table3.jpg"></div>
                </div>
                <div class="fx-table-frame-holder skrollable skrollable-after" data-400="transform: translate(2%,-42%) rotate(3deg);" data-800="transform: translate(100%,20%) rotate(-3deg)">
                    <div class="fx-table-frame fx-shadow"><img src="/images/table2.jpg"></div>
                </div>
                <div class="fx-table-frame-holder skrollable skrollable-after" data-400="transform: translate(2%,-42%) rotate(3deg);" data-805="transform: translate(-20%,115%) rotate(-3deg)">
                    <div class="fx-table-frame fx-shadow">
                        <span class="fx-watch-btn" id="watchTrailer">
                            Watch Trailer
                        </span>
                        <img src="/images/table4.jpg">
                    </div>
                </div>
            </div>
            <div class="fx-table-text">Return to a farm bursting with life, and the old familiar feeling of a farmhouse home that’s all your own.</div>
        </div>
        <div id="fx-features" class="fx-features">
            <h2>Game Features</h2>
            <div class="fx-feature-row">
                <div class="fx-feature-device skrollable skrollable-before" data-bottom="transform: rotate(6deg)" data-top="transform: rotate(0deg)">
                    <div class="fx-feature-frame"></div>
                    <div class="animals-slider">
                        <div class="slide-item">
                            <picture>
                                <source srcset="/images/animalscollectioneggbirds.webp" type="image/webp">
                                <source srcset="/images/animalscollectioneggbirds.jpeg" type="image/jpeg">
                                <img src="/images/animalscollectioneggbirds.jpeg">
                            </picture>
                        </div>
                        <div class="slide-item">
                            <picture>
                                <source srcset="/images/animalscollectionsheeps.webp" type="image/webp">
                                <source srcset="/images/animalscollectionsheeps.jpeg" type="image/jpeg">
                                <img src="/images/animalscollectionsheeps.jpeg">
                            </picture>
                        </div>
                        <div class="slide-item">
                            <picture>
                                <source srcset="/images/animalscollectionhorses.webp" type="image/webp">
                                <source srcset="/images/animalscollectionhorses.jpeg" type="image/jpeg">
                                <img src="/images/animalscollectionhorses.jpeg">
                            </picture>
                        </div>
                        <div class="slide-item">
                            <picture>
                                <source srcset="/images/animalscollectionpigs.webp" type="image/webp">
                                <source srcset="/images/animalscollectionpigs.jpeg" type="image/jpeg">
                                <img src="/images/animalscollectionpigs.jpeg">
                            </picture>
                        </div>
                        <div class="slide-item">
                            <picture>
                                <source srcset="/images/animalscollectionwoodlands.webp" type="image/webp">
                                <source srcset="/images/animalscollectionwoodlands.jpeg" type="image/jpeg">
                                <img src="/images/animalscollectionwoodlands.jpeg">
                            </picture>
                        </div>
                        <div class="slide-item">
                            <picture>
                                <source srcset="/images/animalscollectionexotics.webp" type="image/webp">
                                <source srcset="/images/animalscollectionexotics.jpeg" type="image/jpeg">
                                <img src="/images/animalscollectionexotics.jpeg">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="fx-feature-content">
                    <div class="fx-feature-text">
                        <h3>Animal Families</h3>
                        <p>Animals are the heart of every farm! On your farm, there are always amazing new animals just waiting to be discovered. As you breed, nurture and tend the baby animals, they’ll grow into new and exciting breeds. You can even unlock rare special breeds to breathe exotic life into your quaint farm!</p>
                        <div class="fx-feature-icons" id="animalDots"><img id="animal1" src="/images/fx_image_websiteiconeggbirds_v001_256x256_0_en.png"><img id="animal2" src="/images/fx_image_websiteiconsheep_v001_128x128_0_en.png"><img id="animal4" src="/images/fx_image_websiteiconpigs_v001_256x256_0_en.png"><img id="animal3" src="/images/fx_image_websiteiconhorses_v001_256x256_0_en.png"><img id="animal5" src="/images/fx_image_websiteiconwoodlandanimals_v001_256x256_0_en.png"><img id="animal6" src="/images/fx_image_websiteiconexoticanimals_v001_256x256_0_en.png"></div>
                    </div>
                </div>
            </div>
            <div class="fx-feature-row reverse">
                <div class="fx-feature-device fx-feature-farmhands skrollable skrollable-before" data-bottom="transform: rotate(6deg)" data-top="transform: rotate(0deg)">
                    <div class="fx-feature-frame"></div>
                    <div class="farmhands-slider">
                            <div class="slide-item">
                                <video autoplay="" class="fx-feature-video ratio16-9" loop="" muted="" plays-inline="">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/7339c13f928465d8385f17bbab38bbb1d8d3a337/db69b/assets/features/farmhands/cooking.webm" type="video/webm">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/8bae5948004e6b26b9074b1582a61734c76f692f/c453c/assets/features/farmhands/cooking.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="slide-item">
                                <video autoplay="" class="fx-feature-video ratio16-9" loop="" muted="" plays-inline="">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/389041a3b1e383ca0ec87c76080f09af87b26795/80227/assets/features/farmhands/crafting.webm" type="video/webm">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/f6f3fc42a6c5328c715dde77c150c503a821095b/8ea9e/assets/features/farmhands/crafting.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="slide-item">
                                <video autoplay="" class="fx-feature-video ratio16-9" loop="" muted="" plays-inline="">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/5222e9577caf6ab568c3e7bbe098115365f422ae/70278/assets/features/farmhands/fishing.webm" type="video/webm">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/4ca1e0665f59e74b719a194c428d118a56478400/24031/assets/features/farmhands/fishing.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="slide-item">
                                <video autoplay="" class="fx-feature-video ratio16-9" loop="" muted="" plays-inline="">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/ffdbcb8c8a3ebe2f7128883c9b83cda2363baa08/f597d/assets/features/farmhands/foresting.webm" type="video/webm">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/f4c74401a0e22c4c2b5ce6ca7e7c53340cc67576/e388b/assets/features/farmhands/foresting.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="slide-item">
                                <video autoplay="" class="fx-feature-video ratio16-9" loop="" muted="" plays-inline="">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/139e27484daad60002b7d0cd2dad46fdaf33723c/77ee6/assets/features/farmhands/feeding.webm" type="video/webm">
                                    <source src="https://d33wubrfki0l68.cloudfront.net/9de008eca0c6186861fe13452cd17cfaf9c0724a/f2b23/assets/features/farmhands/feeding.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                </div>
                <div class="fx-feature-content">
                    <div class="fx-feature-text">
                        <h3>Helping Hands</h3>
                        <p>As you play, you can hire and level up a number of Farmhands. Each farmhand has their own special skills, and they get more efficient as you level them up. Their unique personalities and quirks breathe life into your farm!</p>
                        <div class="fx-feature-icons"><img id="farmhand1" src="/images/fx_image_websiteiconbaking_v001_256x256_0_en.png"><img id="farmhand2" src="/images/fx_image_websiteiconcrafting_v001_256x256_0_en.png"><img id="farmhand3" src="/images/fx_image_websiteiconfishing_v001_256x256_0_en.png"><img id="farmhand4" src="/images/fx_image_websiteiconlumberjacking_v001_256x256_0_en.png"><img id="farmhand5" src="/images/fx_image_websiteiconnurturing_v001_256x256_0_en.png"></div>
                    </div>
                </div>
            </div>
            <div class="fx-feature-row">
                <div class="fx-feature-device skrollable skrollable-before" data-bottom="transform: rotate(6deg)" data-top="transform: rotate(0deg)">
                    <div class="fx-feature-frame"></div>
                    <video autoplay="" class="fx-feature-video ratio16-9 left" loop="" muted="" plays-inline="">
                        <source src="https://d33wubrfki0l68.cloudfront.net/bedc0d121dd1f15eb56b6a59190f09ec64a01d93/5ebb1/assets/features/weather/weather.webm" type="video/webm">
                        <source src="https://d33wubrfki0l68.cloudfront.net/6d5b6ed8ec6a656d96438f2b1e1a85c09721aa51/a61ee/assets/features/weather/weather.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="fx-feature-content">
                    <div class="fx-feature-text">
                        <h3>Rain or Shine</h3>
                        <p>While there are beautiful sunny days, rainy clouds and snowfalls do happen from time to time. Use the weather to your advantage to speed up your crops growth, or plan for your next fishing trip.</p>
                    </div>
                </div>
            </div>
            <div class="fx-feature-row reverse">
                <div class="fx-feature-device fx-feature-farmhands skrollable skrollable-before" data-bottom="transform: rotate(6deg)" data-top="transform: rotate(0deg)">
                    <div class="fx-feature-frame"></div>
                    <video autoplay="" class="fx-feature-video ratio16-9" loop="" muted="" plays-inline="">
                        <source src="https://d33wubrfki0l68.cloudfront.net/0748b77d346b7cab532723af2d55cdf0aae44400/782c1/assets/features/customization/farmville-customization.webm" type="video/webm">
                        <source src="https://d33wubrfki0l68.cloudfront.net/b812343ed1d76d78adbcdabf788d7f5b0aef869c/dec66/assets/features/customization/farmville-customization.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="fx-feature-content">
                    <div class="fx-feature-text">
                        <h3>All your Own</h3>
                        <p>Your farm is all your own! Choosing where and what to build, and transform your farm's look and feel with hundreds of decorations in order to make it truly unique! You can also choose from a variety of styles, and colors for each building, to ensure that your farm is one of a kind!</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="fx-characters" class="fx-characters">
            <h2>Meet the Cast</h2>
            <div class="characters-wrapper second-layer">
                <div class="characters-slider">
                    <div class="slider-item">
                        <div class="fx-character" id="katie">
                            <div class="fx-character-text">
                                <h3>Katie Cookie</h3>
                                <p>Katie is your farm's beloved baker, and a businesswoman in the making. She loves to experiment with exciting new recipes, and is always open to adventures.</p>
                            </div>
                            <div class="fx-character-image">
                                <picture>
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/e6d2561042651fbcc4199d0b3407b9fa6a8b088d/072db/assets/characters/katie.webp" type="image/webp">
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/07e8a3e13023d81d99106eabcce9080a26a9f3fd/baf71/assets/characters/katie.png" type="image/png">
                                    <img alt="Katie Cookie" src="/images/katie.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="fx-character" id="pauly">
                            <div class="fx-character-text">
                                <h3>Pauly Bee</h3>
                                <p>Shy man of few words, Pauly loves to spend time in nature and enjoys simple things, like the smell of freshly baked pie, and the pride of a job well done.</p>
                            </div>
                            <div class="fx-character-image">
                                <picture>
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/26fea8e18327f370cc06f7b4d626a3551aeea1d0/f698c/assets/characters/pauly.webp" type="image/webp">
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/ff3170703a655d493505bec3512586ba2ca37575/bbd04/assets/characters/pauly.png" type="image/png">
                                    <img alt="Pauly Bee" src="/images/pauly.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="fx-character" id="ami">
                            <div class="fx-character-text">
                                <h3>Ami Tornado</h3>
                                <p>Ami is a passionate meteorologist with an unfathomable love for cows. She publishes a new forecast everyday to help everyone plan their day!</p>
                            </div>
                            <div class="fx-character-image">
                                <picture>
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/fd94fd6ce900639eeb092f60272cae24e78c4963/0eb73/assets/characters/ami.webp" type="image/webp">
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/855b422f94d51ca78f2e786d0246e45421b14bc0/22f54/assets/characters/ami.png" type="image/png">
                                    <img alt="Ami Tornado" src="/images/ami.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="fx-character" id="">
                            <div class="fx-character-text">
                                <h3>Marie Merryweather</h3>
                                <p>Marie knows all you need to know about harvesting crops, caring for animals, and renovating barns, and she'll show you the ropes.</p>
                            </div>
                            <div class="fx-character-image">
                                <picture>
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/b2a04254fb2e198341a8c8ebd47c43f9409d6fa3/51a18/assets/characters/marie.webp" type="image/webp">
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/f0926fc1a13018b0d03ddadac7b64e740b19a568/d7d01/assets/characters/marie.png" type="image/png">
                                    <img alt="Marie Merryweather" src="/images/marie.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="fx-character" id="">
                            <div class="fx-character-text">
                                <h3>Chad Wood</h3>
                                <p>Chad is a professional lumberjack and an eager home-gardener with a kind soul. Whenever he cuts down a tree, he plants two of them.</p>
                            </div>
                            <div class="fx-character-image">
                                <picture>
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/9626b54744bd13d9cfdd5c33a311f6cebffa502d/1d498/assets/characters/chad.webp" type="image/webp">
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/47cabca81d75a14a369b4e5c75cd15238d0bf8b7/b9096/assets/characters/chad.png" type="image/png">
                                    <img alt="Chad Wood" src="/images/chad.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="fx-character" id="">
                            <div class="fx-character-text">
                                <h3>Jane Awesana</h3>
                                <p>Playful and quick-witted, Jane is a forest ranger in the world of FarmVille. She loves wildlife, nature and caring for exotic animals.</p>
                            </div>
                            <div class="fx-character-image">
                                <picture>
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/f6f08c0bbc8145a803074eabecbfdb53005f88a9/287d4/assets/characters/jane.webp" type="image/webp">
                                    <source srcset="https://d33wubrfki0l68.cloudfront.net/c7428f814c38e270f462b88a3245fd3fa2ffe8e2/0d9dc/assets/characters/jane.png" type="image/png">
                                    <img alt="Jane Awesana" src="/images/jane.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fx-roadmap" class="fx-roadmap">
            <h2>Roadmap</h2>
            <div class="fx-roadmap-row">
                <img src="/images/roadmap.png" alt="">
            </div>
        </div>
        <div class="fx-outro">
            <div class="fx-outro-cta">
                <h2><a href="https://zyngasupport.helpshift.com/hc/en/91-farmville-3/" target="_blank">Have a question? <span>Visit our Support Site!</span></a></h2>
            </div>
        </div>
        <div class="fx-footer">
            <div class="fx-footer-container">
                <?php $social = config('social'); ?>
                <div class="fx-footer-links fx-social-links">
                    <?php if(count($social) > 0): ?>
                        <?php foreach ($social as $item):  ?>
                            <a class="social-link" href="<?= $item->url ?>">
                                <img class="social-image" src="<?= $item->image ?>" alt="<?= $item->name ?>">
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="action-badges">
                    <a class="native-badge" href="<?= config('pcurl') ?>" rel="noreferrer" target="_blank">
                        <img class="native-image" alt="AppStore" src="/images/windows.png">
                        <span class="native-txt">Download on the</span>
                        <span class="native-name">PC Store</span>
                    </a>
                    <a class="native-badge" href="<?= config('iosurl') ?>" rel="noreferrer" target="_blank">
                        <img class="native-image" alt="AppStore" src="/images/ios.png">
                        <span class="native-txt">Download on the</span>
                        <span class="native-name">App Store</span>
                    </a>
                    <a class="native-badge" href="<?= config('androidurl') ?>" rel="noreferrer" target="_blank">
                        <img class="native-image" alt="AppStore" src="/images/android.png">
                        <span class="native-txt">Download on the</span>
                        <span class="native-name">Google Play</span>
                    </a>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="./style/js/theme.js"></script>
        <script>  if(!isMobile.any) {    skrollr.init({      forceHeight: false    });  }</script>
    </body>
</html>
