let btnForm = document.querySelector("#comments-form button");
let countComments = 0;
let idComment = 0;

btnForm.onclick = function(){
    idComment++;
    //будем проверять данные, которые написаны в форме
    let form = document.querySelector("#comments-form");

    if(form.name.value.length < 4 ){
        document.querySelector("#error").innerHTML = "Длина имени не менее 4 символов";
        return false;
    }
    else if (form.comments.value.length < 10 ){
        document.querySelector("#error").innerHTML = "Длина сообщения не менее 10 символов";
        return false;
    }

    document.querySelector("#error").innerHTML="";

    //подсчет комментариев

    if(countComments == 0){
        document.querySelector("#comments").innerHTML = "";
    }
        countComments++;
        document.querySelector(".count-comm").innerHTML = countComments;
    

    //вывод комментария

    let newComment = "<div class = 'comment' id = 'block-"+ idComment + 
        "'>" + 
        "<span class = 'delete' onclick = 'delComm("+ idComment +
        ")'>&times;</span>" +
        "<p class = 'name'>" + form.name.value + "</p>" + 
        "<p class = 'mess'>" + form.comments.value + "</p>" + 
    "</div>";

    document.querySelector("#comments").insertAdjacentHTML('afterbegin', newComment);

    //очистка формы сообщения
    form.comments.value = "";
};

function delComm(id){
    document.querySelector("#block-" + id).remove();
    //после удаления коммента, убавляем количество комментариев
    countComments--;
    document.querySelector(".count-comm").innerHTML = countComments;

    if(countComments == 0){
        document.querySelector("#comments").innerHTML = "Пока комментариев нет";
    }
};

