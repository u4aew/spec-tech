<?php
$this->title = 'Каталог - Аренда спецтехники барнаул';
$this->keywords = 'Услуги, заказать, аренда, спецтехника, ямобур, кран, автокран, бульдозер, автобетононасос, бобкэт, экскаватор, манипулятор, воровайка, автокомпрессор, гидромолот, каток, мини экскаватор, самосвал, поливомоечная машина, трал,';
$this->description = 'Авальман предлагает услуги аренды спецтехники в Барнауле. В наличии: Автобетононасос, автокран, мини погрузчик, бульдозер, авто';

$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');

/* @var $category StoreCategory */

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog")];

?>
    <?php $this->widget('application.modules.store.widgets.CategoryWidget', ['view' => 'category-with-count']); ?>

