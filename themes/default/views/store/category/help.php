<h1><?= CHtml::encode($category->getTitle()); ?></h1>

Вложеные товарв

<?php $this->widget(
    'bootstrap.widgets.TbListView',
    [
        'dataProvider' => $dataProvider,
        'itemView' => '//store/product/_item',
        'summaryText' => '',
        'enableHistory' => true,
        'cssFile' => false,
        'itemsCssClass' => 'row items',
        'sortableAttributes' => [
            'sku',
            'name',
            'price',
            'update_time'
        ],
    ]
); ?>
