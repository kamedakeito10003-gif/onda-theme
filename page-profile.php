<?php
get_header();
?>

<main id="main-content">
    <div class="main__inner">
        <div class="page-header">
            <h1 class="page-title">院長紹介</h1>
            <p class="page-description">患者様一人ひとりに寄り添った治療を心がけております</p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-link">← トップページに戻る</a>
        </div>

        <section class="profile-detail-section">
            <div class="profile-detail-card">
                <div class="profile-detail-header">
                    <div class="profile-image-large">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/恩田先生1.jpg' ); ?>" alt="恩田院長の写真" loading="lazy">
                    </div>
                    <div class="profile-basic-info">
                        <h2>恩田 由敏</h2>
                        <p class="profile-subtitle">恩田接骨院 院長</p>
                    </div>
                </div>

                <div class="profile-detail-content">
                    <div class="profile-section">
                        <h3>院長からのメッセージ</h3>
                        <div class="message-content">
                            <p>地元で長年親しまれてきた当院では、患者様一人ひとりに寄り添い、丁寧な治療を心がけております。</p>
                            <p>痛みや不調でお悩みの方は、お気軽にご相談ください。皆様の健康をサポートすることを使命として、日々研鑽を積んでおります。</p>
                            <p>接骨院は、けがや痛みを治すだけの場所ではありません。患者様の生活の質を向上させ、より健康的で充実した日々を送っていただくためのサポートをしております。</p>
                            <p>お一人お一人の症状や生活スタイルに合わせた治療プランを提案し、一緒に健康な体づくりをサポートいたします。どうぞお気軽にご来院ください。</p>
                        </div>
                    </div>

                    <div class="profile-section">
                        <h3>治療への取り組み</h3>
                        <div class="approach-grid">
                            <div class="approach-item">
                                <div class="approach-icon"></div>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/恩田先生3.jpg' ); ?>" alt="">
                                <h4>丁寧なカウンセリング</h4>
                                <p>患者様のお話をしっかりと聞き、症状の原因を正確に把握します</p>
                            </div>
                            <div class="approach-item">
                                <div class="approach-icon"></div>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/内観3.jpg' ); ?>" alt="">
                                <h4>個別対応の治療</h4>
                                <p>お一人お一人の症状に合わせたオーダーメイドの治療を行います</p>
                            </div>
                            <div class="approach-item">
                                <div class="approach-icon"></div>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/治療2.jpg' ); ?>" alt="">
                                <h4>心のケア</h4>
                                <p>身体の治療だけでなく、患者様の心にも寄り添います</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                    <p class="hours-note">※祝日の診療についてはお問い合わせください</p>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>