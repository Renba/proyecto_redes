function doLogin(email, password){
  var parametros = {
          "email" : email.toUpperCase(),
          "password" : password
  };
  $.ajax({
          data:  parametros,
          url:   '../controllers/login.php',
          type:  'post',
          beforeSend: function () {
                  $("#notice").html("Procesando, espere por favor...");
          },
          success:  function (response) {
              $("#notice").html(response);
              if(response == "ok"){
                window.location.href="index.php"
              }else if(response == "new"){
                window.location.href="new_user.php"
              }
          }
  });
  }
