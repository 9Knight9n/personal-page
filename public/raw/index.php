<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal page</title>
    <link rel="stylesheet" href="../css/smooth-scrollbar.css" />
    <link rel="stylesheet" href="../css/all.min.css"/>
    <link rel="stylesheet" href="../css/splide-default.min.css"/>
    <link href="../css/extra.css" rel="stylesheet">
    <link href="../css/app.css" rel="stylesheet">
</head>

<body class="bg-tertiary">
    <div id="loading"><div></div></div>
    <div class="single-page w-full h-full">


        <?php
        require "./components/responsive-sidebar.php";
        ?>
    </div>

    <script>
        function endLoading(){
            // document.getElementById('loading').style.display = 'none'
            document.getElementById('loading').remove()
        }
        if (document.getElementsByClassName('demo').length>0)
            window.onload = function(){ displayList(list1, 0);endLoading(); }
        else
            window.onload = function(){ endLoading(); }
    </script>




    <script src="../js/smooth-scrollbar.js"></script>

    <script>
        const Scrollbar = window.Scrollbar;

        Scrollbar.init(document.querySelector('#my-scrollbar-2'), {
            // speed:1.2,
            damping:0.08,
            // alwaysShowTracks:true,
            // continuousScrolling:true
            overscrollEffect:"bounce"
        });

        Scrollbar.initAll({
            // speed:1.2,
            damping:0.08,
            // alwaysShowTracks:true,
            // continuousScrolling:true
            overscrollEffect:"bounce"
        });
    </script>


    <script src="../js/splide.min.js"></script>
    <script>
        if (document.getElementsByClassName("splide").length > 0)
        {
            var splide = new Splide( '.splide', {
                // type   : 'loop',
                perPage: 2,
                perMove: 1,
                autoWidth: true,
                // height   : '10rem',
                direction: 'rtl',
            } );

            splide.mount();
        }

    </script>

    <script>
        var i = 0;
        var index = 0;
        var increasing = true;
        var txt = ["وب سایت" , "وب اپلیکشن" , "اپلیکشن موبایل" , "رابط کاربری" ];
        var speed = 150;

        function typeWriter() {
            if (index === txt.length)
                index=0;
            if (increasing)
            {
                if (i < txt[index].length) {
                    document.getElementById("typing-text").innerHTML += txt[index].charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }
                else {
                    increasing = false;
                    setTimeout(typeWriter, 10*speed);
                }
            }
            else
            {
                if (i >-1) {
                    document.getElementById("typing-text").innerHTML = txt[index].substring(0,i);
                    i--;
                    setTimeout(typeWriter, speed/3);
                }
                else {
                    increasing = true;
                    index++;
                    setTimeout(typeWriter, 10*speed);
                }
            }

        }
        if (document.getElementById("typing-text") !== null)
            typeWriter();
    </script>


</body>
</html>
