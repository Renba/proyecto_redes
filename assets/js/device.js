$(document).ready(function(){
  displayDevices();
});

function displayDevices(){
  $.ajax({
      type:"GET",
      url:"list_devices.php",
      dataType:"html",
      success:function(response){
        $("#action").html(response);
      }
  });
}

function displayCreate(){
  $("#action").html("");
  $.ajax({
      url:"device_create.php",
      type:"GET",
      dataType:"html",
      success:function(response){
        $("#action").html(response);
      }
  });
}

  function createDevice(){
      if(validateMac($("#mac_address").val())){
        alert("Mac Adress valida");

        $( "#device-button" ).prop( "disabled", false );
        $.post('../controllers/add_device.php', $('#form').serialize(), function(response){
          $("#notice").html(response);
          if(response == 'ok'){
            displayDevices();
          }
        });
      }else{
        alert("Mac Adress Invalida");
        displayCreate();
      }
  }

  function validateMac(mac){
    // var mac = "c4:9a:02:46:a2:64";
    var re = /^(?!(?:ff:ff:ff:ff:ff:ff|00:00:00:00:00:00))(?:[\da-f]{2}:){5}[\da-f]{2}$/i;
    return re.test(mac);
  }

function deleteDevice(id){
  if (window.confirm('Seguro que quieres eliminar el dispositivo seleccionado?')){
    var parametros = {
      "id" : id,
    };
    $.ajax({
            data:  parametros,
            url:   '../controllers/remove_device.php',
            type:  'post',
            success:  function (response) {
                if(response == "ok"){
                  displayDevices();
                }else{
                  alert(response);
                }
                }
    });

  }
}
