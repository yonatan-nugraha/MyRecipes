

$(document).ready(function() {
  $("#commentbtn").click(function() {
    var recipeid = $(location).attr('pathname').split('/').pop();
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

function getRecipeImgId(id) {
  var imgid = "#" + id;
  $("a").removeClass("active");
  $(imgid).addClass("active");

  $.ajax({
    url:$(location).attr('origin') + '/myrecipes/index.php/recipes/store_recipeimg/' + id,
  });
}