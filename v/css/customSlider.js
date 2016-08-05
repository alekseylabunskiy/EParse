$(document).ready(function(){

    // получаем ширину 250px, функция parseInt отсекает буквы и отдает только цифры
    var w = parseInt($(".itema").css('width')); // ширина слайда
    var pl = parseInt($(".itema").css('padding-left')); // левый паддинг
    var pr = parseInt($(".itema").css('padding-right')); // правый паддинг
    var w_item = w; // фактическая ширина итема
    var rde = w_item + 5;
    var w_cnt = ($(".itema").length); // количество итемов
    var allw = w_cnt*w_item // ширина синего блока
    $(".itemsa .cnt").css('width', allw); // назначаем ширину синему блоку
    var position = 0; // позиция слайдера
    var num_slide = 1; // сколько слайдов на экране
    var d_slide = $(".cnt"); // адресация к синему блоку для удобства

    $(".prew").click(function(){
        if(position < 0){
            d_slide.animate({left: '+='+rde}, 500 );
            ++position;
        }
    });
    $(".next").click(function(){
        if(position > ((0-w_cnt)+num_slide)){

            d_slide.animate({left: '-='+rde}, 500 ); 
            --position;
        }
    });
});