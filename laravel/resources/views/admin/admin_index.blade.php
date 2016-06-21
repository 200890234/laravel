<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>laravel cms - admin index</title>
    @include('admin.inc.assets')
</head>
<body id="top_body">
    <?php 
        // var_dump($adminInfo[0]->admin_id) //获取单条数据的单个值
    ?>
    <!-- {{$adminInfo[0]->admin_id}} //模板写法-->
    <!-- 循环显示单条数据 -->
    <!-- @foreach ($adminInfo as $info)
        <?php //echo $info->admin_id; //php 输出 ?>
        {{$info->admin_id}}
    @endforeach; -->
    <header class="header" id="header">
        <nav class="topnav">
            <ul class="topul" id="top_menu">
                <li><a href="javascript:void(0);" mtype="sys">系统设置</a></li>
                <li><a href="javascript:void(0);" mtype="info">信息管理</a></li>
                <li><a href="javascript:void(0);" mtype="column">栏目管理</a></li>
                <li><a href="javascript:void(0);" mtype="tpl">模板管理</a></li>
                <li><a href="javascript:void(0);" mtype="user">用户管理</a></li>
                <li><a href="javascript:void(0);" frame="{{ url('admin/main') }}" target="_blank">后台首页</a></li>
                <li><a href="{{ url('') }}">网站首页</a></li>
                <li id="logout">
                    <a href="javascript:void(0);">[退出]</a>
                </li>
                <li id="adminInfo">
                    <a href="javascript:void(0);" frame="{{ url('admin/main') }}">{{$adminInfo[0]->admin_name}}</a>
                </li>
                <div class="clear"></div>
            </ul>
        </nav>
    </header>
    <section class="main_left">
        <div id="loader_left">
            <IFRAME frameBorder="0" id="left" name="left" scrolling="auto" src="{{ url('admin/left') }}?mtype=column" style="width: 100%;height:100%;visibility:inherit;z-index:2"></IFRAME>
        </div>
    </section>
    <section class="main_right">
        <div class="right_wrap">
            <div id="loader_right">
                <IFRAME frameBorder="0" id="right" name="right" scrolling="auto" src="{{ url('admin/main') }}?mtype=column" style="width: 100%;height:100%;visibility:inherit;z-index:2"></IFRAME>
            </div>
        </div>
    </section>
    <section class="clear"></section>
    <footer class="footer">
        
    </footer>
</body>
</html>
