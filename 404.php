<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package schoolstudy
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main page">

			<div class="container">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'К сожалению! Эта страница не может быть найдена.', 'schoolstudy' ); ?></h1>
						<a href="<?php echo get_home_url(); ?>" class="btn">Вернутся на главную</a>
					</header><!-- .page-header -->

				</section><!-- .error-404 -->

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
