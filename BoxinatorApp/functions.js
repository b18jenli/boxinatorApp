
// Function to change between views 'addbox' and 'listboxes'

function showpage(pageid) {
  $(".page").hide();
  $("#" + pageid).show();
}

// Function to store box in database

$(document).ready(function() {
  $("#submitBtn").click(function() {
    event.preventDefault();

    var receiverName = $("#receiverName").val();
    var weight = $("#weight").val();
    var colour = $("#colour").val();
    var country = $("#country").val();

// Form validation w. regular expressions

    var rgexName = /^[a-zA-Z]+/;
    var checkName = rgexName.test(receiverName);

    if(receiverName==''||weight==''||colour==''||country=='') {
      alert("Please fill all fields.");
      return false;
    }
    if (checkName==false){
      alert("Invalid name. Enter in a-z format");
      return false;
    }

// Add box to database w. Ajax

    $.ajax({
      type: "POST",
      url: "add_data.php",
      data: {
        receiverName: receiverName,
        weight: weight,
        colour: colour,
        country: country
      },
      cache: false,
      success: function(data){


          window.location.reload(true);
          alert(data);

          //showpage('listboxes');


      },

      error: function(xhr, status, error) {
        console.error(xhr);
      }
    });
  });

// Fetch and display boxes from database w. Ajax

  $.ajax({
    url: "display_data.php",
    type: "GET",
    dataType: "html",
    cache: false,
    success: function(data){
      $('#table').html(data);
    }
  });
});
