<h1>Les derniers articles</h1>
<?php foreach($params['posts'] as $post):?>
    <div class="card mb-3">
        <div class="card-body">
            <h3><?= $post->title?></h3>
            <small class="badge badge-primary">Publié le :<?=$post->getCreatedAt();?></small>
            <p><?=$post->getExcerpt()?></p>
            <?=$post->getButton()?>
        </div>
    </div>

<?php endforeach;?>

