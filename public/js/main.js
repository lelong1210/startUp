$(document).ready(function () {
    //https://api.covid19api.com/dayone/country/vietnam
    $("#test").click(function (e) { 
        alert("--><><--");
        $.ajax({
            type: "get",
            url: "https://api.covid19api.com/dayone/country/vietnam",
            dataType: "json",
            success: function (response) {
                jQuery(response).each(function(i, item){
                   $("#content").append(item.ID+"<br>");
                });
            }
        });
    });
});