$(document).ready(function(){
    // check admin password is correct or not
    $("#current_pwd").keyup(function(){
      let current_pwd = $("#current_pwd").val();
     // alert(current_pwd);
      $.ajax({
         type: 'post',
          url: 'check-current-pwd',
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

    $(".updateSectionStatus").click(function(){
     var status = $(this).text();
     var section_id =$(this).attr("section_id");
     $.ajax({
         type: 'post',
         url: 'update-section-status',
         data: {status:status,section_id:section_id},
         success:function(resp){
             if(resp['status']==0){
                 $("#section-"+section_id).html("<a class='updateSectionStatus' href='javascript:void(0)'>Inactive</a>");
             }else if(resp['status']==1){
                 ("#section-"+section_id).html("<a class='updateSectionStatus' href='javascript:void(0)'>Active</a>");
             }
        },error:function(){
            alert("Error");
        }
     });
    });

    $(".updateCategoryStatus").click(function(){
        var status = $(this).text();
        var category_id =$(this).attr("category_id");
        $.ajax({
            type: 'post',
            url: 'update-category-status',
            data: {status:status,category_id:category_id},
            success:function(resp){
                if(resp['status']==0){
                    $("#category-"+category_id).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Inactive</a>");
                }else if(resp['status']==1){
                    ("#category-"+category_id).html("<a class='updateCategoryStatus' href='javascript:void(0)'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });
});
