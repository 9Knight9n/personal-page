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
                <a href="index.php?page=home">
                    خانه
                </a>
            </li>
            <li class="open-bar" style="--n: 0.1s">
                <label for="sidebar-demo-list" class="w-full justify-between flex">
                    <i class="fas fa-angle-left"></i>
                    <span>
                    نمونه کار
                </span>
                </label>
            </li>
            <input type="checkbox" id="sidebar-demo-list" class="hidden">
            <ul >
                <li>
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
    <div class="sidebar-content">
        <label for="my-drawer-1" class="sidebar-dim"></label>
        <div id="my-scrollbar-2"></div>

    </div>
</div>
<script>

    async function fetchHtmlAsText(url) {
        return await (await fetch(url)).text();
    }
    // let container_main = document.getElementById("my-scrollbar-2")
    async function loadHome(page) {
        // load("components/pages/"+page,"my-scrollbar-2")
        const contentDiv = document.getElementById("my-scrollbar-2");
        contentDiv.innerHTML = await fetchHtmlAsText("components/pages/"+page);
        console.log(await fetchHtmlAsText("components/pages/"+page))

        contentDiv.innerHTML += '<footer class="footer"><h5><a>naghizadehmdsd@gmail.com</a>'+':ایمیل'+'</h5><h5>'+'.'+'تمامی حفوق برای آرتر محفوظ است'+'©'+'</h5></footer>'
        // fetch( + page /*, options */)
        //     .then((response) => response.text())
        //     .then((html) => {
        //         document.getElementById("my-scrollbar-2").innerHTML = html;
        //     })
        //     .catch((error) => {
        //         console.warn(error);
        //     });
    }
    let addr = window.location.href
    if (addr.endsWith("demo"))
        loadHome('demo.php')
    else if (addr.endsWith("blog"))
        loadHome('blog.php')
    else if (addr.endsWith("history"))
        loadHome('history.php')
    else if (addr.endsWith("shop"))
        loadHome('shop.php')
    else if (addr.endsWith("contact"))
        loadHome('contact.php')
    else
        loadHome('home.php')

</script>


