<div id="menuHolder">
<?php
$menuList = array(
    array("name"=>"Despre Noi",         "id"=>"desprenoi"),
    array("name"=>"Compost",            "id"=>"compost"),
    array("name"=>"Miceliu",            "id"=>"miceliu"),
    array("name"=>"Medicinale",         "id"=>"medicinale"),
    array("name"=>"Intrebari",          "id"=>"intrebari"),
    array("name"=>"Preturi",            "id"=>"preturi"),
    array("name"=>"Contact",            "id"=>"contact")
    );
echo "\n<ul id='menu'>\n";

foreach($menuList as $menu){
    echo "<li id='".$menu['id']."'>".$this->Html->link($menu['name'],array("controller"=>$menu['id'],"action"=>"index"))."</li>\n";
}

echo "</ul>\n";
?>
</div>
