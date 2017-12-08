 function getCityInfo() {
        //clear already inputted on spans:
         $("#city").empty();
          $("#lon").empty();
           $("#lat").empty();
             $.ajax({
                type: "get",
                url: "http://hosting.otterlabs.org/laramiguel/ajax/zip.php",
                dataType: "json",
                data: {
                    "zip_code": $("#zip").val()
                },
                success: function(data,status) {
                    console.log(data); 
                    if (!data.city) {
                        
                        $("#message").html("Zip code is invalid"); 
                        $('#message').show();
                        return;
                    }
                    $('#message').hide();
                    $("#city").html(data.city);
                    $("#lon").html(data.longitude);
                    $("#lat").html(data.latitude);
                    $("#city").show();
                },
                error: function(data,status){

                    
                },
                complete: function(data,status) { //optional, used for debugging purposes
                     //alert(status);
                }
             });
        }
function getCounty(){
            $.ajax({
                type: "get",
                url: "http://hosting.otterlabs.org/laramiguel/ajax/countyList.php",
                dataType: "json",
                data: {"state": $("#stateList").val()},
                success: function(data,status) {
                    // alert(data); 
                    $("#county-list").html("");
                    for (var i = 0; i < data.counties.length; i++) {
                        $("#county-list").append("<option>" + data.counties[i].county + "</option>");
                    }
                  },
                complete: function(data,status) { //optional, used for debugging purposes
                     //alert(status);
                }
            });
}