

$(document).ready(function() {
  $("#commentbtn").click(function() {
    var recipeid = 1;
    var comment = $("#commenttxtarea").val();

    var url = $(location).attr('origin') + '/myrecipes/index.php/comments/add_comment?';
    var data = 'recipeid=' + recipeid + '&comment=' + comment;

    $.ajax({
      url:url+data, 
      success:function(result) {
        $("#comments").html(result);
      }
    });
  });
});