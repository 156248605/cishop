$(function () {
    (function(){
        var width = $(document).width()-180;
        var height = $(document).height()-80;
        $('#main').css('width',width);
        $('#sidebar').css('height',height);
        $('#main').css('height',height);
    })();
    $(window).resize(function(){
      var width = $(document).width()-180;
      var height = $(document).height()-80;
      $('#main').css('width',width);
      $('#sidebar').css('height',height);
      $('#main').css('height',height);
  });



});




































/*
window.onload = function () {(window.onresize = function () {
    //获取可见宽度
    var width = document.documentElement.clientWidth - 200;
    //获取可见高度
    var height = document.documentElement.clientHeight - 80;
    //如果有宽度，给值
    if (width >= 0) document.getElementById('main').style.width = width + 'px';
    //如果有高度，给值
    if (height >= 0) {
        document.getElementById('sidebar').style.height = height + 'px';
        document.getElementById('main').style.height = height + 'px';
    }
})()};*/
