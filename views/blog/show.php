<h2><?= $params['post']->title ?></h2>
<div>
                <?php foreach($post->getTags() as $tag):?>
                <span class="badge badge-info"><?=$tag->nom?></span>
                <?php endforeach ?>
            </div>
<p><?= $params['post']->content?></p>
<a href="http://localhost/cour/PHP/NOUVEAU_POO/posts" class="btn btn-secondary">Retourner en arriere</a>