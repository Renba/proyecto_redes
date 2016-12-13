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
    var regex = /^([0-9A-F]{2}[:-]){5}([0-9A-F]{2})$/;
    return regex.test(mac);
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
