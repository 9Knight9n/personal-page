<div class="responsive-sidebar shadow drawer drawer-end drawer-mobile h-full">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle">
    <div class="flex flex-col items-center justify-center drawer-content">
        <?php
        require "content-container.php"
        ?>
    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" class="drawer-overlay"></label>
        <?php
            require "about-me.php"
        ?>
    </div>
</div>



<?php
    ?>
