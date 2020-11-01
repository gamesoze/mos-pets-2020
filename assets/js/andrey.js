var overlay = "<div class=\"overlay\">";
$(
    function() {
        $("#add").click(function() {
            $(".footer").after(overlay); 
            $(".overlay").click(function(){
                alert('asd');
                $(".overlay").remove();
            })    
        })

    }
)
