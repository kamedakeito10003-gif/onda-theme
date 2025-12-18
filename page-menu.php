<?php
get_header();
?>

<main id="main-content">
    <div class="main__inner">
        <div class="page-header">
            <h1 class="page-title">診療内容のご案内</h1>
            <p class="page-description">当院では、柔道整復師による専門的な治療を行っております</p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="back-link">← トップページに戻る</a>
        </div>

        <section class="service-detail-section">
            <div class="service-detail-card">
                <div class="service-detail-header">
                    <div class="service-icon-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/illust/bone.png' ); ?>" alt="接骨・整骨"></div>
                    <h2>接骨・整骨</h2>
                </div>
                <div class="service-detail-content">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/内観2.jpg' ); ?>" alt="">
                    <div class="service-text-wrapper">
                        <h3>対応できる症状</h3>
                        <ul class="symptom-list">
                            <li>捻挫（足首、手首など）</li>
                            <li>打撲・挫傷</li>
                            <li>骨折（不全骨折を含む）</li>
                            <li>脱臼</li>
                            <li>スポーツ外傷</li>
                            <li>交通事故による外傷</li>
                        </ul>
                        <h3>治療内容</h3>
                        <p>柔道整復師が、伝統的な手技療法と電気・機械療法を組み合わせて治療を行います。患者様一人ひとりの状態に合わせたオーダーメイドの治療プランをご提供いたします。急性期の炎症緩和から、回復期の機能訓練まで、段階的にアプローチいたします。</p>
                        <h3>治療の流れ</h3>
                        <ol class="treatment-flow">
                            <li>問診・検査：症状の原因を詳しく調べます</li>
                            <li>診断：状態を正確に把握します</li>
                            <li>治療計画：患者様に合わせた治療方針を立てます</li>
                            <li>施術：手技療法を中心とした治療を行います</li>
                            <li>経過観察：回復状況を確認し、必要に応じて治療を調整します</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- 以下、マッサージ療法・物理療法も同様に移植 -->
            <div class="service-detail-card">
                <div class="service-detail-header">
                    <div class="service-icon-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/illust/massage.png' ); ?>" alt="マッサージ療法"></div>
                    <h2>マッサージ療法</h2>
                </div>
                <div class="service-detail-content">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/治療2.jpg' ); ?>" alt="">
                    <div class="service-text-wrapper">
                        <h3>対応できる症状</h3>
                        <ul class="symptom-list">
                            <li>肩こり・首のこり</li>
                            <li>腰痛・背部痛</li>
                            <li>筋肉の疲労・硬直</li>
                            <li>血行不良</li>
                            <li>むくみ</li>
                            <li>慢性的な疲労感</li>
                        </ul>
                        <h3>治療内容</h3>
                        <p>筋肉のコリや緊張を和らげ、血行を促進することで、自然治癒力を高めます。お一人お一人の症状に合わせて、適切な圧や手技を選択し、心地よく効果的なマッサージを提供いたします。リラックス効果も高く、ストレス解消にもお役立ていただけます。</p>
                        <h3>マッサージの効果</h3>
                        <ul class="effect-list">
                            <li>血行促進：血液循環が良くなり、酸素と栄養が全身に届きます</li>
                            <li>筋肉の柔軟性向上：硬くなった筋肉をほぐし、関節の可動域を広げます</li>
                            <li>痛みの緩和：緊張した筋肉をリラックスさせ、痛みを和らげます</li>
                            <li>疲労回復：溜まった疲労物質を取り除き、回復を促進します</li>
                            <li>ストレス緩和：リラックス効果により、心身の緊張をほぐします</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="service-detail-card">
                <div class="service-detail-header">
                    <div class="service-icon-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/illust/bed.png' ); ?>" alt="物理療法"></div>
                    <h2>物理療法</h2>
                </div>
                <div class="service-detail-content">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/内観3.jpg' ); ?>" alt="">
                    <div class="service-text-wrapper">
                        <h3>対応できる症状</h3>
                        <ul class="symptom-list">
                            <li>慢性的な痛み</li>
                            <li>神経痛</li>
                            <li>関節痛</li>
                            <li>筋肉痛</li>
                            <li>しびれ</li>
                        </ul>
                        <h3>治療内容</h3>
                        <p>電気治療（干渉波、低周波）、超音波治療、牽引療法、温熱療法など、症状に合わせた物理療法機器を使用します。痛みの緩和、血行促進、筋肉の緊張緩和、組織の修復促進などに効果があります。手技療法と組み合わせることで、より高い治療効果が期待できます。</p>
                        <h3>主な機器</h3>
                        <ul class="equipment-list">
                            <li>干渉波治療器：深部の筋肉まで刺激し、痛みを和らげます</li>
                            <li>超音波治療器：温熱効果とミクロマッサージ効果で、組織の修復を早めます</li>
                            <li>牽引装置：首や腰を牽引し、神経の圧迫を和らげます</li>
                            <li>ホットパック：患部を温め、血行を良くします</li>
                        </ul>
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