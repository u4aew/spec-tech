<h2><a class="product-card__titile-link"
       href="<?= ProductHelper::getUrl($data); ?>"> <?= CHtml::encode($data->getName()); ?> </a></h2>
<div class="product-card">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="product-card__image" style="background-image: url('<?= $data->getImageUrl(); ?>')">
                <a href="<?= ProductHelper::getUrl($data); ?>" class="category-card__pic-block"></a>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="row" style="margin: 0">
                <div class="col-lg-7 col-md-7 col-sm-7" style="padding: 0">
                    <div class="product-card__property">
                        <div class="product-property">
                            <?php foreach ($data->getAttributeGroups() as $groupName => $items): { ?>
                                <span>Технические характеристики </span>
                                <div class="table-responsive">
                                    <table class="table">
                                        <?php foreach ($items as $attribute): { ?>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <?= CHtml::encode($attribute->title); ?>
                                                </td>
                                                <td>
                                                    <?= AttributeRender::renderValue($attribute, $data->attribute($attribute)); ?>
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

                <div class="col-lg-5 col-md-5 col-sm-5" style="padding: 0">
                    <div class="product-card_box-btn">
                        <p style="font-weight: bold;font-size: 25px"> <?= round($data->getDiscountPrice(), 2); ?>
                            руб./час </p>
                        <button style="margin-top: 5px"    data-toggle="modal" data-target="#myModal"  class="product-card__btn-order"> Заказать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>