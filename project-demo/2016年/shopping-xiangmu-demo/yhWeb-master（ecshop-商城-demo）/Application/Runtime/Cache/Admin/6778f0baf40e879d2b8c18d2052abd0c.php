<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>左侧导航menu</title>
    <link href="/yhWeb/Public/Admin/Css/css.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="/yhWeb/Public/Admin/Js/sdmenu.js"></script>
    <script type="text/javascript">
        // <![CDATA[
        var myMenu;
        window.onload = function () {
            myMenu = new SDMenu("my_menu");
            myMenu.init();
        };
        // ]]>
    </script>
    <style type=text/css>
        html {
            SCROLLBAR-FACE-COLOR: #538ec6;
            SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0;
            SCROLLBAR-SHADOW-COLOR: #2c6daa;
            SCROLLBAR-3DLIGHT-COLOR: #dce5f0;
            SCROLLBAR-ARROW-COLOR: #2c6daa;
            SCROLLBAR-TRACK-COLOR: #dce5f0;
            SCROLLBAR-DARKSHADOW-COLOR: #dce5f0;
            overflow-x: hidden;
        }

        body {
            overflow-x: hidden;
            background: url(/yhWeb/Public/Admin/Images/Main/leftbg.jpg) left top repeat-y #f2f0f5;
            width: 194px;
        }
    </style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
    <div><img src="/yhWeb/Public/Admin/Images/Main/member.gif" width="44" height="44"/></div>
    <span>用户:<?php echo (session('adminName')); ?><br>角色：超级管理员</span>
</div>
<div style="float: left" id="my_menu" class="sdmenu">
    <div class="collapsed">
        <span>会员模块</span>
        <a href="/yhWeb/Admin/Member/memberList" target="mainFrame" onFocus="this.blur()">浏览会员</a>
        <a href="/yhWeb/Admin/Member/addMember" target="mainFrame" onFocus="this.blur()">添加会员</a>
    </div>
    <div>
        <span>类别模块</span>
        <a href="/yhWeb/Admin/Type" target="mainFrame" onFocus="this.blur()">浏览一级分类</a><!--
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">级别权限</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a>
      --></div>
    <div>
        <span>商品模块</span>
        <a href="/yhWeb/Admin/Goods/goodsList/state/1" target="mainFrame" onFocus="this.blur()">浏览新商品</a>
        <a href="/yhWeb/Admin/Goods/goodsList/state/2" target="mainFrame" onFocus="this.blur()">浏览在售商品</a>
        <a href="/yhWeb/Admin/Goods/goodsList/state/3" target="mainFrame" onFocus="this.blur()">浏览下架商品</a>
        <a href="/yhWeb/Admin/Goods/subject" target="mainFrame" onFocus="this.blur()">添加专题</a>
        <a href="/yhWeb/Admin/Goods/goodsImage" target="mainFrame" onFocus="this.blur()">商品图片</a>
        <a href="/yhWeb/Admin/Goods/goodsProperty" target="mainFrame" onFocus="this.blur()">商品属性</a>
    </div>
    <div>
        <span>订单模块</span>
        <a href="/yhWeb/Admin/Order/" target="mainFrame" onFocus="this.blur()">浏览订单</a><!--
        <a href="main_list.html" target="mainFrame" onFocus="this.blur()">级别权限</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a>
      --></div>
</div>
</body>
</html>