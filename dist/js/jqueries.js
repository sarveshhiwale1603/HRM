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

//project status progress   
$("#updateeditproject").click(function(){
    let editid = $("#editid").val();
    let title = $("#title").val();
    let editclient = $("#editclient").val();
    let budget_hours = $("#budget_hours").val();
    let starteditdate = $("#starteditdate").val();
    let endeditDate = $("#endeditDate").val();
    let editsummary = $("#editsummary").val();
    let editteam = $("#editteam").val();
    let editdesc=$(".editdesc").val();
    let updateeditproject=$("#updateeditproject").val();

    $.ajax({
        url:'check.php',
        type:'POST',
        data:{
            editid:editid,
            title:title,
            editclient:editclient,
            budget_hours:budget_hours,
            starteditdate:starteditdate,
            endeditDate:endeditDate,
            editsummary:editsummary,
            editteam:editteam,
            editdesc:editdesc,
            updateeditproject:updateeditproject
        },
        cache: false,
        success: function(data) {
            alert(data);
        }
        });
});

//time log
$("#time_log_id").click(function(){
    let timeproid = $("#timeproid").val();
    let employee_time_bugs_name = $("#employee_time_bugs_name").val();
    let startpro = $("#startpro").val();
    let endpro = $("#endpro").val();
    let timeLogsStartDate = $("#timeLogsStartDate").val();
    let timeLogsEndDate = $("#timeLogsEndDate").val();
    let memo = $("#memo").val();
    let time_log_id = $("#time_log_id").val();
    $.ajax({
        url:'check.php',
        type:'POST',
        data:{
            timeproid:timeproid,
            employee_time_bugs_name:employee_time_bugs_name,
            startpro:startpro,
            endpro:endpro,
            timeLogsStartDate:timeLogsStartDate,
            timeLogsEndDate:timeLogsEndDate,
            memo:memo,
            time_log_id:time_log_id
        },
        cache: false,
        success: function(data) {
            $("#display_timelog").html(data);
        }
        });
});

$("#bugssubmit").click(function(){
	let bugsdesc=$(".bugsdesc").val();
	let bugssubmit=$("#bugssubmit").val();
	let bugid=$("#bugid").val();
	$.ajax({
		url:'check.php',
		type:'POST',
		data:{bugsdesc:bugsdesc,
		bugssubmit:bugssubmit,
		bugid:bugid},
		cache:false,
		success:function(data1){
			alert(data1);
		}
	});
});


$('.dnkbugsid').click(function(){
  let dnkbugid = $(this).data('id');

  $.ajax({
   url: 'check.php',
   type: 'post',
   data: {dnkbugid: dnkbugid,},
   success: function(response2){ 
     alert(response2); 
   }
 });
});


$('#savetask').click(function(){
    let taskid=$("#taskid").val();
	let tasktitle=$("#tasktitle").val();
	let taskstartdate=$("#taskstartdate").val();
    let taskEndDate=$("#taskEndDate").val();
	let in_time=$("#in_time").val();
    let taskproject=$("#taskproject").val();
    let tasksummary=$("#tasksummary").val();
    let desc=$("#desc").val();
	let savetask=$("#savetask").val();
	$.ajax({
		url:'check.php',
		type:'POST',
		data:{taskid:taskid,
            tasktitle:tasktitle,
            taskstartdate:taskstartdate,
            taskEndDate:taskEndDate,
            in_time:in_time,
            taskproject:taskproject,
            tasksummary:tasksummary,
            savetask:savetask,
            desc:desc},
		cache:false,
		success:function(taskdata){
			alert(taskdata);
		}
	});
});

});