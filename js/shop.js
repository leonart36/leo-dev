$('.buy').click(function(){//при клике на кнопке Купить
var price=$(this).data('price'),//получаем 
    product=$(this).data('product');//значения
    $('#price').val(price);//и присваиваем их
    $('#product').val(product);//в модальное окно
    $('#card').modal();//вывод модального окна
    return false;//длятого что бы не происходило перехода по ссылке
});