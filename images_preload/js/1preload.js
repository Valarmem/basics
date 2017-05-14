// 图片预加载
// 使用闭包的形式模拟局部作用域,不会和外面的作用域冲突了
(function ($){

    function Preload(img,options) {
        this.imgs = (typeof imgs === 'string')?[imgs]:imgs;
        this.opts = $.extend({},Preload.DEFAULTS,options); //将options覆盖Preload.DEFAULTS,并保存新的对象

        this._unordered();
    }
    Preload.DEFAULTS = {
        each:null, // 每一张图片加载完成后执行这个方法
        all:null    // 所有图片加载完成后执行这个方法
    };

    // 无序加载
    Preload.prototype._unordered = function () {
        var imgs = this.imgs;
        var opts = this.opts;

        var count = 0,len = imgs.length;


        $.each(imgs,function(i,src){
            if (typeof src != 'string') return;

            var imgObj = new Image();

            $(imgObj).on('load error',function(){
                opts.each&&opts.each(count);

                if (count >= len-1) {
                    opts.all && opts.all();
                }
                count++;
            });
            imgObj.src = src;
        })
    };
    //jQuery 如何完成一个插件的编写
    // 方法１：$.fn.extend -> $('#img').preload()
    // 方法２：$.extend -> $.preload();

    $.extend({
        preload:function (imgs,opts) {
            new Preload(imgs,opts);
        }
    })

})(jQuery);
