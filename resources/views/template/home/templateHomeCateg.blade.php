<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield("title")</title>
    @include("navBar.styleNavBar")
    @include("style.home.styleHomeCateg")
    @include("footer.styleFooter")
</head>
<body>
    @include("navBar.navBar")
    @yield("content")
    @include("footer.footer")
</body>
</html>
