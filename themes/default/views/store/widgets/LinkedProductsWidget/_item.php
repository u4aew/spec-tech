<?php
/**
 * @var Product $data
 */
?>
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="box-linked-product">
        <div class="box-linked-product__image" style="background-image: url('<?= $data->getImageUrl(500, 500); ?>')">

        </div>
        <div class="box-linked-product__description">
            <p class="box-linked-product__description-title">
                <a class="box-linked-product__description-title__link"
                   href="<?= ProductHelper::getUrl($data); ?>"><?= CHtml::encode($data->getName()); ?></a>
            </p>
            <p class="box-linked-product__description__price">
                <?= $data->getResultPrice(); ?> руб/час
            </p>
        </div>
    </div>
</div>