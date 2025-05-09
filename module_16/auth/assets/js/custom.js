(function ($) {
  $(document).ready(function () {
    /**
     * User Registration System
     */
    $("#user_reg_form").submit(function (e) {
      e.preventDefault();

      let name = $('#user_reg_form input[name="name"]').val();
      let email = $('#user_reg_form input[name="email"]').val();
      let pass = $('#user_reg_form input[name="pass"]').val();

      if (name == "" || email == "" || pass == "") {
        $(".msg").html(validate("All fields are required !"));
      } else {
        $.ajax({
          url: "inc/ajax_template/add_users.php",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function (data) {
            $(".msg").html(
              validate("User registration successful !", "success")
            );
            $("#user_reg_form")[0].reset();
          },
        });
      }
    });

    $(".cancel_user").click(function (e) {
      // get deleted id
      const deleteId = $(this).attr("delete_id");
      const card = $('#user-card-' + deleteId);

      // send ajax request for delete user
      $.ajax({
        url: "inc/ajax_template/cancel.php",
        method: "POST",
        data: { id: deleteId },
        success: function (response) {
          if (response.trim() === 'success') {
              alert("User deleted from cookies");
              card.fadeOut(300, function () {
                  $(this).remove();
              });
          } else {
              alert('Failed to remove user.');
          }
        },
        error: function () {
            alert('Something went wrong.');
        }
      })
    })


    /***
     * User login by cookies
     */
    $(".full_card").click(function(e) {
      const loginId = $(this).attr("login_id");

      $.ajax({
        url: "inc/ajax_template/login.php",
        method: "POST",
        data: { id: loginId },
        success: (data) => {

        }
      })
    })

 

    /**
     * User login Functionalities
     */
    // $("#login_form").submit(function(e) {
    //   e.preventDefault();

    //   // get login data
    //   const access = $("#access").val();
    //   const password = $("#password").val();

    //   // validation checking
    //   if (access == "" || password == "") {

    //     // show error message
    //     alert("All fields are required");
    //   } else {
        
    //     $.ajax({
    //       url: "inc/ajax_template/login.php",
    //       method: "POST",
    //       data: { access, password },
    //       success: function (data) {
    //         $("#body").html(data);
    //       },
    //     });
    //   }
    // });
  });
})(jQuery);
