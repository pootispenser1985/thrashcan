//A lot of this is from:
//https://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068

msgSubmitSpan = document.getElementById("msgSubmit");

$("#guestbook-form").submit(function(event){
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
      msgSubmitSpan.style.visibility = "visible";
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
  msgSubmitSpan.innerHTML = "Comment Posted!";
  msgSubmitSpan.style.color = "green";
  $("#comment-feed").load("getfeed.php");
  $("#comment-text").val(" ");
}

function formRepost() {
  msgSubmitSpan.innerHTML = "You've already posted a comment.";
  msgSubmitSpan.style.color = "red";
  $("#comment-text").val(" ");
}
