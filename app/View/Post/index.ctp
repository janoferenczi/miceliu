<div class="posts"> 
<?php
    foreach($posts as $p){
        $id = $p['id'];
        $title = $p['title'];
        $text = $p['text'];
//        $date = $p['creation_date'];
        
        ?>
    <div class="post">
        <div class="postTitle"><?php echo $this->Html->link($title,array("controller"=>'post','action'=>'show',$id));?></div>
        <div class="postBody"><?php echo $text; ?></div>
        <?php if($p['isContinue']){
            echo $this->Html->link("Citeste mai departe...",array('controller'=>'post','action'=>'show',$id),array("class"=>"continue"));
        }  ?>
    </div>
    <?php
    }
?>
</div>

