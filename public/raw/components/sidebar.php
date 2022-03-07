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
            <span id="current-page">

            </span>
        </div>
        <ul>
            <li class="open-bar" style="--n: 0s;">
                <a href="index.php?page=home" >
                    خانه
                </a>
            </li>
            <li class="open-bar" style="--n: 0.1s">
                <label style="cursor: pointer" for="sidebar-demo-list" class="w-full justify-between flex">
                    <i class="fas fa-angle-left"></i>
                    <span>
                        نمونه کار
                    </span>
                </label>
            </li>
            <input type="checkbox" id="sidebar-demo-list" class="hidden">
            <ul class="open-bar" style="--n: 0.1s">
                <li class="open-bar">
                    <a href="index.php?page=demo">
                        نمونه کار اول
                    </a>
                </li>
<!--                <li>-->
<!--                    نمونه کار اول-->
<!--                </li>-->
            </ul>
            <li class="open-bar" style="--n: 0.2s;">
                <a href="index.php?page=history">
                    تاریخچه
                </a>
            </li>
            <li class="open-bar" style="--n: 0.3s;">
                <a href="index.php?page=shop">
                    فروشگاه
                </a>
            </li>
            <li class="open-bar" style="--n: 0.4s;">
                <a href="index.php?page=blog">
                    بلاگ
                </a>
            </li>
            <li class="open-bar" style="--n: 0.5s;">
                <a href="index.php?page=contact">
                    تماس با من
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-content" style="background-image: url(../../static/bg-1.jpg);">
        <label for="my-drawer-1" class="sidebar-dim"></label>
        <div id="my-scrollbar-2">
            <?php
                if (!key_exists('page',$_GET) || $_GET['page'] == "home"){
                    require "pages/home.php";
                }
                elseif ($_GET['page'] == "demo")
                {
                    require "pages/demo.php";
                }
                elseif ($_GET['page'] == "blog")
                {
                    require "pages/blog.php";
                }
                elseif ($_GET['page'] == "history")
                {
                    require "pages/history.php";
                }
                elseif ($_GET['page'] == "shop")
                {
                    require "pages/shop.php";
                }
                elseif ($_GET['page'] == "contact")
                {
                    require "pages/contact.php";
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
    </div>
</div>
<script>
    let addr = window.location.href
    let currentPageContainer = document.getElementById("current-page")
    if (addr.endsWith("demo"))
        currentPageContainer.innerText = "نمونه کار"
    else if (addr.endsWith("home"))
        currentPageContainer.innerText = "خانه"
    else if (addr.endsWith("blog"))
        currentPageContainer.innerText = "بلاگ"
    else if (addr.endsWith("history"))
        currentPageContainer.innerText = "تاریخچه"
    else if (addr.endsWith("shop"))
        currentPageContainer.innerText = "فروشگاه"
    else if (addr.endsWith("contact"))
        currentPageContainer.innerText = "تماس با من"
</script>
