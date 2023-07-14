<?php

/* Catch-all templates */

get_header();

?>

<div class="main-content">
	<div class="container">
		<h1>Latest News</h1>

		<?php

		$posts = array(
			array(
				'ID' => 1,
				'category' => 'News',
				'title' => 'Robin Cordy - Managing Director at NBS',
				'content' => 'In the debut episode of our Born to B2B: Adventures in B2B Marketing podcast, we\'re joined by Robin Cordy, a digital marketing leader and the Managing Director at NBS. Robin brings a wealth of knowledge...',
				'image' => array(
					'url' => 'https://www.thinktank.org.uk/wp-content/uploads/2023/06/blog-banner-podcast-02-1.png',
					'alt' => 'Robin Cordy - Managing Director at NBS'
				),
				'link' => array(
					'url' => 'https://www.thinktank.org.uk/news/robin-cordy-podcast/',
					'text' => 'Read More'
				)
			),
			array(
				'ID' => 2,
				'category' => 'News',
				'title' => 'The Think Tank Wins Agency of the Year 2023',
				'content' => 'The Think Tank celebrates an impressive haul at the Global Agency Awards What a year it\'s been. Following a slew of fantastic campaigns, consistently brilliant results, an agency rebrand and numerous awards, we can now...',
				'image' => array(
					'url' => 'https://www.thinktank.org.uk/wp-content/uploads/2023/06/agency-of-the-year-23-thumb-01-2048x1435.jpg',
					'alt' => 'The Think Tank Wins Agency of the Year 2023'
				),
				'link' => array(
					'url' => 'https://www.thinktank.org.uk/news/marketing-agency-of-the-year',
					'text' => 'Read More'
				)
			),
			array(
				'ID' => 3,
				'category' => 'News',
				'title' => 'Coming soon! Born to B2B: Adventures in B2B Marketing Podcast',
				'content' => 'The Think Tank celebrates an impressive haul at the Global Agency Awards What a year it\'s been. Following a slew of fantastic campaigns, consistently brilliant results, an agency rebrand and numerous awards, we can now...',
				'image' => array(
					'url' => 'https://www.thinktank.org.uk/wp-content/uploads/2023/06/blog-banner-podcast-01-1.png',
					'alt' => 'Born to B2B: Adventures in B2B Marketing Podcast'
				),
				'link' => array(
					'url' => 'https://www.thinktank.org.uk/news/born-to-b2b-podcast',
					'text' => 'Read More'
				)
			),
		);


		// Loop through posts and use get_template_part to load the post-card template.
		// Remember to pass the variables to the template.
		// post-card template is located at template-parts/post-card.php
		get_template_part( 'template-parts/post', 'card' )
		?>

	</div>
</div>

<?php

get_footer();
