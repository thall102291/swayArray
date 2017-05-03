<link rel="stylesheet" type="text/css" href="html/css/navbar.css" media="all" >
<nav class="navClass">
    <ul>
        <?php
            include('arrays.php');
            foreach($navItems as $item){
                if(!array_key_exists('submenu', $item)){
                    echo "<li><a class=\"navitem\" href=\"$item[slug]\">$item[title]</a></li>";
                } else {
                    echo "<li>$item[title]<ul class=\"sub-menu\">";
                    foreach($item['submenu']  as $subItem){
                    
                        echo "<li><a href=\"gallery.php?name=$subItem\">$subItem</a></li>";
                    }
                    echo "</ul></li>";
                }
            }
        ?>
    </ul>
</nav>
