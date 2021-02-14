$(document).ready(function(){
    // check admin password is correct or not
    $("#current_pwd").keyup(function(){
      let current_pwd = $("#current_pwd").val();
     // alert(current_pwd);
      $.ajax({
         type: 'post',
          url: '/admin/check-current-pwd',
          data: {current_pwd:current_pwd},
          Success:function(resp){
            // alert(resp);
             if(resp =="false"){
                 $("#chkCurrentPwd").html("<font color=red>Current Password is Incorrect</font>");
             }else if(resp=="true"){
                 $("#chkCurrentPwd").html("<font color=green>Current Password is Correct</font>");
             }
          },error:function(){
             alert("Error");
          }
      });
    });
});
