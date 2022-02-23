<section class="demo">

    <style>

        .anim {
            animation: scaleUp 1s ease;
        }

        .anim-reverse {
            animation: scaleDown 1s ease;
        }

        @keyframes scaleUp {
            0% {
                transform: scale(.3);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes scaleDown {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(.3);
            }
        }
    </style>

    <h5 class="article-title">
        نمونه کارها
    </h5>
    <!--    <div id="lklwkw" style="height: 800px">-->
    <!--        <img src="../../../static/work-1-1.jpg" style="width: 100%" >-->
    <!--    </div>-->

    <div class="options">
        <h6 class="option" onclick="displayList(list1,0)">
            همه دسته بندی ها
        </h6>
        <h6 class="option" onclick="displayList(list2,1)">
            لوگو
        </h6>
        <h6 class="option" onclick="displayList(list3,2)">
            طراحی وب
        </h6>
        <h6 class="option" onclick="displayList(list4,3)">
            طراحی
        </h6>
        <h6 class="option" onclick="displayList(list5,4)">
            تجربه کاربری
        </h6>
    </div>
    <div class="demo-content">
        <div id="demo-col-1" class="demo-col">

        </div>
        <div id="demo-col-2" class="demo-col">

        </div>
    </div>
    <article>

    </article>
</section>

<!--<script src="https://unpkg.com/minigrid@3.1.1/dist/minigrid.min.js"></script>-->

<script>

    let list1 = [
        {
            src: "../../../static/work-1-1.jpg",
            title: "طراحی کارت مجوز",
        },
        {
            src: "../../../static/work-2-1.jpg",
            title: "طراحی کارت ویزیت شخصی",
        },
        {
            src: "../../../static/work-3-1.jpg",
            title: "طراحی بروشور تک صفحه",
        },
        {
            src: "../../../static/work-4-1.jpg",
            title: "طراحی کارت ویزیت",
        },
        {
            src: "../../../static/work-5-1.jpg",
            title: "طراحی رفتار کاربری برند وی",
        },
        {
            src: "../../../static/work-6-1.jpg",
            title: "طراحی موک آپ لیوان",
        },
        {
            src: "../../../static/work-7-1.jpg",
            title: "طراحی برچسب نوشیدنی",
        },
        {
            src: "../../../static/work-9-1.jpg",
            title: "طراحی لیوان کاغذی شرکت وی",
        },
        {
            src: "../../../static/work-3-1.jpg",
            title: "طراحی منو شرکت وی",
        },
        {
            src: "../../../static/work-13-scaled-1-1.jpg",
            title: "طراحی اپلیکیشن موبایل وی",
        },
        {
            src: "../../../static/work-11-1.jpg",
            title: "طراحی لوگو شرکت وی",
        },
        {
            src: "../../../static/work-12-1.jpg",
            title: "ست اداری استودیو آرت",
        },
    ]
    let list2 = [
        {
            src: "../../../static/work-6-1.jpg",
            title: "طراحی موک آپ لیوان",
        },
        {
            src: "../../../static/work-7-1.jpg",
            title: "طراحی برچسب نوشیدنی",
        },
        {
            src: "../../../static/work-9-1.jpg",
            title: "طراحی لیوان کاغذی شرکت وی",
        },
        {
            src: "../../../static/work-11-1.jpg",
            title: "طراحی لوگو شرکت وی",
        },
    ]
    let list3 = [
        {
            src: "../../../static/work-5-1.jpg",
            title: "طراحی رفتار کاربری برند وی",
        },
        {
            src: "../../../static/work-13-scaled-1-1.jpg",
            title: "طراحی اپلیکیشن موبایل وی",
        },
    ]
    let list4 = [
        {
            src: "../../../static/work-3-1.jpg",
            title: "طراحی بروشور تک صفحه",
        },
        {
            src: "../../../static/work-4-1.jpg",
            title: "طراحی کارت ویزیت",
        },
        {
            src: "../../../static/work-3-1.jpg",
            title: "طراحی منو شرکت وی",
        },
    ]
    let list5 = [
        {
            src: "../../../static/work-1-1.jpg",
            title: "طراحی کارت مجوز",
        },
        {
            src: "../../../static/work-2-1.jpg",
            title: "طراحی کارت ویزیت شخصی",
        },
        {
            src: "../../../static/work-12-1.jpg",
            title: "ست اداری استودیو آرت",
        },
    ]

    // // (function(){
    // // var grid;
    // // function init() {
    // let grid = new Minigrid({
    //         container: '.demo-content',
    //         item: '.card-1',
    //         gutter: 12
    //     });
    //     grid.mount();
    // // }
    //
    // // mount
    // function update() {
    //     grid.mount();
    // }
    //
    // // document.addEventListener('DOMContentLoaded', init);
    // window.addEventListener('resize', update);
    // })();

    let timer;

    async function displayList(list, index) {

        let options = document.getElementsByClassName("option")
        for (let i = 0; i < options.length; i++)
            options[i].classList.remove("active")
        options[index].classList.add("active")


        let col1 = document.getElementById("demo-col-1")

        let col2 = document.getElementById("demo-col-2")


        clearAnim()

        let cards = document.getElementsByClassName('card-1');
        if (cards.length!==0){
            timer = setInterval(function() {
                col1.innerHTML = "";
                col2.innerHTML = "";


                for (let i = 0; i < list.length; i++) {
                    let content = "<div class='card-1 anim '>"
                    content += "<img src='" + list[i].src + "' alt='demo-pic'>";
                    content += "<div>";
                    content += "<h5 class='card-title'>";
                    content += list[i].title;
                    content += "</h5>";
                    content += "<a href='#' class='show-more'>";
                    content += "بیشتر بخوانید";
                    content += "<i class='fas fa-angle-left'></i>";
                    content += "</a>";
                    content += "</div>";
                    content += "</div>";

                    // col.innerHTML += content;

                    // let cards = document.getElementsByClassName('card-1')[];
                    // console.log("----------------------------")
                    if (document.getElementById("demo-col-2").clientHeight >= document.getElementById("demo-col-1").clientHeight)
                        col1.innerHTML += content;
                    else
                        col2.innerHTML += content;


                }

                clearInterval(timer)
            }, 400)

        }else{
            for (let i = 0; i < list.length; i++) {
                let content = "<div class='card-1 anim '>"
                content += "<img src='" + list[i].src + "' alt='demo-pic'>";
                content += "<div>";
                content += "<h5 class='card-title'>";
                content += list[i].title;
                content += "</h5>";
                content += "<a href='#' class='show-more'>";
                content += "بیشتر بخوانید";
                content += "<i class='fas fa-angle-left'></i>";
                content += "</a>";
                content += "</div>";
                content += "</div>";

                // col.innerHTML += content;

                // let cards = document.getElementsByClassName('card-1')[];
                // console.log("----------------------------")
                if (document.getElementById("demo-col-2").clientHeight >= document.getElementById("demo-col-1").clientHeight)
                    col1.innerHTML += content;
                else
                    col2.innerHTML += content;


            }
        }
    }


    function clearAnim(){
        let cards = document.getElementsByClassName('card-1');
        for (let k = 0;k<cards.length;k++)
        {
            cards[k].classList.remove("anim")
            cards[k].classList.add('anim-reverse')
        }
    }

    displayList(list1, 0);

</script>
