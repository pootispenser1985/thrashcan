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
    }
  });
}

function formSuccess(){
  $( "#msgSubmit" ).removeClass( "hidden" );
  $("#comment-feed").load("getfeed.php");
  $("#comment-text").val(" ");
}
