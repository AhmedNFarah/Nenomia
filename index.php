<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ebru</title>
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

	<div class="uk-section uk-section-small">
		<div class="uk-container uk-container-small">

			<nav>
		  <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
				<a class="nav-item mr-auto" href="/" style="padding: 0 5px 5px;">
					<img src="/img/logo.png" alt="Ebru TV" width="150">
				</a>
		    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-home"></i> Latest Heat</a>
		    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-fire"></i> Hottest of All Time</a>
				<a class="nav-item nav-link" id="nav-user-tab" data-toggle="tab" href="#nav-user" role="tab" aria-controls="nav-user" aria-selected="false"><i class="fas fa-user"></i> John Smith</a>
				<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-cog"></i> Settings</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				<br/>
			<div uk-grid>
				<div class="uk-width-1-1 uk-width-1-4@s uk-width-1-5@m">
					<div class="filter-button-group uk-text-right">
						<h5 class="neno-filter" data-filter="*">All</h5>
						<h5 class="neno-filter" data-filter=".tag-timelines">News</h5>
						<h5 class="neno-filter" data-filter=".tag-keyplayers">Celebs</h5>
						<h5 class="neno-filter" data-filter=".tag-keyplayers">Pictures</h5>
						<h5 class="neno-filter" data-filter=".tag-keyplayers">Videos</h5>
						<h5 class="neno-filter" data-filter=".tag-keyplayers">TV</h5>
						<h5 class="neno-filter" data-filter=".tag-keyplayers">Food</h5>
						<h5 class="neno-filter" data-filter=".tag-keyplayers">Fashion</h5>
					</div>
				</div>

				<div class="uk-width-1-1 uk-width-3-4@s uk-width-4-5@m">
					<div class="js-filter grid uk-text-center">
						<div class="grid-sizer"></div>
						<div class="gutter-sizer"></div>

						<div class="grid-item tag-timelines" data-category="tag-news">
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

					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><h1 class="display-4">Top Posts of All Time Page</h1>
</div>
		<div class="tab-pane fade" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab"><h1 class="display-4">Profile Page</h1>
</div>
		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><h1 class="display-4">Settings Page</h1>
</div>
		</div>



		</div> <!-- Main container -->
	</div> <!-- Main section -->

	<footer>
		<div class="uk-container">
			<p class="uk-text-center">
				Ebru &copy;2019
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
