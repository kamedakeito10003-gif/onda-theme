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

        <section class="contact-section">
            <h2>ご相談・ご予約</h2>
            <p class="contact-text">お気軽にお問い合わせください</p>
            <div class="contact-info">
                <div class="contact-item">
                    <span class="contact-icon">📞</span>
                    <div>
                        <h3>電話でのご予約</h3>
                        <p><a href="tel:058-327-0670" class="contact-link">058-327-0670</a></p>
                        <p class="contact-note">診療時間内にお電話ください</p>
                    </div>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">🏥</span>
                    <div>
                        <h3>直接来院</h3>
                        <p>予約なしでもご来院いただけます</p>
                        <p class="contact-note">混雑時はお待ちいただく場合がございます</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>