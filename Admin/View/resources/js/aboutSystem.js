$(document).ready(function() {
    // to show the paragraph based on options
    $('.receiverOptions').change(function() {
      var selectedValue = $(this).val();
      if(selectedValue !== "Please Select A Paragraph") {
        $.ajax({
          url: '../Controller/showParagraphController.php',
          data: { title: selectedValue },
          type: 'POST',
          success: function(data) {
            $('#paragraph').val(data);
            $('#paragraphTitle').val(selectedValue);
          },
          error: function(xhr, status, error) {
            console.log("Error: " + error);
          }
        });
      }
    });
  
    // to delete the selected paragraph
    $('.deleteButton').click(function() {
      var selectedValue = $('.receiverOptions').val();
      if(selectedValue !== "Please Select A Paragraph") {
        $.ajax({
          url: '../Controller/deleteParagraphController.php',
          data: { title: selectedValue },
          type: 'POST',
          success: function(data) {
            console.log(data);
            $('.receiverOptions option:selected').remove();
            $('#paragraphTitle').val('');
            $('#paragraph').val('');
          },
          error: function(xhr, status, error) {
            console.log("Error: " + error);
          }
        });
      }
    });

    // to add new paragraph
    $('.addNewParagraph').click(function() {
        $('#paragraphTitle').val('');
        $('#paragraph').val('');
      });

// to save a new paragraph
  $('.saveButton').click(function() {
    var title = $('#paragraphTitle').val();
    var description = $('#paragraph').val();
    if (title && description) {
      $.ajax({
        url: '../Controller/saveParagraphController.php',
        data: { title: title, description: description },
        type: 'POST',
        success: function(data) {
          console.log(data);
          // refresh the dropdown menu to include the new paragraph
          location.reload();
        },
        error: function(xhr, status, error) {
          console.log("Error: " + error);
        }
      });
    }
  });
});



  
