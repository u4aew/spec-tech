<?php /* @var $dataProvider CActiveDataProvider */ ?>
<?php if ($dataProvider->getTotalItemCount()): ?>
    <h3>
        <?= Yii::t('StoreModule.store', 'Возможно, Вас заинтересует') ?>
    </h3>
    <?php $this->widget(
        'zii.widgets.CListView',
        [
            'dataProvider' => $dataProvider,
            'template' => '{items}',
            'itemView' => '_item',
            'cssFile' => false,
            'pager' => false,
        ]
    ); ?>
<div style="clear: both"> </div>
<?php endif; ?>