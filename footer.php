<footer>
        <div class="footer__inner">
            <div class="footer__baneer">
                <p><small>© <?php echo date( 'Y' ); ?> 恩田接骨院</small></p>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // 監視する要素を指定
        const targets = document.querySelectorAll('section, .service-card, .profile-image-wrapper, .news-container');

        // 監視の設定
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, {
            rootMargin: '0px',
            threshold: 0.1
        });

        // 各要素に初期クラスをつけて監視開始
        targets.forEach(target => {
            target.classList.add('fade-up');
            observer.observe(target);
        });
    });

    // ローディング画面を消す処理
    window.addEventListener('load', function() {
        const loader = document.getElementById('loading');
        if(loader){
            // 少しだけ余韻を持たせてから消す（0.5秒後）
            setTimeout(function() {
                loader.classList.add('loaded');
            }, 500);
        }
    });

    // 万が一読み込みが遅すぎた場合の保険（5秒経ったら強制的に消す）
    setTimeout(function() {
        const loader = document.getElementById('loading');
        if (loader) {
            loader.classList.add('loaded');
        }
    }, 5000);
    </script>

    <?php wp_footer(); ?>
</body>
</html>