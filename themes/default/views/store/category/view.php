<?php
$mainAssets = Yii::app()->getTheme()->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/store.js');
/* @var $category StoreCategory */

$this->title = $category->getMetaTile();
$this->description = $category->getMetaDescription();
$this->keywords = $category->getMetaKeywords();
$this->canonical = $category->getMetaCanonical();

$this->breadcrumbs = [Yii::t("StoreModule.store", "Catalog") => ['/store/product/index']];

$this->breadcrumbs = array_merge(
    $this->breadcrumbs,
    $category->getBreadcrumbs(true)
);
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
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h4 class="modal-title">Заявка
                </h4>
            </div>
            <div class="modal-body">
                <div>
                </div>
                <form id="form" action="">
                    <div style="width: 80%;margin: 0 auto">
                        <label for="name" class="control-label"> Как вас зовут ?</label>
                        <input id="name" name="modal-dialog__name" type="text" class="form-control">
                        <label for="contact" class="control-label"> Ваш номер телефона или E-mail</label>
                        <input id="contact" name="modal-dialog__contact" type="text" class="form-control" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button onclick="yaCounter38528665.reachGoal('order'); return true;"
                        style="background-color: green;color: white" class="btn btn-default" type="submit">Отправить
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<div id="successModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div>
                </div>

                <div style="width: 80%;margin: 0 auto">
                    <div style="font-size: 18px; text-align: center">
                        Спасибо за заявку
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-8">
    <div class="box-category">
        <h1 style="text-align: center"> <?= CHtml::encode($category->getTitle()); ?> </h1>
        <hr style="margin-top: 3px;margin-bottom: 3px">
        <div class="row" style="margin: 10px 0 0 0;padding: 0">
            <div class="col-lg-12">
                <?php $this->widget(
                    'bootstrap.widgets.TbListView',
                    [
                        'dataProvider' => $dataProvider,
                        'itemView' => '//store/product/_item',
                        'summaryText' => '',
                        'enableHistory' => true,
                        'cssFile' => false,
                        'itemsCssClass' => 'row items',
                    ]
                ); ?>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="box-category__info">
                <?= $category->description; ?>
            </div>
            <hr>
        </div>

    </div>
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
                <a href="/price-avalman.doc" onclick="yaCounter38528665.reachGoal('price'); return true;"
                   class="box-widget-category__link"> Скачать Прайс-лист WORD </a>
            </div>
        </div>
        <hr style="margin-bottom: 3px;margin-top: 5px">
        <span style="font-size: 20px;font-weight: bold"> Категории </span>
        <hr style="margin: 5px">
        <?php $this->widget('application.modules.store.widgets.CategoryWidget', ['view' => 'category-with-count_list']); ?>
        <hr>
    </div>
</div>
</div>
