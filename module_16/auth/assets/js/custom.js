(function ($) {
  $(document).ready(function () {

    /**
     * User Registration System 
     */
    $('#user_reg_form').submit(function (e) {
      e.preventDefault();

      let name = $('#user_reg_form input[name="name"]').val();
      let email = $('#user_reg_form input[name="email"]').val();
      let pass = $('#user_reg_form input[name="pass"]').val();

      if (name == '' || email == '' || pass == '') {
        $('.msg').html(validate('All fields are required !'));
      } else {

        $.ajax({
          url: 'inc/ajax_template/add_users.php',
          method: 'POST',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function (data) {
            $('.msg').html(validate('User registration successful !', 'success'));
            $('#user_reg_form')[0].reset();
            console.log(data);
          }
        });
      }
    });


    /**
     * User login
    */

    $("#login_form").submit(function(e) {
      e.preventDefault();

      // get login data
      const access = $("#access").val();
      const password = $("#access").val();

      // validation checking
      alert(access + password);

    })









  });
})(jQuery)