<?php

// PRODUCT FUNCTION
use App\Models\Product;
use App\Models\Category;

$product = new Product;
$data = $product->select('*')
    ->leftJoin('category', 'prod_cate_id', 'cate_id')
    ->limit('16')
    ->get();

// CATEGORY PRODUCT
$category = Category::all();

?>

<div class="home__5">
    <div class="d-lg-flex d-md-block">
        <div>
        </div>
        <div class="overflow-hidden" style="width: 100%;">
            <div>
                <div class="hero__5" style="margin-top: 50px;">
                    <div class="container">
                        <div class="row align-items-center justify-content-center gx-4">
                            <div class="col-lg-8 col-md-12">
                                <div class="swiper_games">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="hero__left slide_1">
                                                <div class="hero__wrap space-y-20">
                                                    <h2 class="hero__title">
                                                        Trade NFT and Virtual
                                                        In-game Items
                                                    </h2>
                                                    <p class="hero__text txt">Raroin among the
                                                        top six NFT platforms on
                                                        eips.ethereum.org, the DMarket
                                                        marketplace enables millions of gamers
                                                        and Esports fans</p>
                                                    <div>
                                                        <a class="btn btn-grad" href="Marketplace.html">
                                                            Create Account
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hero__left slide_2">
                                                <div class="hero__wrap space-y-20">
                                                    <h2 class="hero__title">
                                                        Discover digital art and collect NFTs
                                                    </h2>
                                                    <p class="hero__text txt">raroin is a shared
                                                        liquidity NFT market smart contract
                                                        which is used by multiple websites to
                                                        provide the users the best possible
                                                        experience.</p>
                                                    <div>
                                                        <a class="btn btn-grad" href="Marketplace.html">View
                                                            market</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="hero__left slide_3">
                                                <div class="hero__wrap space-y-20">
                                                    <h2 class="hero__title">
                                                        Pull market data from our digital asset
                                                        API
                                                    </h2>
                                                    <p class="hero__text txt"> raroin is a
                                                        shared
                                                        liquidity NFT market smart contract
                                                        which is used by multiple websites to
                                                        provide the users the best possible
                                                        experience</p>
                                                    <div>
                                                        <a class="btn btn-grad" href="Connect-wallet.html">Connect
                                                            wallet</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="box hero__right space-y-20">
                                    <h4>Offers</h4>
                                    <div class="cards space-y-15 position-relative">
                                        <div class="card__item seven mb-0">
                                            <div class="card_body space-x-10">
                                                <div class="d-flex space-x-10">
                                                    <div>
                                                        <a href="Item-details.html">
                                                            <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/1.png" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <span class="product__name txt_sm
			                                                            _bold">Clobber Axe</span>
                                                        <span class="offer txt_xs">-20%%</span>
                                                    </div>
                                                </div>
                                                <div class="space-x-3">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <span class="price txt_sm _bold">365
                                                        ETH</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__item seven mb-0">
                                            <div class="card_body space-x-10">
                                                <div class="d-flex space-x-10">
                                                    <div>
                                                        <a href="Item-details.html">
                                                            <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/2.png" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <span class="product__name txt_sm
			                                                            _bold">Clobber Axe</span>
                                                        <span class="offer txt_xs">-20%%</span>
                                                    </div>
                                                </div>
                                                <div class="space-x-3">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <span class="price txt_sm _bold">365
                                                        ETH</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__item seven mb-0">
                                            <div class="card_body space-x-10">
                                                <div class="d-flex space-x-10">
                                                    <div>
                                                        <a href="Item-details.html">
                                                            <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/3.png" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <span class="product__name txt_sm
			                                                            _bold">Clobber Axe</span>
                                                        <span class="offer txt_xs">-20%%</span>
                                                    </div>
                                                </div>
                                                <div class="space-x-3">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <span class="price txt_sm _bold">365
                                                        ETH</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__item seven mb-0">
                                            <div class="card_body space-x-10">
                                                <div class="d-flex space-x-10">
                                                    <div>
                                                        <a href="Item-details.html">
                                                            <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/4.png" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="">
                                                        <span class="product__name txt_sm
			                                                            _bold">Clobber Axe</span>
                                                        <span class="offer txt_xs">-20%%</span>
                                                    </div>
                                                </div>
                                                <div class="space-x-3">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <span class="price txt_sm _bold">365
                                                        ETH</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__games mt-80">
                    <div class="container">
                        <div class="space-y-30">
                            <div class="section_head">
                                <h2 class="section__title">Games</h2>
                            </div>
                            <div class="section_body swiper_games2">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper position-relative">
                                    <div class="swiper-slide">
                                        <a class="box card__games game_1" href="#">
                                            <img class="logo" src="<?= base_url ?>assets/template-2/assets/img/logos/game_1.svg">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="box card__games game_2" href="#">
                                            <img class="logo" src="<?= base_url ?>assets/template-2/assets/img/logos/game_2.svg">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="box card__games game_3" href="#">
                                            <img class="logo" src="<?= base_url ?>assets/template-2/assets/img/logos/game_3.svg">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="box card__games game_4" href="#">
                                            <img class="logo" src="<?= base_url ?>assets/template-2/assets/img/logos/game_4.svg">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="box card__games game_5" href="#">
                                            <img class="logo" src="<?= base_url ?>assets/template-2/assets/img/logos/game_5.svg">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="box card__games game_6" href="#">
                                            <img class="logo" src="<?= base_url ?>assets/template-2/assets/img/logos/game_6.svg">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a class="box card__games game_7" href="#">
                                            <img class="logo" src="<?= base_url ?>assets/template-2/assets/img/logos/game_7.svg">
                                        </a>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__deals mt-80">

                    <div class="container">
                        <div class="space-y-30">
                            <div class="section_head">
                                <h2 class="section__title">Best CS:GO Deals</h2>
                            </div>
                            <div class="swiper_deals">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper position-relative">
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">1/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/21.png" alt="">
                                                    </a>
                                                    <div>
                                                        <p class="txt_xs level">Level 3 </p>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width:
			                                                                70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Rings Smasher</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">365
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">2/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/22.png" alt="">
                                                    </a>
                                                    <div>
                                                        <p class="txt_xs level">Level 3 </p>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width:
			                                                                70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Fright Clubs</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">524
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">3/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/23.png" alt="">
                                                    </a>
                                                    <div>
                                                        <p class="txt_xs level">Level 3 </p>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width:
			                                                                70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Metal Scythe</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">935
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">4/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/24.png" alt="">
                                                    </a>
                                                    <div>
                                                        <p class="txt_xs level">Level 3 </p>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width:
			                                                                70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Daydream</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">235
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">5/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/25.png" alt="">
                                                    </a>
                                                    <div>
                                                        <p class="txt_xs level">Level 3 </p>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width:
			                                                                70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Fright Clubs</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">365
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">6/6&quot;</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/26.png" alt="">
                                                    </a>
                                                    <div>
                                                        <p class="txt_xs level">Level 3 </p>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width:
			                                                                70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Hot Dogger</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">122
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__deals mt-80">

                    <div class="container">
                        <div class="space-y-30">
                            <div class="section_head">
                                <h2 class="section__title">Best TF2 Deals</h2>
                            </div>
                            <div class="swiper_deals">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper position-relative">
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">1/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/27.png" alt="">
                                                    </a>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between space-x-20">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Baba Yoga</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">665
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">2/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/28.png" alt="">
                                                    </a>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between space-x-20">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Paul Atreides</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">424
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">3/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/29.png" alt="">
                                                    </a>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between space-x-20">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Ravina</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">935
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">4/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/30.png" alt="">
                                                    </a>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between space-x-20">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Jil valentine</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">235
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">5/6</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/31.png" alt="">
                                                    </a>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between space-x-20">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">Potassius</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">265
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card__item eight">
                                            <div class="card_body space-y-10">
                                                <!-- =============== -->
                                                <div class="card_head space-y-10">
                                                    <span class="txt_xs color_text
			                                                            numbering">6/6&quot;</span>
                                                    <a href="Item-details.html">
                                                        <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/32.png" alt="">
                                                    </a>
                                                </div>
                                                <!-- =============== -->
                                                <div class="card_footer
			                                                        justify-content-between space-x-20">
                                                    <div class="space-y-3">
                                                        <div class="space-x-5 d-flex">
                                                            <i class="ri-star-fill
			                                                                    color_brand txt_xs"></i>
                                                            <span class="color_brand
			                                                                    txt_xs">Karambit</span>
                                                        </div>
                                                        <a href="Profile.html">
                                                            <p class="product__name txt_sm">The Batman</p>
                                                        </a>
                                                    </div>
                                                    <div class="price__content space-x-5">
                                                        <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                        <p class="price txt_sm _bold">132
                                                            ETH</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__shop mt-80">
                    <div class="container">
                        <div class="space-y-30">
                            <div class="section_head space-y-20">
                                <div class="d-flex space-x-30">
                                    <h2 class="section__title">Shop</h2>
                                    <div class="dropdown">
                                        <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Life Beyond
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Combat Evolved</a>
                                            <a class="dropdown-item" href="#">Super Mario</a>
                                            <a class="dropdown-item" href="#">Grand Theft
                                                Auto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-30_reset">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>12x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">1/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/33.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Sanctum</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">665
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>10x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">2/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/34.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Black Violet</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">424
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>16x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">3/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/35.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Wings</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">935
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>15x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">4/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/36.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Witheout</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">235
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>10x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">5/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/37.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Jett</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">265
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>13x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">6/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/38.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Spooky</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">132
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>12x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">7/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/39.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Raven</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">132
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                    <div class="card__item eight">
                                        <span class="txt_xs color_text stars"><i class="ri-star-fill txt_xs"></i>14x</span>
                                        <div class="card_body space-y-10">
                                            <!-- =============== -->
                                            <div class="card_head space-y-10">
                                                <span class="txt_xs color_text numbering">8/8</span>
                                                <a href="Item-details.html">
                                                    <img class="product__img" src="<?= base_url ?>assets/template-2/assets/img/bg/home5/40.png" alt="">
                                                </a>
                                            </div>
                                            <!-- =============== -->
                                            <div class="card_footer justify-content-between
			                                                    space-x-20">
                                                <div class="space-y-3">
                                                    <div class="space-x-5 d-flex">
                                                        <i class="ri-star-fill color_brand
			                                                                txt_xs"></i>
                                                        <span class="color_brand txt_xs">Karambit</span>
                                                    </div>
                                                    <a href="Profile.html">
                                                        <p class="product__name txt_sm">Monks</p>
                                                    </a>
                                                </div>
                                                <div class="price__content space-x-5">
                                                    <img class="eth__img" src="<?= base_url ?>assets/template-2/assets/img/icons/ETH-2.svg" alt="eth">
                                                    <p class="price txt_sm _bold">132
                                                        ETH</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>