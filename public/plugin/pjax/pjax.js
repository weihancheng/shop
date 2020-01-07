//定义加载区域
$(document).pjax("a",'#pjax-container');
//定义pjax有效时间，超过这个时间会整页刷新
$.pjax.defaults.timeout = 2000;
//显示加载动画
$(document).on('pjax:click', function() {
    $("#loading").show();
});
//隐藏加载动画
$(document).on('pjax:end', function() {
    $("#loading").hide();
});
