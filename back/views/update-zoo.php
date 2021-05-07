<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/admin/edit-user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 21:24:03 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/admin.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>

	<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="index.html" class="header__logo">
				<img src="img/logo.svg" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="index.html" class="sidebar__logo">
			<img src="img/logo.svg" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<p>John Doe</p>
			</div>

			<button class="sidebar__user-btn" type="button">
				<i class="icon ion-ios-log-out"></i>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="index.html" class="sidebar__nav-link"><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="catalog.html" class="sidebar__nav-link"><i class="icon ion-ios-film"></i> <span>Catalog</span></a>
				</li>

				<!-- collapse -->
				<li class="sidebar__nav-item">
					<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="true" aria-controls="collapseMenu"><i class="icon ion-ios-copy"></i> <span>Pages</span> <i class="icon ion-md-arrow-dropdown"></i></a>

					<ul class="collapse show sidebar__menu" id="collapseMenu">
                    <li><a href="add-item.html">Add zoo and park</a></li>
                        <li><a href="add-tourism.html">Add Eco tourism</a></li>
						<li><a  class="active" href="show-zoo.php">show zoo and park</a></li>
						<li><a href="show-tourism.php">show Eco tourism</a></li>
						<li><a href="signin.html">Sign in</a></li>
						<li><a href="signup.html">Sign up</a></li>
						<li><a href="forgot.html">Forgot password</a></li>
						<li><a href="404.html">404 page</a></li>
					</ul>
				</li>
				<!-- end collapse -->

				<li class="sidebar__nav-item">
					<a href="users.html" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Users</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="comments.html" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> <span>Comments</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="reviews.html" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="https://dmitryvolkov.me/demo/hotflix2.1/main/index.html" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to HotFlix</span></a>
				</li>
			</ul>
		</div>
		<!-- end sidebar nav -->
		
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© HOTFLIX, 2019—2021. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
		<!-- end sidebar copyright -->
	</div>
	<!-- end sidebar -->

	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Edit zoo and park</h2>
					</div>
				</div>
				<!-- end main title -->
				<!-- content tabs -->
				<?php
				include("updateforzoo.php") ; 
				
				?>
				<form name="f1" method="POST" action="updateforzoo.php" >
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
						<div class="col-12">
							<div class="row">
								<!-- details form -->
								<div class="col-12 col-lg-6">
									<form action="#" class="form form--profile">
										<div class="row row--form">
											<div class="col-12">
												<h4 class="form__title">Details</h4>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="id">identifiant</label>
													<input id="id" type="text" name="id" class="form__input" value="<?php echo $id; ?>">
												</div>
											</div>
											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="name">name</label>
													<input id="name" type="text" name="name" class="form__input" value="<?php echo $name; ?>" >
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="form__group">
													<label class="form__label" for="description">Description</label>
													<input id="description" type="text" name="description" class="form__textarea" value="<?php echo $description; ?>" >
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
											<div class="form__group">
													<label class="form__label" for="city">city</label>
                                                    <select class="js-example-basic" id="city" name="city">
													<option value="Tunis">Tunis</option>
											<option value="Ariana">Ariana</option>
											<option value="Ben Arous">Ben Arous</option>
											<option value="Mannouba">Mannouba</option>
											<option value="Bizerte">Bizerte</option>
											<option value="Nabeul">Nabeul</option>
											<option value="Béja">Béja</option>
											<option value="Jendouba">Jendouba</option>
											<option value="Zaghouan">Zaghouan</option>
											<option value="Siliana">Siliana</option>
											<option value="Le Kef">Le Kef</option>
											<option value="Sousse">Sousse</option>
											<option value="Monastir">Monastir</option>
											<option value="Mahdia">Mahdia</option>
											<option value="Kasserine">Kasserine</option>
											<option value="Sidi Bouzid">Sidi Bouzid</option>
											<option value="Kairouan">Kairouan</option>
											<option value="Gafsa">Gafsa</option>
											<option value="Sfax">Sfax</option>
											<option value="Gabès">Gabès</option>
											<option value="Médenine">Médenine</option>
											<option value="Tozeur">Tozeur</option>
											<option value="Kebili">Kebili</option>
											<option value="Ttataouine">Ttataouine</option>
                                            </select>
												</div>
											</div>
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
											<div class="form__group">
													<label class="form__label" for="type">type</label>
													<select class="js-example-basic" id="type" name="type">
									<option value="Zoo">Zoo</option>
									<option value="Park">Park</option>
								</select>
												</div>
											</div>

											

											<div class="col-12">
											<input class="form__btn" type="submit" value="Update" name="update">
												
											</div>
										</div>
									</form>
								</div>
								<!-- end details form -->
							</div>
						</div>	
					</div>

					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
						<!-- table -->
						<div class="col-12">
							<div class="main__table-wrap">
								<table class="main__table">
									<thead>
										<tr>
											<th>ID</th>
											<th>ITEM</th>
											<th>AUTHOR</th>
											<th>TEXT</th>
											<th>LIKE / DISLIKE</th>
											<th>CRAETED DATE</th>
											<th>ACTIONS</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>
												<div class="main__table-text">23</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">24</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">25</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">44 / 5</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">26</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">20 / 6</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">27</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">8 / 132</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">28</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">6 / 1</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">29</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">10 / 0</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">30</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">13 / 14</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">31</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">32</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- end table -->

						<!-- paginator -->
						<div class="col-12">
							<div class="paginator-wrap">
								<span>10 from 23</span>

								<ul class="paginator">
									<li class="paginator__item paginator__item--prev">
										<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
									</li>
									<li class="paginator__item"><a href="#">1</a></li>
									<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
									<li class="paginator__item"><a href="#">3</a></li>
									<li class="paginator__item"><a href="#">4</a></li>
									<li class="paginator__item paginator__item--next">
										<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- end paginator -->
					</div>

					<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
						<!-- table -->
						<div class="col-12">
							<div class="main__table-wrap">
								<table class="main__table">
									<thead>
										<tr>
											<th>ID</th>
											<th>ITEM</th>
											<th>AUTHOR</th>
											<th>TEXT</th>
											<th>RATING</th>
											<th>LIKE / DISLIKE</th>
											<th>CRAETED DATE</th>
											<th>ACTIONS</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>
												<div class="main__table-text">23</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.9</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">24</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 8.6</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">25</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 6.0</div>
											</td>
											<td>
												<div class="main__table-text">44 / 5</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">26</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 9.1</div>
											</td>
											<td>
												<div class="main__table-text">20 / 6</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">27</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 5.5</div>
											</td>
											<td>
												<div class="main__table-text">8 / 132</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">28</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.0</div>
											</td>
											<td>
												<div class="main__table-text">6 / 1</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">29</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Whitney</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 9.0</div>
											</td>
											<td>
												<div class="main__table-text">10 / 0</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">30</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Blindspotting</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 6.2</div>
											</td>
											<td>
												<div class="main__table-text">13 / 14</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">31</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">I Dream in Another Language</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.9</div>
											</td>
											<td>
												<div class="main__table-text">12 / 7</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="main__table-text">32</div>
											</td>
											<td>
												<div class="main__table-text"><a href="#">Benched</a></div>
											</td>
											<td>
												<div class="main__table-text">John Doe</div>
											</td>
											<td>
												<div class="main__table-text">Lorem Ipsum is simply dummy text...</div>
											</td>
											<td>
												<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 8.6</div>
											</td>
											<td>
												<div class="main__table-text">67 / 22</div>
											</td>
											<td>
												<div class="main__table-text">24 Oct 2021</div>
											</td>
											<td>
												<div class="main__table-btns">
													<a href="#modal-view2" class="main__table-btn main__table-btn--view open-modal">
														<i class="icon ion-ios-eye"></i>
													</a>
													<a href="#modal-delete2" class="main__table-btn main__table-btn--delete open-modal">
														<i class="icon ion-ios-trash"></i>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- end table -->

						<!-- paginator -->
						<div class="col-12">
							<div class="paginator-wrap">
								<span>10 from 32</span>

								<ul class="paginator">
									<li class="paginator__item paginator__item--prev">
										<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
									</li>
									<li class="paginator__item"><a href="#">1</a></li>
									<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
									<li class="paginator__item"><a href="#">3</a></li>
									<li class="paginator__item"><a href="#">4</a></li>
									<li class="paginator__item paginator__item--next">
										<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- end paginator -->
					</div>
				</div>
				<!-- end content tabs -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- modal view -->
	<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
		<div class="comments__autor">
			<img class="comments__avatar" src="img/user.svg" alt="">
			<span class="comments__name">John Doe</span>
			<span class="comments__time">30.08.2018, 17:53</span>
		</div>
		<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
		<div class="comments__actions">
			<div class="comments__rate">
				<span><i class="icon ion-md-thumbs-up"></i>12</span>

				<span>7<i class="icon ion-md-thumbs-down"></i></span>
			</div>
		</div>
	</div>
	<!-- end modal view -->

	<!-- modal delete -->
	<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Comment delete</h6>

		<p class="modal__text">Are you sure to permanently delete this comment?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->

	<!-- modal view -->
	<div id="modal-view2" class="zoom-anim-dialog mfp-hide modal modal--view">
		<div class="reviews__autor">
			<img class="reviews__avatar" src="img/user.svg" alt="">
			<span class="reviews__name">Best Marvel movie in my opinion</span>
			<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

			<span class="reviews__rating"><i class="icon ion-ios-star"></i>8.4</span>
		</div>
		<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
	</div>
	<!-- end modal view -->

	<!-- modal delete -->
	<div id="modal-delete2" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Review delete</h6>

		<p class="modal__text">Are you sure to permanently delete this review?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->

	<!-- modal status -->
	<div id="modal-status3" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Status change</h6>

		<p class="modal__text">Are you sure about immediately change status?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Apply</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal status -->

	<!-- modal delete -->
	<div id="modal-delete3" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">User delete</h6>

		<p class="modal__text">Are you sure to permanently delete this user?</p>

		<div class="modal__btns">
			<button class="modal__btn modal__btn--apply" type="button">Delete</button>
			<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
		</div>
	</div>
	<!-- end modal delete -->

	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>
</body>

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.1/admin/edit-user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 21:24:03 GMT -->
</html>