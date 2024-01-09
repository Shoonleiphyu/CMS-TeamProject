<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title">Welcome to My Site!</h1>
            </header>

            <div class="entry-content">
                <p>This is a simple WordPress theme with a sidebar menu.</p>
                <p>Feel free to customize and extend it based on your needs.</p>
            </div>
        </article>

    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
