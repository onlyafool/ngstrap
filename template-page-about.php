<?php
/**
 * Template Name: About Page
 *
 * The template for displaying full width pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ngstrap
 */

get_header('fluid'); ?>


	<!-- Main container start -->

	<section id="main-container">

		<?php get_template_part( 'template-parts/content', 'banner-title' ); ?>

		<div class="container">

			<!-- Company Profile -->

			<div class="row">
				<div class="col-md-12 heading text-center">
					<h2 class="title2">Wistoba Pinselfabrik
						<span class="title-desc">Alles wie 1917  –  nur besser</span>
					</h2>
				</div>
			</div><!-- Title row end -->

			<div class="row about-wrapper-top">
				<div class="col-sm-6 ts-padding about-message">
					<h3></h3>
					<p>Als Wilhelm Stollberg 1917 im Bad Lauterberger Ortsteil Barbis am Harz die Wistoba Pinselfabrik gründete, hatte er vor allem ein Ziel: Pinsel und Bürsten für das Malerhandwerk in herausragender Güte. Höchste Anforderungen an die Fertigung und permanente Qualitätsverbesserungen machten die Marke Wistoba als Synonym für hochwertige, professionelle Malerwerkzeuge weit über die Region hinaus bekannt. Denn schließlich wusste Wilhelm Stollberg schon damals: Qualität ist, wenn der Kunde zurück kommt  –  und nicht das Produkt.</p>
				</div><!--/ About message end -->
				<div class="col-sm-6 ts-padding about-img" style="height:374px;background:url(<?php echo bloginfo('template_directory'); ?>/images/set_1_1.jpg) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
			</div><!--/ Content row end -->

			<div class="row about-wrapper-bottom">
				<div class="col-sm-6 ts-padding about-img" style="height:374px;background:url(<?php echo bloginfo('template_directory'); ?>/images/set_1_3.jpg) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
				<div class="col-sm-6 ts-padding about-message">
					<h3></h3>
					<p>So verwundert es denn auch nicht, dass die Prinzipien des Gründers bis heute die Basis des Erfolgs bilden. Mehr noch: Die beiden nachfolgenden Generationen des im Familienbesitz befindlichen Traditionsbetriebs wussten und wissen die Innovationskraft des Unternehmens zu nutzen. Folgerichtig führten Neu- und Weiterentwicklungen auf höchstem Niveau zur Marktführerschaft in Europa. Doch nur zu gut kennt man hier die Bedeutung des Satzes: Wer immer nur an heute denkt, ist morgen schon von gestern.</p>
				</div><!--/ About message end -->
			</div><!--/ Content row end -->

			<div class="row about-wrapper-bottom">
				<div class="col-sm-6 ts-padding about-message">
					<h3></h3>
					<p> Selbst entwickelte Fertigungsautomaten sorgen auch künftig für eine Qualität, die ihresgleichen suchen wird. Außerdem kommt bei Wistoba das wertvollste zum Einsatz, was eine deutsche Pinselfabrikation besitzen kann: die erfahrenen Hände passionierter und langjähriger Mitarbeiter. Eine Präzisionsarbeit, die in der Exzellenz der Produktdetails zum Ausdruck kommt. Vielleicht nicht für jeden sichtbar, für den professionellen Anwender aber spürbar  –  jahrelang. Denn gute Arbeit macht man nur mit gutem Werkzeug.</p>
				</div><!--/ About message end -->
				<div class="col-sm-6 ts-padding about-img" style="height:374px;background:url(<?php echo bloginfo('template_directory'); ?>/images/set_2_2.jpg) 50% 50% / cover no-repeat;">
				</div><!--/ About image end -->
			</div><!--/ Content row end -->

		</div><!--/ 1st container end -->


		<div class="gap-60"></div>

	</section>

<?php
home_scripts();
get_footer();
