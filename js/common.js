$("#sendMessage").on("click", function(){
    var names = $("#names").val().trim();
    var message = $("#message").val().trim();
    if (names ==""){
        errorMess1.style.cssText=`display: block !important;`;
        return false;
    }
    else if(message ==""){        
        errorMess2.style.cssText=`display: block !important;`; 
        return false;
    }
    errorMess1.style.cssText=`display: none !important;`;
    errorMess2.style.cssText=`display: none !important;`;

    $.ajax({
        url:'php/ajax.php',
        type:'POST',
        cache: false,
        data: {'names':names, 'message':message },
        dataType:'html',
        beforeSend:function(){
            $("#sendMessage").prop("disabled", true);
        },
        success:function(data){
            document.getElementById('result').innerHTML = data;
            
            $("#sendMessage").prop("disabled", false);
        }
    });

});
$("statusButton").on("click", function(){    
    red.style.cssText=`color: red !important;`;
});


/*
$("#sendMessage").on("click", function(){
alert ("sdfa");
})*/ 