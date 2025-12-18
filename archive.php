<?php get_header(); ?>

<main id="main-content">
    <div class="main__inner">
        <div class="page-header">
            <h1 class="page-title">お知らせ一覧</h1>
            <p class="page-description">恩田接骨院からの最新情報をお届けします</p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-link">← トップページに戻る</a>
        </div>

        <section class="news-archive-section">
            <ul class="news-list-large">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <li class="news-item-large">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-meta">
                                <time class="news-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                <span class="news-cat">
                                    <?php
                                        $cat = get_the_category();
                                        if ( ! empty( $cat ) ) {
                                            echo esc_html( $cat[0]->cat_name );
                                        }
                                    ?>
                                </span>
                            </div>
                            <h2 class="news-title"><?php the_title(); ?></h2>
                            <div class="news-excerpt"><?php the_excerpt(); ?></div>
                        </a>
                    </li>
                <?php endwhile; else : ?>
                    <p>現在お知らせはありません。</p>
                <?php endif; ?>
            </ul>

            <div class="pagination">
                <?php
                echo paginate_links( array(
                    'prev_text' => '←',
                    'next_text' => '→',
                ) );
                ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>