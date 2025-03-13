<?php
$menus = [
    "Home" => "index.php",
    "About" => "about.php",
    "Contact" => "contact.php",
    "Profile" => "profile.php",
    "Event" => "event.php",
]
?>

<!-- Sidebar-->
<div class="border-end" id="sidebar-wrapper" style="background-color: rgb(199, 198, 205);">
    <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
    <div class="list-group list-group-flush">
    <?php
    foreach ($menus as $menu => $value) {
    ?>
            <a class="list-group-item list-group-item-action list-group-item bg-transparent p-3" href="<?= $value ?>"><?= $menu ?></a>
            <?php
    }
    ?>
    </div>
</div>