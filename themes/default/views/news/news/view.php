<?php
/**
 * Отображение для ./themes/default/views/news/news/news.php:
 *
 * @category YupeView
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 *
 * @var $this NewsController
 * @var $model News
 **/
?>
<?php
$this->title = $model->title;
$this->description = $model->description;
$this->keywords = $model->keywords;
?>

<?php
$this->breadcrumbs = [
    Yii::t('NewsModule.news', 'News') => ['/news/news/index'],
    $model->title
];
?>
<?php $this->widget(
    'bootstrap.widgets.TbBreadcrumbs',
    [
        'htmlOptions' =>
            [
                'class' => 'breadcrumb',
            ],
        'links' => $this->breadcrumbs,
    ]
); ?>
<div class="row" style="margin:0;padding:0">
    <div class="col-lg-8 col-md-8">
        <p><h4><strong><?= CHtml::encode($model->title); ?></strong></h4></p>
        <p>            <?php if ($model->image): ?>
                <?= CHtml::image($model->getImageUrl(), $model->title); ?>
            <?php endif; ?>
        <p> <?= $model->full_text; ?></p>
        </p>
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="box-widget-category">
            <div class="box-widget-category_cont">
                <span style="font-size: 20px;font-weight: bold"> Телефоны </span>
                <hr style="border-color: gray;">
                <p> 8(3852)-567-167</p>
                <p>8-923-643-02-92 - Виталий </p>
                <p>8-913-083-22-72 - Сергей </p>
                <p>8-961-977-89-75 - Сергей </p>
                <hr style="margin-bottom: 5px;border-color: gray">
                <div class="box-widget-category__link-price">
                    <a href="/price-avalman.doc" class="box-widget-category__link" onclick="yaCounter38528665.reachGoal('price'); return true;"> Скачать Прайс-лист WORD </a>
                </div>
            </div>
            <hr style="margin-bottom: 3px;margin-top: 5px">
            <span style="font-size: 20px;font-weight: bold"> Категории</span>
            <hr style="margin: 5px">
            <ul class="box-widget-category_list" style="padding: 0;list-style: none">
                <?php $this->widget('application.modules.store.widgets.CategoryWidget', ['view' => 'category-with-count_list']); ?>
            </ul>
            <hr>
            <div class="box-widget-category__link-price">
                <a href="#" class="box-widget-category__link"> Скачать Прайс-лист WORD </a>
            </div>
        </div>
    </div>
</div>