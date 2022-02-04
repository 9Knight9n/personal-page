<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/7.4.1/smooth-scrollbar.css" integrity="sha512-YihuVdpo+ob7zhdbVJXGqGU/yHvY1N8J/kuC7cFvM9cXja+Q5XYGeQMbwBJsTWuez41tKxrJMukmu+lckvD7IQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="../css/app.css" rel="stylesheet">
</head>
<body class="single-page">

    <?php
        require "./components/responsive-sidebar.php";
    ?>

<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.7.4/smooth-scrollbar.min.js" integrity="sha512-uTuRVg2sX1/cMtqmqW82QpIDCgeDKPeBddz928F4aPJgUWfdiU0GycmSgXBfQhKDy+K1SPYC/72NaNJdCnqeWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.7.4/plugins/overscroll.min.js" integrity="sha512-lMSsgFqbQrhDcCNKi9qNaggr/DWTN6jhyOkusHb1Ucx+B36qgAA/YjPBSGG0mJTHaX24k2mUFwYGaBk7PclGfg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/7.4.1/smooth-scrollbar.js" integrity="sha512-Oc9BKjC3rDeHWtFx4S/caKGibBAG7E0ncexJB8Rz15A4j5Q5EAmdF2RRqKCE7idcNIFF4OF9Zkd8A/jonP8O1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const Scrollbar = window.Scrollbar;

        Scrollbar.initAll({
            // speed:1.2,
            damping:0.08,
            // alwaysShowTracks:true,
            // continuousScrolling:true
            overscrollEffect:"bounce"
        });
    </script>


<!--    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.7.4/smooth-scrollbar.min.js' id='smooth-scrollbar-js'></script>-->
<!--<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.7.4/plugins/overscroll.min.js' id='overscroll-js'></script>-->
</body>
</html>
