<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nenomia</title>
	<link rel="stylesheet" href="css/uikit.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css" />
	<script defer src="/js/all.js"></script>
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<br />
	<div class="uk-section uk-padding-remove">
		<div class="uk-container uk-container-small">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="/">
					<img src="/img/logo.png" alt="Nenomia" width="200">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Latest</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Featured</a>
						</li>
					</ul>
					<div class="form-inline my-2 my-lg-0">
						<a class="uk-navbar-toggle" href="#" uk-search-icon></a>
						<div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

							<div class="uk-grid-small uk-flex-middle" uk-grid>
								<div class="uk-width-expand">
									<form class="uk-search uk-search-navbar uk-width-1-1">
										<input class="uk-search-input" type="search" placeholder="Search..." autofocus>
									</form>
								</div>
								<div class="uk-width-auto">
									<a class="uk-navbar-dropdown-close" href="#" uk-close></a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<div class="uk-section uk-section-small">
		<div class="uk-container uk-container-small">
			<div uk-grid>
				<div class="uk-width-1-1 uk-width-1-4@s uk-width-1-5@m">
					<div class="filter-button-group uk-text-right">
						<h5 class="neno-filter" data-filter="*">All</h5>
						<h5 class="neno-filter" data-filter=".tag-timelines">Timelines</h5>
						<h5 class="neno-filter" data-filter=".tag-keyplayers">Key Players</h5>
					</div>
					<div class="info-box">
					    This will be the Nenomia info box
					</div>
				</div>

				<div class="uk-width-1-1 uk-width-3-4@s uk-width-4-5@m">
					<div class="js-filter grid uk-text-center">
						<div class="grid-sizer"></div>
						<div class="gutter-sizer"></div>
						<div class="grid-item tag-timelines" data-category="tag-timelines">
							<div href="#" class="neno-card">
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="https://images.unsplash.com/photo-1559302995-ab792ee16ce8?ixlib=rb-1.2.1&auto=format&fit=crop&w=614&q=80" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consecteturconsectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-keyplayers" data-category="tag-keyplayers">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur, sed do eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-timelines" data-category="tag-timelines">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="https://images.unsplash.com/photo-1559257153-ab1781ff8d94?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod consectetur consectetur consectetur tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-timelines" data-category="tag-timelines">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="https://images.unsplash.com/photo-1559255394-044328bfa8b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=635&q=80" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor consectetur consectetur incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-keyplayers" data-category="tag-keyplayers">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="https://images.unsplash.com/photo-1559250543-36c18ccff71d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-black">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="https://images.unsplash.com/photo-1559255394-d92ddc3250e5?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do consectetur eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-keyplayers" data-category="tag-keyplayers">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="https://images.unsplash.com/photo-1559251606-c623743a6d76?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur sed do eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-timelines" data-category="tag-timelines">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do consectetur consectetur eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-keyplayers" data-category="tag-keyplayers">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing consectetur consectetur elit, sed do eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
						<div class="grid-item tag-black">
							<div>
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top">
										<img src="" alt="Loading..." onerror="this.src='/img/noimage.png';" />
									</div>
									<div class="uk-card-body">
										<h3 class="uk-card-title">Media Top</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur, sed do eiusmod tempor incididunt.</p>
										<a href="#" class="neno-link"><i class="fas fa-outdent"></i> The Placeholder Timeline</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- Main container -->
	</div> <!-- Main section -->

	<footer>
		<div class="uk-container">
			<p class="uk-text-center">
				<!-- Made with <i class="fas fa-heart"></i> -->
				<br />
				<?php echo 'Nenomia &copy; '.date('Y');?>
			</p>
		</div>
	</footer>

	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>
