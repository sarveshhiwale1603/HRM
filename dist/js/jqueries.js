$(document).ready(function() {
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
});