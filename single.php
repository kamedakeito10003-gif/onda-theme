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

 <section class="consultation-section">
            <h2>ご相談・ご予約について</h2>
            <p class="consultation-text">当院では、初診の方も随時受け付けております。お気軽にご相談ください。</p>
            <div class="consultation-info">
                <div class="consultation-item">
                    <span class="consultation-icon">📞</span>
                    <div>
                        <h3>電話でのご予約</h3>
                        <p><a href="tel:058-327-0670" class="consultation-link">058-327-0670</a></p>
                        <p class="consultation-note">診療時間内にお電話ください</p>
                    </div>
                </div>
                <div class="consultation-item">
                    <span class="consultation-icon">🏥</span>
                    <div>
                        <h3>直接来院</h3>
                        <p>予約なしでもご来院いただけます</p>
                        <p class="consultation-note">混雑時はお待ちいただく場合がございます</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="access" aria-labelledby="access-heading">
            <h2 id="access-heading">アクセス・営業時間</h2>

            <div class="access-map-wrapper">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.493922377224!2d136.6853663762822!3d35.41846597267324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003adeba30798e7%3A0xe53184b0acadc7ea!2z5oGp55Sw5o6l6aqo6Zmi!5e0!3m2!1sja!2sjp!4v1700000000000!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="access-details-grid">
                <div class="access-info">
                    <h3>アクセス情報</h3>
                    <p><strong>住所:</strong> 〒501-0000 岐阜県瑞穂市馬場春雨町1丁目2</p>
                    <p><strong>電話:</strong> <a href="tel:058-327-0670">058-327-0670</a></p>
                    <p><strong>駐車場完備</strong></p>
                    <p>JR穂積駅より徒歩40分</p>
                    <p>岐阜バス 大野穂積線 高屋太子バス停 徒歩3分</p>
                </div>
               <div class="hours-info">
                    <h3>診療時間</h3>
                    <table class="hours-table">
                        <tr>
                            <th>月曜日</th>
                            <td>8:30 - 12:00<br>14:00 - 20:00</td>
                        </tr>
                        <tr>
                            <th>火曜日</th>
                            <td>8:30 - 12:00<br>14:00 - 20:00</td>
                        </tr>
                        <tr>
                            <th>水曜日</th>
                            <td>8:30 - 12:00<br>14:00 - 20:00</td>
                        </tr>
                        <tr>
                            <th>木曜日</th>
                            <td>8:30 - 12:00<br>14:00 - 20:00</td>
                        </tr>
                        <tr>
                            <th>金曜日</th>
                            <td>8:30 - 12:00<br>14:00 - 20:00</td>
                        </tr>
                        <tr>
                            <th>土曜日</th>
                            <td>8:30 - 12:00<br>14:00 - 20:00</td>
                        </tr>
                        <tr>
                            <th>日曜日</th>
                            <td style="color: var(--color-accent); font-weight: 700;">休診</td>
                        </tr>
                    </table>
                    <p class="hours-note">※祝日の診療についてはお問い合わせください.</p>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>