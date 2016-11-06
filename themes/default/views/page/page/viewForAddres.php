<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>
<style>
    table tr td {
        border: 1px solid black;
    }
</style>
<div style="min-height: 760px">
    <h1><?= $model->title; ?></h1>
    <?= $model->body; ?>
    <div class="b-map-addres">
        <div style="margin: 0 auto">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=jRiP2w_mUTKHSNk3zpBpDiYPcDiCYS54&amp;width=680&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
        </div>
    </div>
</div>
