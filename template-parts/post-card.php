<?php
$news = get_field('news_card');
?>


<!-- PHP/HTML here -->
<?php while( have_rows($news)): the_row();

    $image = get_sub_field("article_image");
    $title = get_sub_fields("article_title");
    $description = get_sub_fields("short_description");
    $link = get_sub_fields("card_link");
    $link_title = get_sub_field("card_link_title");

?>

<div class="posts-section">
    <div class="container">
        <div class="card" style="width: 23rem;">
            <img src="<?php echo $image ?>" class="card-img-top" alt="Robin Cordy - Managing Director at NBS">
            <div class="card-body">
              <h5 class="card-category"><?php echo $news['left_cta'];?></h5>
              <h2 class="card-title"><?php echo $title?></h2>
              <p class="card-description"><?php echo$description;?></p>
              <a href="<?php echo $link;?>" class="card-link"><?php echo $link_title;?></a>
            </div>
        </div>

<?php endwhile; ?>