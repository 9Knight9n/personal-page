<div class="h-full w-full slider-container" style="display: flex; overflow-y: hidden">
    <input id="my-drawer-1" type="checkbox" class="drawer-toggle">
    <div class="sidebar-mobile">
        <label for="my-drawer-1" class="changing-icon">
            <i class="fas fa-bars" ></i>
            <i class="fas fa-times" ></i>
        </label>
    </div>
    <div class="sidebar">

        <label for="my-drawer-1" class="changing-icon">
            <i class="fas fa-bars" ></i>
            <i class="fas fa-times" ></i>
        </label>


        <div class="close-bar">
            <i class="fas fa-shopping-cart">
            <span class="flex-grow text-right">
                <button type="button" class="w-4 h-4 text-xs  rounded-full text-white">
                    <span class="p-1">
                        7
                    </span>
                </button>
            </span>
            </i>
            <span>
            خانه
        </span>
        </div>
        <ul>
            <li class="open-bar" style="--n: 0s;">
                خانه
            </li>
            <li class="open-bar justify-between flex" style="--n: 0.1s">
                <i class="fas fa-angle-left"></i>
                <span>
                نمونه کار
            </span>
            </li>
            <li class="open-bar" style="--n: 0.2s;">
                تاریخچه
            </li>
            <li class="open-bar" style="--n: 0.3s;">
                فروشگاه
            </li>
            <li class="open-bar justify-between flex" style="--n: 0.4s;">
                <i class="fas fa-angle-left"></i>
                <span>
                بلاگ
            </span>
            </li>
            <li class="open-bar" style="--n: 0.5s;">
                تماس با من
            </li>
            <li class="open-bar" style="--n: 0.6s;">
                خانه تک صفحه
            </li>
        </ul>
    </div>
<!--    <label for="my-drawer-1" class="sidebar-dim">-->
    <label class="sidebar-dim">
        <div id="my-scrollbar-2">
            <?php
                if (!key_exists('page',$_GET) || $_GET['page'] == "home"){
                    require "pages/home.php";
                }
                elseif ($_GET['page'] == "demo")
                {
                    require "pages/demo.php";
                }
                elseif ($_GET['page'] == "blog-1")
                {
                    require "pages/blog-1.php";
                }

            ?>
            <footer class="footer">
                <h5>
                    <a>
                        naghizadehmdsd@gmail.com
                    </a>
                    :ایمیل
                </h5>
                <h5>
                    .
                    تمامی حفوق برای آرتر محفوظ است
                    ©
                </h5>
            </footer>
        </div>
    </label>
</div>
