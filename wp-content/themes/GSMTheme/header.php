<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Gsm_Theme
 * @since Gsm Theme 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header site-navbar site-navbar-target">
		<div class="container site-header-container reset-padding">
			<nav class="site-navigation navbar navbar-expand-lg navbar-light">
				<a href="#" class="navbar-brand"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site-logo-white.png" class="site-logo"/></a>
				<div class="searchBar-mb d-block d-lg-none">

					<a class="search-form-trigger collapsed" data-toggle="collapse" href="#collapseSearchbox" role="button" aria-expanded="false" aria-controls="collapseExample">
						<i class="fa" aria-hidden="true"></i>
					</a>

				</div>
				<div class="main-nav collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">

						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-hover="dropdown" aria-expanded="false">
								Individual
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

								<li>
									<a href="#" class="drop-link">Recruter des talents</a>
									<ul class="drop-desc-list">

										<li>
											<a href="#"> Recruter des réparateurs/trices de produits nomades</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
								<li>
									<a href="#" class="drop-link">Formez vos équipes</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#"> Réparation et micro soudure Compétences transverses du secteur</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
								<li>
									<a href="#" class="drop-link">Certification niveau 4 (niveau bac)</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#"> VAE Parcours de formation</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
								<li>
									<a href="#" class="drop-link">Certification niveau 3 (bac + 2)</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#">VAE Parcours de formation</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-hover="dropdown" aria-expanded="false">
								Company
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<a href="#" class="drop-link">Recruter des talents</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#"> Recruter des réparateurs/trices de produits nomades</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
								<li>
									<a href="#" class="drop-link">Formez vos équipes</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#"> Réparation et micro soudure Compétences transverses du secteur</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
								<li>
									<a href="#" class="drop-link">Certification niveau 4 (niveau bac)</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#"> VAE Parcours de formation</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
								<li>
									<a href="#" class="drop-link">Certification niveau 3 (bac + 2)</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#">Certification niveau 3 (bac + 2)</a>
										</li>
									</ul>
									<hr class="drop-option-seperator" />
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-hover="dropdown" aria-expanded="false">
								Organization
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<a href="#" class="drop-link">Collaborate with GSM Master</a>
									<hr class="drop-option-seperator" />
								</li>
								<li>
									<a href="#" class="drop-link">Nos certifications</a>
									<ul class="drop-desc-list">
										<li>
											<a href="#"> Certification niveau 4</a>
										</li>
										<li>
											<a href="#"> Certification niveau 3</a>
										</li>
									</ul>

									<hr class="drop-option-seperator" />
								</li>
							</ul>
						</li>
					</ul>
					<form name="searchForm" class="search-form form-inline my-2 my-lg-0">
						<input name="search-for" class="search-for form-control mr-sm-0 rounded-0 border-right-0 gsm-border-individual" type="search" placeholder="What do you want to learn" aria-label="Search" />
																																 
						<button class="btn btn-search-gsm gsm-bg-individual border-0 rounded-0 my-sm-0" type="subuttonbmit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-feather-search.png" style="width: 16px ;height:16px" /></button>
					</form>
				</div>
			</nav>
		</div>
		<div id="collapseSearchbox" class="collapse">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12 offset-lg-2">
						<div class="site-search-form">
							<form action="/search" class="mb-0">
								<div class="input-group flex-nowrap">
									<div class="input-group-prepend">
										<span class="input-group-text collapseSearch-icon">
											<i class="fa" aria-hidden="true"></i>
										</span>
									</div>
									<input type="search" class="form-control site-search-text" placeholder="What do you want to learn" aria-label="Username" aria-describedby="addon-wrapping" />
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>