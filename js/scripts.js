(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			quickSearch();
			runMeetTheTeam();

			/// specific for homepage
			if ($(b).hasClass('home')) {
				runProperty();
			}

			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}
		onScrollFixed = () => {

			this.onScrollFixed = () => {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('header-float');
						}
						else {
							$header.removeClass('header-float');
						}
					}
					else {
						$header.removeClass('header-float');
					}

				});
			}
			this.onScrollFixed();
		}
		quickSearch = () => {


			$qsearchHeadings 	= $('.qc-headings');
			$qsearchBody 		= $('.qc-form');
			$qsearchClose 		= $('.qsearch-close');


			$qsearchHeadings.on('click', function () {
				
				$qsearchBody.addClass('active');
				$(this).addClass('active');
				
			});

			$qsearchClose.on('click', function () {

				$qsearchBody.removeClass('active');
				$qsearchHeadings.removeClass('active');

			});
		}

		runProperty = () => {

			// Initialize Splide JS instances using forEach
			document.querySelectorAll('.property-lists').forEach(function (element) {
				var splide = new Splide(element, {
					// Set grid options
					type: 'loop',
					perPage: 1,
					perMove: 1,
					arrows: false,
					pagination: false,
					grid: {
						rows: 2,
						cols: 2,
					},
					breakpoints: {
						991: {
							grid: {
								rows: 1,
								cols: 1,
							},
						}
					},
					// Other options go here
				});

				splide.mount(window.splide.Extensions);

				// Get "Previous" and "Next" buttons
				var prevButton = element.querySelector('.splide__prev');
				var nextButton = element.querySelector('.splide__next');

				// Add click event listeners to "Previous" and "Next" buttons
				prevButton.addEventListener('click', function () {
					splide.go('<');
				});
				nextButton.addEventListener('click', function () {
					splide.go('>');
				});
			});

		}
		runMeetTheTeam = () => {

			let teams = new Splide('.team-lists', {
				type: 'loop',
				perPage: 3,
				perMove: 1,
				pagination: false,
				interval: 8000,
				autoplay: true,
				arrows: false,
				breakpoints: {
					991: {
						perPage: 1,
					}
				},
				

			});

			teams.mount();
		}

		/**
		 * Instant Initiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');
	});

})(jQuery, window, document, 'html', 'body');