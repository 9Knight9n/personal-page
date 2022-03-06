<section id="shop">
    <h6>
        خانه / فروشگاه
    </h6>
    <h5>
        فروشگاه
    </h5>
    <div>
        <h6>
            نمایش دادن همه 8 نتیجه
        </h6>
        <select>
            <option>
                مرتب‌سازی پیش‌فرض
            </option>
            <option>
                مرتب‌سازی بر اساس محبوبیت
            </option>
            <option>
                مرتب‌سازی بر اساس امتیاز
            </option>
            <option>
                مرتب‌سازی بر اساس آخرین
            </option>
            <option>
                مرتب‌سازی بر اساس ارزانترین
            </option>
            <option>
                مرتب‌سازی بر اساس گرانترین
            </option>
        </select>
    </div>
    <article id="shop-item-container"></article>

</section>

<script>
    shopList =[
        {
            img:"../../../static/shop/long-sleeve-tee-2.jpg",
            title:"پلیور آستین بلند",
            price:"25 تومان",
        },
        {
            img:"../../../static/shop/polo-2.jpg",
            title:"پولوشرت",
            price:"20 تومان",
        },
        {
            img:"../../../static/shop/t-shirt-with-logo-1.jpg",
            title:"تیشرت با لوگو",
            price:"18 تومان",
        },
        {
            img:"../../../static/shop/cap-2.jpg",
            title:"کلاه",
            price:"18 تومان",
            off:"16 تومان",
        },
        {
            img:"../../../static/shop/beanie-with-logo-1.jpg",
            title:"کلاه با لوگو",
            price:"20 تومان",
            off:"18 تومان",
        },
        {
            img:"../../../static/shop/beanie-2.jpg",
            title:"کلاه بافتنی",
            price:"20 تومان",
            off:"18 تومان",
        },
        {
            img:"../../../static/shop/belt-2.jpg",
            title:"کمربند",
            price:"65 تومان",
            off:"55 تومان",
        },
        {
            img:"../../../static/shop/hoodie-with-logo-2.jpg",
            title:"هودی با لوگو",
            price:"45 تومان",
        },
    ]

    function loadItems(list)
    {
        let container = document.getElementById("shop-item-container")
        let innerHtml = ''
        for (let i = 0;i<list.length;i++)
        {
            innerHtml +=    "<article class='"+ (list[i].off?"off":"")+"'>"+
                                "<img src='"+list[i].img+"' alt='item image'>"+
                                "<h6>"+list[i].title+"</h6>"+
                                "<div>"+
                                    "<h6>"+list[i].price+"</h6>"+ (list[i].off?("<h6>"+list[i].off+"</h6>"):"") +
                                "</div>"+
                                "<span>" +
                                    "حراج!" +
                                "</span>" +
                                "<button>"+
                                    "<i class='fas fa-shopping-cart'></i>"+
                                    "افزودن به سبد خرید"+
                                "</button>"+
                            "</article>"
        }
        container.innerHTML = innerHtml
    }

    loadItems(shopList)
</script>
