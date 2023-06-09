function addComment() {
    // Get the comment text from the input element.
    const commentText = document.getElementById("comment-text").value;
  
    // Create a new comment element.
    const comment = document.createElement("li");
  
    // Set the comment text.
    comment.textContent = commentText;
  
    // Add the comment to the comments list.
    document.getElementById("comments").appendChild(comment);
  
    // Clear the input element.
    document.getElementById("comment-text").value = "";
  }
  