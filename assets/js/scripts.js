$(".invest-box").each(function () {
    var width = $(this).find(".ratio").data("w");
    $(this).find(".fill").width(width + "%");
});