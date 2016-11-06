<!DOCTYPE html>
<html lang="<?= Yii::app()->language; ?>">
<head>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_START); ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Language" content="ru-RU"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="yandex-verification" content="f0d2370b5c2a8214" />
    <meta name="google-site-verification" content="SNNh42a4SNanIO-Q_WJJzZkBHriPbwX3E1JbbZOKg1w" />
    <title><?= $this->title; ?></title>
    <meta name="description" content="<?= $this->description; ?>"/>
    <meta name="keywords" content="<?= $this->keywords; ?>"/>
    <link rel="shortcut icon" href="/themes/default/web/images/favicon.ico" type="image/x-icon">
    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>"/>
    <?php endif; ?>

    <?php
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/style.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/css/jquery.fancybox.css');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/blog.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/bootstrap-notify.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.li-translit.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.fancybox.pack.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.fancybox.js');
    Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tomail.js');
    ?>
    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
    </script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://yandex.st/highlightjs/8.2/styles/github.min.css">
    <script src="http://yastatic.net/highlightjs/8.2/highlight.min.js"></script>
    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::HEAD_END); ?>
</head>

<body style="padding:5px 0 0 0">
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38528665 = new Ya.Metrika({
                    id:38528665,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38528665" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="box-header-contacts">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div><a href="/">
                                <img src="/themes/default/web/images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="box-header-phone">
                            <span class="box-header-phone_number">
                                <p>8 (3852) 567-167</p>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p style="text-align: right;margin-top: 10px;color: black"> Время работы с 9.00 до 18.00</p>
                        <p style="text-align: right;margin-top: 10px;color: black">г. <strong> Барнаул </strong>
                            Проспект Ленина 144а, офис
                            3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--
<div
    style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%,rgb(242, 238, 231) 100%);position: relative;bottom: 15px;height: 15px"></div>
-->
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="box-nav">
                    <ul class="nav-list">
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href="/"> Главная </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href="/store"> Аренда спецтехники </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href="/kontaktnye-dannye"> Контакты </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href="/stroitelstvo"> Строительство </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href="/sotrudnichestvo"> Сотрудничество </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href="/news"> Новости </a>
                        </li>
                    </ul>
                </div>
                <div class="box-content">
                    <div class="box__category-card">
                        <div class="row" style="margin: 0">
                            <?= $content; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <div class="col-lg-4" style="padding-top:10px;color: white">
                        Авальман
                        г.Барнаул, ул.Ленина 144a
                    </div>

                    <div class="col-lg-4"></div>
                    <div class="col-lg-4" style="padding-top:10px;color: white;text-align: right">
                        <br>
                        <p> v89236430292@gmail.com </p>
                        <p> 8(3852)-567-167 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox();
    });
</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'mCBtAI47IS';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>