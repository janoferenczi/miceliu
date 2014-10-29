<a href="/">
    <div id="banner">
    <?php
        App::uses('Folder', 'Utility');
        App::uses('File', 'Utility');
        $dir = new Folder(WWW_ROOT.'img/banner');
        $files = $dir->find('.*\.jpg',true);
        echo "\n<ul class='bjqs'>\n";
        foreach($files as $file){
            echo "<li><img src='/img/banner/".$file."'/></li>\n";
        }
        echo "</ul>";
    ?>
    </div>
</a>
