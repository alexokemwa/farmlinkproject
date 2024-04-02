$(document).ready(function () {
    $('.delbtnontransit').click(function (e) { 
        e.preventDefault();
        var id = $(this).attr('value');
        // alert(id);
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
             $.ajax({
                type: "POST",
                url: "../app/core/farmercores/deleteontransit.php",
                data: {
                    product_id: id,
                    delbtnontransit: true
                },
                success: function (response) {
                    // Handle success response here
                    response = JSON.parse(response);
                    if (response.message === "Delete successful"){
                        swal("Success!", "Product deleted successfully!", "success");
                        $("#activetable").load(location.href + " #activetable");
                    }
                    else if (response.message === "Delete failed"){
                        swal("Oops!", "Something went wrong!", "error");
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    swal("Oops!", "Something went wrong!", "error");
                    console.error(xhr.responseText);
                }
             });
            } else {
              swal("Your data is safe!");
            }
          });
    });
});
