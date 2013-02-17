<?php if ( !defined('ABSPATH') ) {exit;} ?>

<div class="gwaccat">
<?php foreach ($catlist as $cat): ?>
<div class="gwaccat-cat">
    <div class="gwaccat-cat-header">
        <div class="gwaccat-icon">+</div>
        <?=$cat->name?>
    </div>
    <div class="gwaccat-cat-body<?php if ($cat->slug == $startingcat) echo ' gwaccat-cat-start';?>">
        <?php if ($cat->posts): ?>
        <?php foreach ($cat->posts as $post): ?>
        <div class="gwaccat-cat-body-post">
        <?php if ($hideposttitle != 'yes'): ?>
        <div class="gwaccat-post-title"><?=$post->post_title?></div>
        <?php endif; ?>
        <div class="gwaccat-post-body"><?=$post->post_content?></div>
        </div> 
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; ?>
</div>