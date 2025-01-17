<?php

// PRODUCT FUNCTION
use App\Models\Product;
use App\Models\Category;
use App\Liblaries\Pagination;

// PRODUCT MODEL
$product = new Product;

// NUMBER PAGINATION
if (isset($page_now)) {
    $page_now = $page_now;
} else {
    $page_now = 1;
}

// PAGINATION
$no_of_record = 16;
$offset = ((int)$page_now - 1) * (int)$no_of_record;

// ALL DATA PRODUCT
$data_all = $product->all();
$data_all = $data_all->num_rows;

// DATA PAGINATE
$data = $product->select('*')
    ->leftJoin('category', 'prod_cate_id', 'cate_id')
    ->paginate($offset, $no_of_record)
    ->get();


// CATEGORY PRODUCT
$category = Category::all();


// CREATE PAGINATION
$pagination = Pagination::create_link($data_all, 16, [
    'href' => base_url . 'user/product/list/paginate',
    'page_now' => $page_now,
    'ul_class' => 'pagination justify-content-center',
    'li_class' => 'page-item',
    'anchor_class' => 'page-link',
]);

?>

<div class="hero_marketplace bg_white">
    <div class="container">
        <h1 class="text-center">Produk Hewan Hewan Terbaik</h1>
    </div>
</div>
<div class="container">
    <div class="section mt-100">
        <div class="section__head">
            <h2 class="section__title mb-20">Hewan Bersertifikat Sehat</h2>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-auto">
                    <div class="d-flex align-items-center">
                        <span class="color_text txt_sm d-none d-sm-block mr-10" style="min-width:
			                            max-content">
                            FILTER BY:
                        </span>
                        <ul class="menu_categories">
                            <li class="d-flex switch_item">

                                <input type="checkbox" id="switch1" /><label for="switch1">Toggle</label>
                                <span class="ml-10"> Has list price </span>
                            </li>
                            <li class="d-flex switch_item">

                                <input type="checkbox" id="switch2" checked /><label for="switch2">Toggle</label>
                                <span class="ml-10"> Has open offer </span>
                            </li>
                            <li class="d-flex switch_item">

                                <input type="checkbox" id="switch3" /><label for="switch3">Toggle</label>
                                <span class="ml-10"> Owned by creator </span>
                            </li>
                            <li class="d-flex switch_item">

                                <input type="checkbox" id="switch4" /><label for="switch4">Toggle</label>
                                <span class="ml-10"> Has sold </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="d-flex space-x-10 align-items-center sm:mt-20">
                        <span class="color_text txt_sm"> SORT BY: </span>
                        <div class="dropdown">
                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Recent Active
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else
                                    here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body space-y-20 p-40">
                        <h3 class="text-center">Your Bidding
                            Successfuly Added</h3>
                        <p class="text-center">your bid <span class="color_text txt
			                                _bold">(16ETH) </span> has been listing
                            to our database</p>

                        <a href="#" class="btn btn-dark w-full"> Watch the listings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body space-y-20 p-40">
                        <h3>Place a Bid</h3>
                        <p>You must bid at least <span class="color_black">15 ETH</span>
                        </p>
                        <input type="text" class="form-control" placeholder="00.00 ETH">

                        <p>Enter quantity. <span class="color_green">5 available</span>
                        </p>
                        <input type="text" class="form-control" value="1">
                        <div class="hr"></div>
                        <div class="d-flex justify-content-between">
                            <p> You must bid at least:</p>
                            <p class="text-right color_black txt _bold"> 67,000 ETH </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p> service free:</p>
                            <p class="text-right color_black txt _bold"> 0,901 ETH </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p> Total bid amount:</p>
                            <p class="text-right color_black txt _bold"> 56,031 ETH </p>
                        </div>
                        <a href="#" class="btn btn-primary w-full" data-toggle="modal" data-target="#popup_bid_success" data-dismiss="modal" aria-label="Close"> Place a bid</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade popup" id="popup_history" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body space-y-20 p-40">
                        <h4> History </h4>
                        <div class="creator_item creator_card space-x-10">
                            <div class="avatars space-x-10">
                                <div class="media">
                                    <div class="badge">
                                        <img src="<?= base_url() ?>assets/template-2/assets/img/icons/Badge.svg" alt="">
                                    </div>
                                    <a href="#">
                                        <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_1.png" alt="Avatar" class="avatar avatar-md">
                                    </a>
                                </div>
                                <div>
                                    <p class="color_black">Bid accepted <span class="color_brand">1
                                            ETH</span> by <a class="color_black txt
			        									_bold" href="#">ayoub</a></p>
                                    <span class="date color_text">28/06/2021, 12:08</span>
                                </div>
                            </div>
                        </div>
                        <div class="creator_item creator_card space-x-10">
                            <div class="avatars space-x-10">
                                <div class="media">
                                    <div class="badge">
                                        <img src="<?= base_url() ?>assets/template-2/assets/img/icons/Badge.svg" alt="">
                                    </div>
                                    <a href="#">
                                        <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_2.png" alt="Avatar" class="avatar avatar-md">
                                    </a>
                                </div>
                                <div>
                                    <p class="color_black">Bid accepted <span class="color_brand">3
                                            ETH</span> by <a class="color_black txt
			        									_bold" href="#">monir</a></p>
                                    <span class="date color_text">22/05/2021, 12:08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-30_reset">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_1.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@mickel_fenn</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_2.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@danil_pannini</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_1.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">1.2k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            Colorful Abstract Painting
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 4 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">2.45 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_3.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@mazanov_sky</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_4.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@mucky_fennouni</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_2.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">13.2k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            The girl with the firefly
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 12 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">2.55 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_5.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@jimmy_dom</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_6.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@kristian_sefroui</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_3.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">1.2k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            Dodo hide the seek
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 6 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">2.45 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_1.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@Alvin_nov</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_7.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@mucky_holiman</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_4.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">4.1k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            Liquid Forest Princess
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 34 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">0.55 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_8.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@stivan_rominok</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_9.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@danil_pan</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_5.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">6.4k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            Spider Eyes Modern Art
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 7 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">1.45 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_10.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@mazanov_sky</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_11.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@mucky_art</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_6.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">13.2k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            Synthwave Painting
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 2 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">0.055 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_12.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@jimmy_dom</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_5.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@kristian_fel</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_7.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">1.6k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            Contemporary Abstract
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 34 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">0.95 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card__item four">
                    <div class="card_body space-y-10">
                        <!-- =============== -->
                        <div class="creators space-x-10">
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_13.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@Alvin_nov</p>
                                </a>
                            </div>
                            <div class="avatars space-x-3">
                                <a href="#">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_14.png" alt="Avatar" class="avatar avatar-sm">
                                </a>
                                <a href="#">
                                    <p class="avatars_name txt_xs">@mucky_art</p>
                                </a>
                            </div>
                        </div>
                        <div class="card_head">
                            <a href="<?= base_url() ?>product/detail?slug=Fish">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_8.png" alt="">
                            </a>

                            <a href="#" class="likes space-x-3">
                                <i class="ri-heart-3-fill"></i>
                                <span class="txt_sm">11.5k</span>
                            </a>
                        </div>
                        <!-- =============== -->
                        <h6 class="card_title">
                            Valkyrie Abstract Art
                        </h6>
                        <div class="card_footer d-block space-y-10">
                            <div class="card_footer justify-content-between">
                                <div class="creators">
                                    <p class="txt_sm"> 9 in stock</p>
                                </div>
                                <a href="#" class="">
                                    <p class="txt_sm">Price: <span class="color_green
			        									txt_sm">3.55 ETH</span></p>
                                </a>
                            </div>
                            <div class="hr"></div>
                            <div class="d-flex align-items-center space-x-10
			        						justify-content-between">
                                <div class="d-flex align-items-center
			        							space-x-10">
                                    <i class="ri-history-line"></i>
                                    <a class="view_history" href="#" data-toggle="modal" data-target="#popup_history">
                                        <p class="color_text txt_sm" style="width:
			        									auto;">View
                                            History</p>
                                    </a>
                                </div>
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#popup_bid">Place
                                    Bid</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section mt-100">
        <div class="section__head">
            <h2 class="section__title mb-20"> Collections</h2>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-auto">
                    <div class="d-flex align-items-center">
                        <span class="color_text txt_sm d-none d-sm-block mr-10" style="min-width:
			                            max-content">
                            FILTER BY:
                        </span>
                        <ul class="menu_categories">
                            <li class="d-flex space-x-10 switch_item">
                                <input type="checkbox" id="switch7" /><label for="switch7" class="ml-0">Toggle</label>
                                <span> Has list price </span>
                            </li>
                            <li class="d-flex space-x-10 switch_item">
                                <input type="checkbox" id="switch8" checked /><label for="switch8" class="ml-0">Toggle</label>
                                <span> Has open offer </span>
                            </li>
                            <li class="d-flex space-x-10 switch_item">
                                <input type="checkbox" id="switch9" /><label for="switch9" class="ml-0">Toggle</label>
                                <span> Owned by creator </span>
                            </li>
                            <li class="d-flex space-x-10 switch_item">
                                <input type="checkbox" id="switch10" /><label for="switch10" class="ml-0">Toggle</label>
                                <span> Has sold </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="d-flex space-x-10 align-items-center sm:mt-20">
                        <span class="color_text txt_sm"> SORT BY: </span>
                        <div class="dropdown">
                            <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Recent Active
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else
                                    here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-30_reset">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="collections space-y-10 mb-30">
                    <a href="<?= base_url() ?>blank-404">
                        <div class="collections_item">
                            <div class="images-box space-y-10">
                                <div class="top_imgs">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_9.png" alt="">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_10.png" alt="">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_11.png" alt="">
                                </div>
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_12.png" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="collections_footer justify-content-between">
                        <h5 class="collection_title"><a href="#">Creative Art collection</a></h5>
                        <a href="#" class="likes space-x-3">
                            <i class="ri-heart-3-fill"></i>
                            <span class="txt_md">2.1k</span>
                        </a>
                    </div>
                    <div class="creators space-x-10">
                        <span class="color_text txt_md"> 5 items · Created by</span>
                        <div class="avatars space-x-5">
                            <a href="#">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_2.png" alt="Avatar" class="avatar avatar-sm">
                            </a>
                        </div>
                        <a href="#">
                            <p class="avatars_name txt_sm"> @william_jamy... </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="collections space-y-10 mb-30">
                    <a href="<?= base_url() ?>blank-404">
                        <div class="collections_item">
                            <div class="images-box space-y-10">
                                <div class="top_imgs">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_13.png" alt="">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_14.png" alt="">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_15.png" alt="">
                                </div>
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_16.png" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="collections_footer justify-content-between">
                        <h5 class="collection_title"><a href="#">Colorful Abstract Painting</a></h5>
                        <a href="#" class="likes space-x-3">
                            <i class="ri-heart-3-fill"></i>
                            <span class="txt_md">3.5k</span>
                        </a>
                    </div>
                    <div class="creators space-x-10">
                        <span class="color_text txt_md"> 7 items · Created by</span>
                        <div class="avatars space-x-5">
                            <a href="#">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_3.png" alt="Avatar" class="avatar avatar-sm">
                            </a>
                        </div>
                        <a href="#">
                            <p class="avatars_name txt_sm"> @alexis_fenn... </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="collections space-y-10 mb-30">
                    <a href="<?= base_url() ?>blank-404">
                        <div class="collections_item">
                            <div class="images-box space-y-10">
                                <div class="top_imgs">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_17.png" alt="">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_18.png" alt="">
                                    <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_19.png" alt="">
                                </div>
                                <img src="<?= base_url() ?>assets/template-2/assets/img/items/item_20.png" alt="">
                            </div>
                        </div>
                    </a>
                    <div class="collections_footer justify-content-between">
                        <h5 class="collection_title"><a href="#">Modern Art collection</a></h5>
                        <a href="#" class="likes space-x-3">
                            <i class="ri-heart-3-fill"></i>
                            <span class="txt_md">7.2k</span>
                        </a>
                    </div>
                    <div class="creators space-x-10">
                        <span class="color_text txt_md"> 2 items · Created by</span>
                        <div class="avatars space-x-5">
                            <a href="#">
                                <img src="<?= base_url() ?>assets/template-2/assets/img/avatars/avatar_1.png" alt="Avatar" class="avatar avatar-sm">
                            </a>
                        </div>
                        <a href="#">
                            <p class="avatars_name txt_sm"> @Joshua_Bren... </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>