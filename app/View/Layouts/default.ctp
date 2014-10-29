<?php echo $this->Html->docType("html5"); ?>

<html>
    <?php echo $this->Html->charset(); ?>
    
    <?php echo $this->Html->tag("title","Miceliu.ro") ?>

    <?php echo $this->Html->meta('favicon.png','/img/favicon.png',array('type' => 'icon')); ?>
    
    <?php echo $this->Html->css("style"); ?>
    
    <?php echo $this->Html->css("bjqs") ?>
    
    <?php echo $this->Html->script("jquery-2.1.1.min") ?>
    
    <?php echo $this->Html->script("bjqs-1.3.min"); ?>
    
    <?php echo $this->Html->script("/js/ckeditor/ckeditor") ?>
    
    <?php echo $this->Html->script("script"); ?>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#<?php echo $this->params['controller'];?> a").css("color","#C66717");
            $("#<?php echo $this->params['controller'];?> a").css("text-decoration","underline");
        });        
    </script>
    
    
    
        <body>
        <div id="mainLayout">
            <div id="mainTitle"><?php echo $this->Html->link("Miceliu.ro","/");?></div>
            <?php echo $this->element("banner");?>
            
            <?php echo $this->element("menu");?>
            <div id="mainContent">
                <?php echo $this->fetch("content");?>
            </div>
            <div class="sidebar"></div>
            <div id="footer">Copyright &copy; Miceliu.ro<br/>2014</div>
        </div>
    </body>
</html>