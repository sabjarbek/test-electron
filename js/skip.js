$("#buttonCheck").on("click", function(){
    var day = $("#day").val().trim();
    var week = $("#week").val().trim();
    var groups= $("#groups").val().trim();


    $.ajax({
        url:'php/schedule.php',
        type:'POST',
        cache: false,
        data: {'day':day, 'week':week, 'groups':groups },
        dataType:'html',
        beforeSend:function(){
            $("#buttonCheck").prop("disabled", true);
        },
        success:function(data){
            document.getElementById('result').innerHTML = data;            
            $("#buttonCheck").prop("disabled", false);
        }
    });

});