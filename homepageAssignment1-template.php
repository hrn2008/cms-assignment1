<?php
    /**
     * Template Name: Homepage (Assignment one)
     * Template Post Type: Page, Post
     */
    get_header();
?>

<!-- adding content advanced custom fields-->
    <main>
        <section class="masthead" style="background-image:url('<?php the_field("masthead_image"); ?>')">
            <div>
                <h1><?php the_field("tagline"); ?></h1>
            </div>
        </section>
        <section class="acf-row-one">
            <div>
                <h2><?php the_field("row_one_title"); ?></h2>
                <?php the_field("row_one_content"); ?>
            </div>
            <div>
                <img src=<?php echo the_field("row_one_image"); ?> alt='<?php echo the_field("image_alt_text")?>' />
            </div>
        </section>
    </main>
<?php
    get_footer();
?>

