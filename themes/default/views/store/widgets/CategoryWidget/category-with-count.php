<?php foreach ($tree as $item): ?>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="category-card">
        <div class="category-card__pic" style="background-image: url('<?=$item['icon'] ?>')">
            <a href="<?=$item['url']?>" class="category-card__pic-block"></a>
        </div>
        <div class="category-card__name">
            <a class="category-card__link" href="<?=$item['url']?>"> <?=$item['label'] ?>  </a>
        </div>
    </div>
</div>
<?php endforeach; ?>
