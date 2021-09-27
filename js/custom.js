
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

function fetchComments()
{
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
}