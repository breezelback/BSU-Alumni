
$('#btnSubmitComment').click(function(){
  let forum_comment = $('#forumComment').val();
  let forum_id = $('#forumId').val();
	let commentator_id = $('#commentatorId').val();

    $.ajax({
      url: "methods/custom.php",
      method: "post",
      dataType: "text",
      data: {
        key: "post_comment",
        forum_comment: forum_comment,
        forum_id: forum_id,
        commentator_id: commentator_id
      }, success: (response) => {
        $('#forumComment').val('');
      }
    })
});



    
function fetchComments(forumId)
{
    $.ajax({
      url:"methods/fetchComments.php",
      method:"POST",
      dataType: "text",
      data: {
        forumId: forumId
      },
      success:function(data){
        $('#alumniComments').html(data);
      }
    })
}
  
function fetchCommentCount(forumId)
{
    $.ajax({
      url:"methods/fetchCommentCount.php",
      method:"POST",
      dataType: "text",
      data: {
        forumId: forumId
      },
      success:function(data){
        $('#commentCount').html(data);
      }
    })
}


$('#btnUpdate').click(function(){

  let update_name = $('#update_name').val();
  let update_middlename = $('#update_middlename').val();
  let update_lastname = $('#update_lastname').val();
  let update_email = $('#update_email').val();
  let update_number = $('#update_number').val();
  let update_dpartment = $('#update_dpartment').val();
  let update_course = $('#update_course').val();

  if ((update_name == '') || (update_middlename == '') || (update_lastname == '') || (update_email == '') || (update_number == '') || (update_dpartment == '') || (update_course == '')) 
  {
    alert('Please fill out required fields!');
  }
  else
  {
    $.ajax({
      url: "methods/custom.php",
      method: "post",
      dataType: "text",
      data: {
        key: "update_account",
        update_name: update_name,
        update_middlename: update_middlename,
        update_lastname: update_lastname,
        update_email: update_email,
        update_number: update_number,
        update_dpartment: update_dpartment,
        update_course: update_course
      }, success: (response) => {
        alert('Success');
        location.reload();
      }
    })
  }

});


$('#btnUpdatePassword').click(function(){

  let update_password = $('#update_password').val();
  let update_confirm_password = $('#update_confirm_password').val();

  if ((update_password == '') || (update_confirm_password == '')) 
  {
    alert('Please fill out required fields!');
  }
  else if (update_password != update_confirm_password) 
  {
    alert('Password do not match!');
  }
  else
  {
    $.ajax({
      url: "methods/custom.php",
      method: "post",
      dataType: "text",
      data: {
        key: "update_password",
        update_password: update_password
      }, success: (response) => {
        alert('Success');
        location.reload();
      }
    })
  }

});