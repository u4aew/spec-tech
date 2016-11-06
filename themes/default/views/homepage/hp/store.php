<?php
$this->title = 'Аренда спецтехники в Барнауле и Алтайском Крае';
$this->keywords = 'Услуги, заказать, аренда, спецтехника, ямобур, кран, автокран, бульдозер, автобетононасос, бобкэт, экскаватор, манипулятор, воровайка, автокомпрессор, гидромолот, каток, мини экскаватор, самосвал, поливомоечная машина, трал,';
$this->description = 'Авальман предлагает услуги аренды спецтехники в Барнауле. В наличии: Автобетононасос, автокран, мини погрузчик, бульдозер, авто';
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerCssFile($mainAssets . '/css/store-frontend.css');
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');

/* @var $category StoreCategory */
$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog") => ['/store/product/index']];
?>
<div class="b-slider">
    <?php $this->widget('application.modules.slide.widgets.SlideWidget', []); ?>
</div>
<h1 style="text-align:center;"> Аренда спецтехники в Барнауле</h1>
<hr>
<div class="b-main-text">
    <p><strong>Компания «Авальман»</strong> предоставляет <strong> услуги аренды спецтехники </strong>,строительным
        организациям и частным лицам.</p>
    <p>
        Строительная техника всякий раз воспользовалась высочайшим спросом. Сейчас это составная доля ведения всякого
        строительного бизнеса или же личного постройки. Вы в всякий момент сможете получить самое прогрессивное
        оснащение,
        нет надобности мыслить над тем, как гарантировать своевременную подмену запчастей и выполнить техосмотр. Спасибо
        что, собственно что вы берете спецтехнику в аренду, вы значимо сможете уменьшить собственные затраты на
        проведение
        дел.
    </p>
</div>
<hr>
<?php $this->widget('application.modules.store.widgets.CategoryWidget', ['view' => 'category-with-count']); ?>

