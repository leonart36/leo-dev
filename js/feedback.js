$("#sendMail").on("click", function(){
    var email = $("#email").val().trim();
    var name = $("#name").val().trim();
    var phone = $("#phone").val().trim();
    var message = $("#message").val().trim();

    if(email == ""){
        $("#errorMessage").text("Введите Ваш E-mail");
        return false;
    } else if(name == ""){
        $("#errorMessage").text("Введите Ваше Имя");
        return false;
    } else if(message.length <5){
        $("#errorMessage").text("Введите Ваше сообщение");
        return false;
    } 
    $("#errorMessage").text("");

    $.ajax({
        url: 'ajax/mail.php',//куда мы передаем
        type: 'POST',
        cache: false, //используем ли мы кэш
        data: { 'email': email, 'name': name, 'phone': phone, 'message': message},
        dataType: 'html', //тип получаемых значений
        beforeSend: function(){
            $("#sendMail").prop("disebled", true);//пока страница будет грузится- кнопка будет не доступна
        },
        success: function(data){
            if(!data)
            alert("Были ошибки, сообщение не отправлено!");
            else
                $("mailForm").trigger("reset");

            $("#sendMail").prop("disebled", false);

        } 
    })

});