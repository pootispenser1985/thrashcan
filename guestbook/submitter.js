$("#guestbook-form").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm() {
  var comment = $("#comment-text").val();

  $.ajax({
    type: "POST",
    url: "inserter.php",
    data: "comment=" + comment,
    success: function(text){
      if (text == "success"){
          formSuccess();
      }
      else if (text == "repost") {
          formRepost();
      }
    }
  });
}

function formSuccess(){
  document.getElementById("msgSubmit").innerHTML = "Comment Posted!";
  $("#comment-feed").load("getfeed.php");
  $("#comment-text").val(" ");
}

function formRepost() {
  document.getElementById("msgSubmit").innerHTML = "You've already posted a comment.";
  $("#comment-text").val(" ");
}
