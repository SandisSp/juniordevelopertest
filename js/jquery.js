$(document).ready(function(){
    $("#form1 #selectall").click(function(){
        $("#form1 input[type='checkbox']").prop('checked',this.checked);
    });
});

$('#form1').submit(function(e){
    if ( !$('#selectall').is(':checked') ) return false;
    $("#123").addClass("hidden");
});

$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});

        


