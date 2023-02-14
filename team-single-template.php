<?php
/* 
* Template Name: Team Single Page Template
* Template Post Type: post, team
*/

get_header();
?>

<main>
    <section class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <h1><?php the_field('name');?></h1>
            <h2><?php the_field('title');?></h2>
            <p><?php the_field('bio');?></p>
        </div>
    </section>
</main>
<?php
get_footer(); 
?>