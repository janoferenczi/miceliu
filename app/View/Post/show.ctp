<?php
    $id = $post[0]['Post']['id'];
    $title = $post[0]['Post']['title'];
    $text = $post[0]['Post']['text'];
//    $date = $post[0]['Post']['creation_date'];
?>
<div class="post">
        <div class="postTitle"><?php echo $title;?></div>
        <div class="postBody"><?php echo $text; ?></div>   
</div>
