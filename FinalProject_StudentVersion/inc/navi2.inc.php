<?php
$menu = "home";
if (!empty(filter_input(INPUT_GET, "menu"))) {
    $menu = filter_input(INPUT_GET, "menu");
    // echo $menu;
}
?>

<ul class="nav justify-content-end nav-tabs">
    <li class="nav-item">
        <a class="nav-link <?php
                            if ($menu == "home") {
                                echo "active";
                            }
                            ?>" href="index2.php?menu=home" id="menuHome">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($menu == "shop") {
                                echo "active";
                            } ?>" href="index2.php?menu=shop" id="menuShop">Shop</a>
    </li>
</ul>