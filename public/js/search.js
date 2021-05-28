$(function(){
    if($("#search")){

        $.get({
            url: '/search', 
            data: { q: ""}, 
            success: function (data){
                $("#results").html(data); 
            }
        });

        $("#search").on("input", function(){
            let query = $("#search").val();

            $.get({
                url: '/search',
                data: { q: query  }, 
                success: function (data){
                    $("#results").html(data);
                    console.log(data); 
                }
            });
        });
    }
});