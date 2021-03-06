<?php
/* Smarty version 3.1.30, created on 2017-12-02 17:39:17
  from "/home/wwwroot/default/OAM/views/admin/indexc/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2274c5973474_67842544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6cded001991ed2bcb6ee353bdf92ae4cbbf49a' => 
    array (
      0 => '/home/wwwroot/default/OAM/views/admin/indexc/index.html',
      1 => 1511940692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2274c5973474_67842544 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>订饭组外卖订餐管理员后台管理系统</title>
    <link rel=stylesheet href="<?php echo CSS;?>
admin/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
admin/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
admin/backstage.css">


</head>

<body>
<div class="head">
    <div class="logo fl" onclick="window.open('?m=admin&c=Indexc&a=index','_self')"></div>
    <span class="head_text">管理员后台系统</span>

    <!-- <div class="operation_user clearfix"> -->
    <div class="link fr">
        <b>欢迎您
             <?php echo getSessions('adminName');?>

        </b>
        <a href="?m=home&c=Indexc&a=index" class="">预览前台</a>
        <a href="#" onclick="updatePage()" class="">刷新前台</a>
        <a href="?admin&c=Loginc&a=logout" class="">退出</a>
    </div>
    <!-- </div> -->
</div>
<div class="content clearfix">
    <div class="main">
        <!--右侧内容-->
        <div class="cont">
            <!-- 嵌套网页开始 -->
            <iframe src="?m=admin&c=Indexc&a=main"  frameborder="0" name="mainFrame" width="100%" height="100%" scrolling="yes"></iframe>
            <!-- 嵌套网页结束 -->
        </div>
    </div>
    <!--左侧列表-->
    <div class="menu">
        <div class="cont">
            <ul class="mList">
                <li>
                    <div class="menu-item-title" onclick="show('menu1','change1')"><span  id="change1" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">商品管理</span>
                    </div>
                    <dl id="menu1" style="display:none;">
                        <dd><a href="?m=admin&c=Goodsc&a=index" target="mainFrame">添加商品</a></dd>
                        <dd><a href="?m=admin&c=Goodsc&a=goods_list" target="mainFrame">商品列表</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu2','change2')"><span  id="change2" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">分类管理</span>
                    </div>
                    <dl id="menu2" style="display:none;">
                        <dd><a href="?m=admin&c=Catec&a=index" target="mainFrame">添加分类</a></dd>
                        <dd><a href="?m=admin&c=Catec&a=cate_list" target="mainFrame">分类列表</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu4','change4')"><span  id="change4" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">用户管理</span>
                    </div>
                    <dl id="menu4" style="display:none;">
                        <dd><a href="?m=admin&c=Userc&a=user_list" target="mainFrame">用户列表</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu6','change6')">
                        <span  id="change6" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">商家管理</span>
                    </div>
                    <dl id="menu6" style="display:none;">
                        <dd><a href="?m=admin&c=Shopc&a=index" target="mainFrame" class="">入驻店铺</a></dd>
                        <dd><a href="?m=admin&c=Shopc&a=shop_list" target="mainFrame" class="">店铺列表</a></dd>
                        <dd><a href="?m=admin&c=Shopc&a=withBalance" target="mainFrame" class="">提现申请</a></dd>
                        <dd><a href="?m=admin&c=Shopc&a=mywithBalance" target="mainFrame" class="">提现记录</a></dd>
                        <dd><a href="?m=admin&c=Shopc&a=shopApply" target="mainFrame" class="">入驻申请</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu3','change3')"><span  id="change3" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">订单管理</span>
                    </div>
                    <dl id="menu3" style="display:none;">
                        <dd><a href="?m=admin&c=Orderc&a=order_list" target="mainFrame">综合查询</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu7','change7')">
                        <span  id="change7" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">接单管理</span>
                    </div>
                    <dl id="menu7" style="display:none;">
                        <dd><a href="?m=admin&c=Orderc&a=order_moniter" target="mainFrame" class="">开始接单</a></dd>
                        <dd><a href="?m=admin&c=Orderc&a=hand_order" target="mainFrame">处理中订单</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu9','change9')"><span  id="change9" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">我的店铺</span>
                    </div>
                    <dl id="menu9" style="display:none;">
                        <dd><a href="?m=admin&c=Shopc&a=myshop" target="mainFrame">店铺详情</a></dd>
                        <dd><a href="?m=admin&c=Shopc&a=myBalance" target="mainFrame">我的余额</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu10','change10')">
                        <span  id="change10" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">缓存管理</span>
                    </div>
                    <dl id="menu10" style="display:none;">
                        <dd><a href="?m=admin&c=Cachec&a=cahceClear" target="mainFrame" class="">缓存清理</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu11','change11')">
                        <span  id="change11" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">日志管理</span>
                    </div>
                    <dl id="menu11" style="display:none;">
                        <dd><a href="?m=admin&c=Logc&a=logClear" target="mainFrame" class="">日志清理</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu12','change12')">
                        <span  id="change12" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">建议管理</span>
                    </div>
                    <dl id="menu12" style="display:none;">
                        <dd><a href="?m=admin&c=Comsuc&a=comSu" target="mainFrame" class="">投诉建议</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu8','change8')">
                        <span  id="change8" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">系统管理</span>
                    </div>
                    <dl id="menu8" style="display:none;">
                        <dd><a href="?m=admin&c=Systemc&a=phoneVali" target="mainFrame" class="">短信配置</a></dd>
                        <dd><a href="?m=admin&c=Systemc&a=emailVali" target="mainFrame" class="">邮箱配置</a></dd>
                        <dd><a href="?m=admin&c=Systemc&a=alipayVali" target="mainFrame" class="">支付配置</a></dd>
                        <dd><a href="?m=admin&c=Systemc&a=systemVali" target="mainFrame" class="">系统配置</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu5','change5')"><span  id="change5" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">管理员管理</span>
                    </div>
                    <dl id="menu5" style="display:none;">
                        <dd><a href="?m=admin&c=Adminc&a=index" target="mainFrame">添加管理员</a></dd>
                        <dd><a href="?m=admin&c=Adminc&a=admin_list" target="mainFrame">管理员列表</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</div>


<!--提示框-->
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button id="btn-close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 id="alert-title" class="modal-title">标题</h4>
            </div>
            <div class="modal-body">
                <p id="alert-body">内容</p>
            </div>
            <div class="modal-footer">
                <button id="btn-ok" type="button" class="btn btn-default" data-dismiss="modal">知道了</button>
            </div>
        </div>
    </div>
</div>
<audio id="player">
    <source src="<?php echo APP_STATIC;?>
webs/Srce/raw/2478.mp3">
</audio>

<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/jquery-1.8.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $('.mList a').click(function(e) {
            $('.title').text($(this).text());
            $('.mList a').removeClass('active');
            $(this).addClass('active');
        });
        isMSIE();

        //轮询查订单
        setInterval("checkOrder()",60000);
    });
    //展开收缩
    function show(menu,change){
        if($("#"+change).hasClass('ico-open')){
            $("#"+change).removeClass('ico-open');
            $("#"+change).addClass('ico-close');
        }else{
            $("#"+change).removeClass('ico-close');
            $("#"+change).addClass('ico-open');
        }
        //隐藏显示
        $("#"+menu).toggle();
    }
    //判断浏览器
    function isMSIE(){
        var explorer=navigator.userAgent;
        if(explorer.indexOf("MSIE") >= 0){
            alert('请使用Chrome浏览器！');
        }
    }

    //生成html
    function updatePage(){
        var postUrl="?m=admin&c=Indexc&a=updatePage";
        $.post(postUrl,
            '',
            function(data, status, xhr) {
                if(status=="success"){
                    $res= $.parseJSON(data);
                    if($res.code=="0"){ //
                        showAlert("提示","刷新成功");
                    }else if($res.code=="1"){ //

                    }
                }else{
                    showAlert("提示","服务器异常，请联系平台人员");
                }
            });
    }

    //检查订单
    function checkOrder(){
        var shopId="<?php echo getSessions('shopId');?>
";
        if(!shopId){
            return;
        }
        var requestUrl="?m=admin&c=Orderc&a=check_order&shopId="+shopId;

        $.ajax({ url:requestUrl,
            type:'post',
            async:true,
            timeout:3000,
            success:function(data){
                if(data=="success"){
                    playVoice();
                }
            },
            error:function(data){
            }
        });
    }
    //播放背景音
    function playVoice(){
        var audio = $("#player")[0];
        audio.play();
    }


<?php echo '</script'; ?>
>

</body>
</html><?php }
}
