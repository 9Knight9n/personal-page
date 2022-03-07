<section class="demo">

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

    let sizes = {}

    for(let j = 0;j<list1.length;j++)
    {
        getHeight(list1[j].src)
    }

    let timer;

    async function displayList(list, index) {



        // await delay(500).then(() => console.log(''))
        let h1=0;
        let h2=0;

        let options = document.getElementsByClassName("option")
        for (let i = 0; i < options.length; i++)
            options[i].classList.remove("active")
        options[index].classList.add("active")



        let col1 = document.getElementById("demo-col-1")
        let col2 = document.getElementById("demo-col-2")


        clearAnim()

        let cards = document.getElementsByClassName('card-1');
        if (cards.length!==0){
            timer = setInterval(async function () {
                col1.innerHTML = "";
                col2.innerHTML = "";


                createCardTag(list,i,col1,col2,h1,h2)

                clearInterval(timer)
            }, 400)

        }else{
            createCardTag(list,i,col1,col2,h1,h2)
        }
    }

    function createCardTag(list,i,col1,col2,h1,h2){
        for (let i = 0; i < list.length; i++) {
            let content = "<div class='card-1 anim '>"
            content += "<img src='" + list[i].src + "' alt='demo-pic' class='test' id='img-"+i+"'>";
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

            if (h2 >= h1)
            {
                col1.innerHTML += content;
                h1 += sizes[list[i].src]
            }
            else
            {
                col2.innerHTML += content;
                h2 += sizes[list[i].src]
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


    function getHeight(url) {
        let img = new Image();
        img.onload = function () {
            let height = img.height;
            let width = img.width;
            sizes[url] = height / width;
        }
        img.src = url
    }

    // function delay(time) {
    //     return new Promise(resolve => setTimeout(resolve, time));
    // }


    window.onload = function(){ displayList(list1, 0); }

</script>
