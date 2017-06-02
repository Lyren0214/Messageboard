<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>笨熊公子</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @section('style')

        @show
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top site-navbar">
    <div class="container">
        <div class="navbar-hearder">
            <a href="#" class="navbar-brand">请你来踏雪</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ asset('/') }}">我在这里</a></li>
                <li><a href="#">|</a></li>
                <li><a href="{{ asset('/create') }}">我想告诉你</a></li>
                <li><a href="#">|</a></li>
                <li><a href="#">联系我</a></li>
            </ul>
        </div>
    </div>
</nav>

@section('content')

    @show

<footer class="footer">
    <div class="container">
        <p>@ 笨熊公子</p>
        <p>
            <a href="http://www.miibeian.gov.cn/" target="_blank">浙ICP备16047475号</a>
            | 浙江工业大学精弘网络
        </p>
    </div>
</footer>
</body>
</html>
</body>