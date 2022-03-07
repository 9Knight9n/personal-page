<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script>
        let addr = window.location.href
        if (addr.includes("index.php?page=demo"))
            window.location.href = addr.replace("index.php?page=demo","demo.html")
        else if (addr.includes("index.php?page=blog"))
            window.location.href = addr.replace("index.php?page=blog","blog.html")
        else if (addr.includes("index.php?page=history"))
            window.location.href = addr.replace("index.php?page=history","history.html")
        else if (addr.includes("index.php?page=shop"))
            window.location.href = addr.replace("index.php?page=shop","shop.html")
        else if (addr.includes("index.php?page=contact"))
            window.location.href = addr.replace("index.php?page=contact","contact.html")
        else if (addr.includes("index.php?page=home"))
            window.location.href = addr.replace("index.php?page=home","home.html")
    </script>
</head>
<body>
hello
</body>
</html>

