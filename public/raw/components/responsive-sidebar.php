<div class="responsive-sidebar shadow drawer drawer-end drawer-mobile h-full">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle">
    <div class="flex flex-col items-center justify-center drawer-content">
        <label for="my-drawer-2" class="mb-4 btn btn-primary drawer-button lg:hidden text-primary">open menu</label>
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
