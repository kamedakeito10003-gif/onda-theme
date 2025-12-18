<?php get_header(); ?>

<main id="main-content">
    <div class="main__inner">
        <div class="page-header">
            <h1 class="page-title">ページが見つかりません</h1>
            <p class="page-description">404 Not Found</p>
        </div>

        <section style="text-align: center; padding: 0 0 5rem;">
            <p style="margin-bottom: 2rem; line-height: 2;">
                申し訳ありません。<br>
                お探しのページは削除されたか、名前が変更された可能性があります。
            </p>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="service-detail-link">
                トップページに戻る
            </a>
        </section>
    </div>
</main>

<?php get_footer(); ?>