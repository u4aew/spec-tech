<!DOCTYPE html>
<html lang="<?= Yii::app()->getLanguage(); ?>">

<head>
    <?php
    \yupe\components\TemplateEvent::fire(ShopThemeEvents::HEAD_START);

    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/slick.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/style.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/libs/select2/select2.css');
    Yii::app()->getClientScript()->registerCssFile($this->mainAssets . '/styles/common.css');
    Yii::app()->getClientScript()->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css');

    Yii::app()->getClientScript()->registerCoreScript('jquery');
    ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="ru-RU" />
    <meta http-equiv="viewport" content="width=1200" /><meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="msthemecompatible" content="no" /><meta http-equiv="cleartype" content="on" />
    <meta http-equiv="HandheldFriendly" content="True" /><meta http-equiv="format-detection" content="address=no" />
    <meta http-equiv="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="apple-mobile-web-app-status-bar-style" content="black-translucent" />


    <title><?= $this->pageTitle;?></title>
    <meta name="description" content="<?= $this->description;?>" />
    <meta name="keywords" content="<?= $this->keywords;?>" />
    <?php if ($this->canonical): ?>
        <link rel="canonical" href="<?= $this->canonical ?>" />
    <?php endif; ?>

    <script type="text/javascript">
        var yupeTokenName = '<?= Yii::app()->getRequest()->csrfTokenName;?>';
        var yupeToken = '<?= Yii::app()->getRequest()->getCsrfToken();?>';
        var yupeCartDeleteProductUrl = '<?= Yii::app()->createUrl('/cart/cart/delete/')?>';
        var yupeCartUpdateUrl = '<?= Yii::app()->createUrl('/cart/cart/update/')?>';
        var yupeCartWidgetUrl = '<?= Yii::app()->createUrl('/cart/cart/widget/')?>';
    </script>
    <?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::HEAD_END);?>
</head>

<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="box-header-contacts">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div>
                            <img src="/themes/default/web/images/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="box-header-phone">
                            <span class="box-header-phone_number">
                                <p >8 (3852) 567-167</p>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p style="text-align: right;margin-top: 10px;color: black"> Время работы с 9.00 до 18.00</p>
                        <p style="text-align: right;margin-top: 10px;color: black">г. Барнаул Проспект Ленина 144а, офис 3</p>
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
                            <a class="nav-list__iteam__link" href=""> Аренда спецтехники </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href=""> Контакты </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href=""> Оставить заявку </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href=""> Прайс-лист </a>
                        </li>
                        <li class="nav-list__iteam">
                            <a class="nav-list__iteam__link" href=""> статьи </a>
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

            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<?php \yupe\components\TemplateEvent::fire(ShopThemeEvents::BODY_END);?>
<div class='notifications top-right' id="notifications"></div>
<?php
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/index.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.collapse.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.collapse_storage.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/jquery.fancybox.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/overlay.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/product-gallery.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/slick.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/tabs.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/toggle.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/libs/select2/select2.min.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerScriptFile($this->mainAssets . '/js/store.js', CClientScript::POS_END);
?>
</body>
</html>