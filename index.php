<?php get_header(); ?>

<div class="main-visual">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/恩田接骨院外観.jpg' ); ?>" alt="恩田接骨院の外観写真" loading="eager">
    <p>瑞穂市で40年。痛みと真摯に向き合う、地域密着の接骨院</p>
</div>

<main id="main-content">
    <div class="main__inner">

        <section class="news-section" id="news">
            <h2>最新情報</h2>
            <div class="news-container">
                <ul class="news-list-home">
                    <?php
                    // 最新の記事を3件だけ取得する設定
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                    );
                    $news_query = new WP_Query( $args );

                    if ( $news_query->have_posts() ) :
                        while ( $news_query->have_posts() ) : $news_query->the_post();
                    ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="news-link">
                                <div class="news-info">
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                    <span class="news-badge">
                                        <?php
                                            $cat = get_the_category();
                                            if ( ! empty( $cat ) ) {
                                                echo esc_html( $cat[0]->cat_name );
                                            }
                                        ?>
                                    </span>
                                </div>
                                <p class="news-title-text"><?php the_title(); ?></p>
                            </a>
                        </li>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // 投稿データをリセット
                    else :
                    ?>
                        <li><p>現在お知らせはありません。</p></li>
                    <?php endif; ?>
                </ul>

                <div class="news-btn-wrapper">
                    <a href="<?php echo esc_url( home_url( '/category/news/' ) ); ?>" class="service-detail-link">お知らせ一覧を見る →</a>
                </div>
            </div>
        </section>

        <section class="sinryou" id="sinryou" aria-labelledby="sinryou-heading">
            <h2 id="sinryou-heading">診療内容</h2>
            <p class="section-description">当院では、以下の診療を専門に行っています</p>
            <div class="service-cards">
                <div class="service-card">
                    <div class="service-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/illust/bone.png' ); ?>" alt="接骨・整骨"></div>
                    <h3 class="service-title">接骨・整骨</h3>
                    <p class="service-description">捻挫、打撲、骨折、脱臼などの外傷に対する治療を行います。柔道整復師による専門的な施術で、患者様一人ひとりに合わせた治療を提供いたします。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/illust/massage.png' ); ?>" alt="マッサージ療法"></div>
                    <h3 class="service-title">マッサージ療法</h3>
                    <p class="service-description">筋肉のコリや疲労回復、血行促進を目的としたマッサージ療法を行います。慢性的な肩こりや腰痛の緩和にも対応いたします。</p>
                </div>
                <div class="service-card">
                    <div class="service-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/illust/bed.png' ); ?>" alt="物理療法"></div>
                    <h3 class="service-title">物理療法</h3>
                    <p class="service-description">電気治療、超音波治療、牽引療法などの物理療法機器を使用し、痛みの緩和と機能回復をサポートいたします。</p>
                </div>
            </div>
            <div class="service-detail-link-wrapper">
                <a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>" class="service-detail-link">診療内容の詳細を見る →</a>
            </div>
        </section>

        <section class="profile" id="profile" aria-labelledby="profile-heading">
            <h2 id="profile-heading">院長紹介</h2>
            <div class="profile-content">
                <div class="profile-image-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/恩田先生3.jpg' ); ?>" alt="恩田院長の写真" loading="lazy">
                </div>
                <div class="profile-info">
                    <h3>恩田 由敏</h3>

                    <div class="profile-message">
                        <h4>院長からのメッセージ</h4>
                        <p>地元で長年親しまれてきた当院では、患者様一人ひとりに寄り添い、丁寧な治療を心がけております。痛みや不調でお悩みの方は、お気軽にご相談ください。皆様の健康をサポートすることを使命として、日々研鑽を積んでおります。</p>
                    </div>
                </div>
            </div>
            <div class="profile-detail-link-wrapper">
                <a href="<?php echo esc_url( home_url( '/profile/' ) ); ?>" class="service-detail-link">院長紹介の詳細を見る →</a>
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
                    <p class="hours-note">※祝日の診療についてはお問い合わせください</p>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>