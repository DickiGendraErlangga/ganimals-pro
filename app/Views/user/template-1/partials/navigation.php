<?php

use App\Core\Model;

$model = new Model;
$menu = $model->select('*')
	->from('role_menu a')
	->join('menu b', 'a.role_menu_id', 'b.menu_id')
	->join('level c', 'a.role_lev_id', 'c.lev_id')
	->where('b.menu_menu_id', 0)
	->and('b.menu_status = 1')
	->and("c.lev_name = 'Customer'")
	->orderBy('b.menu_index', 'ASC')
	->get();

?>
<header class="header__1 js-header" id="header">
	<div class="container">
		<div class="wrapper js-header-wrapper ml-20">
			<div class="header__logo">
				<a href="<?= base_url() ?>">
					<img class="header__logo" id="logo_js" src="<?= base_url() ?>assets/template-2/assets/img/logos/logos-ganimals.png" alt="<?= $website['web_name'] ?>" />
				</a>
			</div>

			<!-- ==================  -->
			<div class="header__menu">
				<ul class="d-flex space-x-20">
					<li>
						<a class="color_black" href="<?= base_url() ?>user/home"> Home</a>
					</li>
					<li>
						<a class="color_black" href="<?= base_url() ?>user/page/product"> Product</a>
					</li>
					<li>
						<a class="color_black" href="<?= base_url() ?>user/page/blog"> Blog</a>
					</li>
					<li>
						<a class="color_black" href="<?= base_url() ?>user/page/mitra"> Mitra</a>
					</li>
					<li>
						<a class="color_black" href="<?= base_url() ?>user/page/contact"> Contact </a>
					</li>
				</ul>
			</div>
			<!-- ================= -->
			<div class="header__search">
				<input type="text" placeholder="Search">
				<button class="header__result">
					<i class="ri-search-line"></i>
				</button>
			</div>
			<div class="d-flex align-items-center space-x-15">
				<?php if (isset($_SESSION['status'])) : ?>
					<div class="header__notifications">
						<div class="js-notifications-icon">
							<i class="ri-shopping-cart-2-line"></i>
						</div>
						<div class="notifications_popup space-y-20">
							<div class="d-flex justify-content-between">
								<h5>Shopping Cart</h5>
								<a href="<?= base_url() ?>cart" class="badge color_white">View all</a>
							</div>
							<div class="item
										space-x-20
										d-flex
										justify-content-between
										align-items-center">
								<img class="thumb" src="<?= base_url() ?>assets/template-2/assets/img/notifications/1.png" alt="...">
								<div class="details">
									<a href="activity.html">
										<h6>Anglo Cow</h6>
									</a>
									<p>Rp. 20.000.000</p>
								</div>
							</div>
						</div>
					</div>
				<?php elseif (!isset($_SESSION['status'])) : ?>
					<div class="header__btns">
						<a class="btn btn-grad btn-sm" href="<?= base_url() ?>auth" style="background: white; color: rgb(3,172,14);cursor: pointer;border: 1px solid rgb(3,172,14)!important;">
							Sign-In
						</a>
						<a class="btn btn-grad btn-sm" href="<?= base_url() ?>auth/register" style="background: rgb(3,172,14);cursor: pointer;color: white;">
							Register
						</a>
					<?php else : ?>
						<a href="#" id="connectbtn">
							<img width="45" src="<?= base_url() ?>assets/template-2/assets/img/icons/metamask.svg" alt="">
						</a>
					<?php endif ?>
					</div>
					<div class="header__burger js-header-burger"></div>
			</div>
			<div class="header__mobile js-header-mobile">
				<div class="header__mobile__menu space-y-40">
					<ul class="d-flex space-y-20">
						<li> <a class="color_black" href="<?= base_url() ?>home"> Home</a> </li>
						<li> <a class="color_black" href="<?= base_url() ?>product"> Product</a> </li>
						<li> <a class="color_black" href="<?= base_url() ?>blog"> Blog</a> </li>
						<li> <a class="color_black" href="<?= base_url() ?>mitra"> Mitra</a> </li>
						<li> <a class="color_black" href="<?= base_url() ?>contact"> Contact</a> </li>
					</ul>
					<div class="space-y-20">
						<div class="header__search in_mobile w-full">
							<input type="text" placeholder="Search" />
							<button class="header__result">
								<i class="ri-search-line"></i>
							</button>
						</div>
						<a class="btn btn-grad btn-sm" href="<?= base_url() ?>login" style="background: white; color: rgb(3,172,14);cursor: pointer;border: 1px solid rgb(3,172,14)!important; width: 50%;">
							Login
						</a>
						<a class="btn btn-grad btn-sm" href="<?= base_url() ?>register" style="background: rgb(3,172,14);cursor: pointer;color: white; width: 50%;">
							Register
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>