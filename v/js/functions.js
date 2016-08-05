$(document).ready(function(){
    //показ фото в отдельном окне
    $("#gall a").colorbox({rel: 'gal', title: function(){
        var t = $(this).attr('title');
        return t;
        },
        transition: "elastic",
    });
});