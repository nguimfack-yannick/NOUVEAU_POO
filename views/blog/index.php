<h1>Les derniers articles</h1>
<?php foreach($params['posts'] as $post):?>
    <div class="card mb-3">
        <div class="card-body">
            <h3><?= $post->title?></h3>
            <div>
                <?php foreach($post->getTags() as $tag):?>
                <span class="badge badge-info"><?=$tag->nom?></span>
                <?php endforeach ?>
            </div>
            <small class="text-info">Publié le :<?=$post->getCreatedAt();?></small>
            <p><?=$post->getExcerpt()?></p>
            <?=$post->getButton()?>
        </div>
    </div>

<?php endforeach;?>

