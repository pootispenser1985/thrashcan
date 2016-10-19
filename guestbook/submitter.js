$("#comment-form").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
    console.log("from inside the submit event");
});

console.log("from outside the submit event");


function submitForm() {
  console.log("from the callback");
};
