/**
 * Created by Administrator on 2017/9/21.
 */
$(function () {
    $("#navList>ul li").not("li.ltext").hover(function () {
        $(this).addClass("act").siblings("li").not("li.ltext").removeClass("act");
    })
    $("#navList>ul li").not("li.ltext").on("click", function () {
        $(this).addClass("act").siblings("li").not("li.ltext").removeClass("act");
    })
})