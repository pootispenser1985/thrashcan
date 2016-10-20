$("#comment-form").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
    console.log("from inside the submit event");
});

console.log("from outside the submit event");


function submitForm() {
  console.log("from the callback");
  var comment = $("#comment-text").val();

  var url = "inserter.php";
  var data = "comment=" + comment;

  $.ajax({
    type: "POST", url: "inserter.php", data: "comment=" + comment,
    success: alert(data)
/*
    function(text) {
      if (text == "success") {
        formSuccess();
      }
    } */
  });
  console.log(comment);
}

function formSuccess() {
  console.log("Success!!!");
}
