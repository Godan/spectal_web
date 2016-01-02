<header class="bg-danger text-center lead algo13-moderate-height">ヘッダー</header>
<div class="container">
    <div class="row">
        <!-- 本文を右に表示 -->
        <div class="col-xs-9 col-xs-push-3" role="main">
            <h1>スティッキーサイドバーのサンプル</h1>
            <h2 id="section-1">１個目のセクション</h2>
            <div id="section-1-sub-1" class="algo13-moderate-height">１個目の中身１</div>
            <div id="section-1-sub-2" class="algo13-moderate-height">１個目の中身２</div>
            <h2 id="section-2">２個目のセクション</h2>
            <div id="section-2-sub-1" class="algo13-moderate-height">２個目の中身１</div>
            <div id="section-2-sub-2" class="algo13-moderate-height">２個目の中身２</div>
        </div>
        <!-- サイドバーを左に表示 -->
        <div class="col-xs-3 col-xs-pull-9" role="complementary">
            <nav class="algo13-sidebar hidden-print"><!-- hidden-xs -->
                <ul class="nav">
                    <li>
                        <a href="#section-1">１個目のセクション</a>
                        <ul class="nav">
                            <li><a href="#section-1-sub-1">１個目の中身１</a></li>
                            <li><a href="#section-1-sub-2">１個目の中身２</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#section-2">２個目のセクション</a>
                        <ul class="nav">
                            <li><a href="#section-2-sub-1">２個目の中身１</a></li>
                            <li><a href="#section-2-sub-2">２個目の中身２</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<footer class="bg-danger text-center lead algo13-moderate-height">フッター</footer>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    (function(window, $) {
        'use strict';
        $(function() {
            // スクロール位置と連動させない場合は不要(scrollspy用)
            $(document.body).scrollspy({ target: '.algo13-sidebar' });

            // スクロール位置と連動させない場合は不要(scrollspy用)
            $(window).on('load', function() { $(document.body).scrollspy('refresh') });

            // 固定サイドバーのスクロール追従開始＆終了位置の設定(affix用)
            setTimeout(function() {
                $('.algo13-sidebar').affix({
                    offset: {
                        top: function() {
                            return (this.top = $('header').outerHeight(true));
                        },
                        bottom: function() {
                            return (this.bottom = $('footer').outerHeight(true));
                        }
                    }
                })
            }, 100);
        });
    })(window, jQuery);
</script>