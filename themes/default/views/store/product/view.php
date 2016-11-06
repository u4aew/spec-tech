<?php
/* @var $product Product */

$this->title = $product->getMetaTitle();
$this->description = $product->getMetaDescription();
$this->keywords = $product->getMetaKeywords();
$this->canonical = $product->getMetaCanonical();

$mainAssets = Yii::app()->getModule('store')->getAssetsUrl();
Yii::app()->getClientScript()->registerScriptFile($mainAssets . '/js/jquery.simpleGal.js');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->getTheme()->getAssetsUrl() . '/js/store.js');

$this->breadcrumbs = array_merge(
    [Yii::t("StoreModule.store", 'Catalog') => ['/store/product/index']],
    $product->category ? $product->category->getBreadcrumbs(true) : [],
    [CHtml::encode($product->name)]
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
                    <h4 class="modal-title">Заявка на <?= CHtml::encode($product->getTitle()); ?></h4>
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
                    <button style="background-color: green;color: white"  onclick="yaCounter38528665.reachGoal('order'); return true;"   class="btn btn-default" type="submit" >Отправить</button>
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
                    <h4 class="modal-title">Заявка на <?= CHtml::encode($product->getTitle()); ?></h4>
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
        <div class="row">
            <?php if ($product->isInStock()): ?>
                <span class="label label-success"><?= Yii::t("StoreModule.store", "In stock"); ?></span>
                <?php if ($product->quantity): ?>
                    <span><?= $product->quantity; ?> <?= Yii::t("StoreModule.store", "in stock"); ?></span>
                <?php endif; ?>
            <?php else: ?>
                <span class="label label-danger"><?= Yii::t("StoreModule.store", "Not in stock"); ?></span>
            <?php endif; ?>
            <h1><?= CHtml::encode($product->getTitle()); ?></h1>
            <hr>
            <div class="col-lg-5">
                <div class="product-image">
                    <a class="fancybox" rel="group" href="<?= StoreImage::product($product); ?>"> <img
                            src="<?= StoreImage::product($product); ?>"
                            style="width: 100%;height: auto;max-width: 500px;display: block;margin: 0 auto" alt=""> </a>
                    <div class="row">
                        <?php foreach ($product->getImages() as $key => $image): { ?>
                            <div class="col-xs-4 col-md-4">
                                <a href="<?= $image->getImageUrl(); ?>" class="thumbnail fancybox">
                                    <img src="<?= $image->getImageUrl(50, 50); ?>"
                                         alt="<?= CHtml::encode($image->alt) ?>"
                                         title="<?= CHtml::encode($image->title) ?>"/>
                                </a>
                            </div>
                        <?php } endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <p style="font-weight: bold;font-size: 18px;text-align: right;margin-top: 5px">
                    Расчет наличными <?= round($product->getDiscountPrice(), 2); ?> руб/час
                </p>
                <p style="font-weight: normal;font-size: 16px;text-align: right;margin-top: 5px">
                    Безналичный расчет <?= round($product->getBasePrice(), 2); ?> руб/час </p>
                <div class="box-product-order">
                    <hr>
                    <div style="text-align: right">
                        <button id="js-btn-order" data-toggle="modal" data-target="#myModal" class="product-btn-order">
                            ЗАКАЗАТЬ
                        </button>
                    </div>
                    <hr>
                </div>
                <div class="product-property">
                    <?php foreach ($product->getAttributeGroups() as $groupName => $items): { ?>
                        <span style="font-size: 17px">Технические характеристики </span>
                        <div class="table-responsive">
                            <table class="table">
                                <?php foreach ($items as $attribute): { ?>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <?= CHtml::encode($attribute->title); ?>
                                        </td>
                                        <td>
                                            <?= AttributeRender::renderValue($attribute, $product->attribute($attribute)); ?>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php } endforeach; ?>
                            </table>
                        </div>
                    <?php } endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row" style="margin:0">

            <div class="col-lg-12">
                <div class="product-description">
                    <h3> <?= Yii::t("StoreModule.store", "Description"); ?></h3>
                    <p>
                        <?= $product->description; ?>
                    </p>
                </div>
                <hr style="clear: both">
            </div>
            <div class="col-lg-12" style="padding: 0">
                <?php $this->widget('application.modules.store.widgets.LinkedProductsWidget', ['product' => $product, 'code' => null,]); ?>
            </div>
            <hr>
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
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox();
        });
    </script>
<?php Yii::app()->getClientScript()->registerScript(
    "product-images",
    <<<JS
        $(".thumbnails").simpleGal({mainImage: "#main-image"});
        $("#myTab li").first().addClass('active');
        $(".tab-pane").first().addClass('active');
JS
); ?>