<?php get_header(); ?>

<main id="main-content">
    <div class="main__inner">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="page-header">
                <div class="post-category">
                    <?php the_category(' '); ?>
                </div>
                <h1 class="page-title single-title"><?php the_title(); ?></h1>
                <p class="post-date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time></p>
            </div>

            <section class="post-content">
                <?php the_content(); ?>
            </section>

            <div class="post-navigation">
                <div class="nav-prev"><?php previous_post_link('%link', '← 前の記事へ'); ?></div>
                <div class="nav-next"><?php next_post_link('%link', '次の記事へ →'); ?></div>
            </div>

        <?php endwhile; endif; ?>

        <div class="back-button-wrapper">
             <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-link">トップページに戻る</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>