$(document).ready(function() {
    //client details
$("#client_detail_update1").click(function(){
    let user_id = $("#user_id").val();
    let first_name = $("#first_name").val();
    let last_name = $("#last_name").val();
    let email = $("#email").val();
    let Username = $("#Username").val();
    let status = $("#status").val();
    let contact = $("#contact").val();
    let gender = $("#gender").val();
    let country = $("#country").val();
    let Address = $("#Address").val();
    let Address2 = $("#Address2").val();
    let City = $("#City").val();
    let state = $("#state").val();
    let zip = $("#zip").val();
    let client_detail_update1 = $("#client_detail_update1").val();
$.ajax({
url:'check.php',
type:'POST',
data:{
    user_id:user_id,
    first_name:first_name,
    last_name:last_name,
    email:email,
    Username:Username,
    status:status,
    contact:contact,
    gender:gender,
    country:country,
    Address:Address,
    Address2:Address2,
    City:City,
    state:state,
    zip:zip,
    client_detail_update1:client_detail_update1
},
cache: false,
success: function(data) {
    alert(data);
}
});
});

//change password cur_pass
$("#changepassword").click(function(){
    let cur_id = $("#cur_id").val();
    let cur_pass = $("#cur_pass").val();
    let new_pass = $("#new_pass").val();
    let con_pass = $("#con_pass").val();
    let changepassword = $("#changepassword").val();

    $.ajax({
        url:'check.php',
        type:'POST',
        data:{
            cur_id:cur_id,
            cur_pass:cur_pass,
            new_pass:new_pass,
            changepassword:changepassword
        },
        cache: false,
        success: function(data) {
            alert(data);
        }
        });
});

//project status progress
$("#project_details").click(function(){
    let progressid = $("#progressid").val();
    let range_5 = $("#range_5").val();
    let project_status = $("#project_status").val();
    let project_pro = $("#project_pro").val();
    let project_details = $("#project_details").val();

    $.ajax({
        url:'api.php',
        type:'POST',
        data:{
            progressid:progressid,
            range_5:range_5,
            project_status:project_status,
            project_pro:project_pro,
            project_details:project_details
        },
        cache: false,
        success: function(data) {
            alert(data);
        }
        });
});

});