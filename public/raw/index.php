<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal page</title>
    <link rel="stylesheet" href="../css/smooth-scrollbar.css" integrity="sha512-YihuVdpo+ob7zhdbVJXGqGU/yHvY1N8J/kuC7cFvM9cXja+Q5XYGeQMbwBJsTWuez41tKxrJMukmu+lckvD7IQ==" />
    <link rel="stylesheet" href="../css/all.min.css"/>
    <link rel="stylesheet" href="../css/splide-default.min.css"/>
    <link href="../css/app.css" rel="stylesheet">
</head>
<body class="single-page">

    <?php
        require "./components/responsive-sidebar.php";
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/7.4.1/smooth-scrollbar.js" integrity="sha512-Oc9BKjC3rDeHWtFx4S/caKGibBAG7E0ncexJB8Rz15A4j5Q5EAmdF2RRqKCE7idcNIFF4OF9Zkd8A/jonP8O1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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


    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
