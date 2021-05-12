<!doctype html>
<html lang="en">
  <head>
    <title>Fotos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-6">
            <div class="card mt-3">
              <div class="card-body">
                <h4 class="card-title">Fotografias</h4>
                <p class="card-text">Impresion Digital</p>
                <div class="row">
                  <label for="cantidadfotos">Cantidad Fotos:</label>
                  <input type="number" name="cantidadfotos" id="cantidadfotos" class="form-control" pattern="[0-9]+" required value="1">
                </div>
                <div class="row mt-2">
                  <label for="tipodefoto">Tipo de Foto:</label>
                  <select name="tipodefoto" id="tipodefoto" class="form-control">
                    <option value="seleccion">--selecciona el tipo de foto--</option>
                    <option value="B_N">Blanco y negro</option>
                    <option value="color">Color</option>
                  </select>
                </div>
                <div class="row mt-2">
                    <div class="col">
                      <label for="3x4">3x4</label>
                      <input type="radio" name="radio" id="3x4">
                      <br>
                      <label for="4x6">4x6</label>
                      <input type="radio" name="radio" id="4x6">
                    </div>
                    <div class="col">
                      <label for="5x7">5x7</label>
                      <input type="radio" name="radio" id="5x7">
                      <br>
                      <label for="6x8">6x8</label>
                      <input type="radio" name="radio" id="6x8" checked>
                    </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <div class="row">
                      <button class="btn btn-success btn-block" id="btnAceptar">Aceptar</button>
                    </div>
                    <div class="row">
                      <label for="precio">Cantidad a pagar:</label>
                      <input type="text" name="precio" id="precio" class="form-control" readonly>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <button class="btn btn-info btn-block" id="btnlimpiar">Limpiar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<script>
  $(document).ready(function () {
    let cantidadfotos;
    let medidadefoto;
    let tipodefoto;
    $('#btnAceptar').click(function () {
      //$('#cantidadfotos').prop('required', true);
      cantidadfotos=$('#cantidadfotos').val();
      tipodefoto=$('#tipodefoto').val();
      calcularprecio(cantidadfotos,medidadefoto,tipodefoto);
      //alert(tipodefoto);
    });
    $('#btnlimpiar').click(function() {
      cantidadfotos="";
      medidadefoto="";
      tipodefoto="";
      $('#3x4').attr('checked',true);
      $('#cantidadfotos').val("");
      $('#tipodefoto').val("seleccion");
      $('#precio').val('');
    });
    $('#3x4').click(function () {
      medidadefoto='3x4';
      //alert(medidadefoto);
    });
    $('#4x6').click(function () {
      medidadefoto='4x6';
      //alert(medidadefoto);
    });
    $('#5x7').click(function () {
      medidadefoto='5x7';
      //alert(medidadefoto);
    });
    $('#6x8').click(function () {
      medidadefoto='6x8';
      //alert(medidadefoto);
    });
  });
  function calcularprecio(cantidadfotos, medidadefoto, tipodefoto) {
    let cantidad;
    let precio;
    switch (tipodefoto) {
      case "B_N":
        switch (medidadefoto) {
          case "3x4":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*4.0;
              $('#precio').val(`$${precio}`);
            break;
            case "4x6":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*5.2;
              $('#precio').val(`$${precio}`);
            break;
            case "5x7":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*6.0;
              $('#precio').val(`$${precio}`);
            break;
            case "6x8":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*7.9;
              $('#precio').val(`$${precio}`);
            break;
          default:
              alert("clickea alguna medida");
            break;
        }
        break;
      case "color":
        switch (medidadefoto) {
          case "3x4":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*5.5;
              $('#precio').val(`$${precio}`);
            break;
            case "4x6":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*6.2;
              $('#precio').val(`$${precio}`);
            break;
            case "5x7":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*7.5;
              $('#precio').val(`$${precio}`);
            break;
            case "6x8":
              cantidad=parseFloat(cantidadfotos);
              precio=cantidad*9.0;
              $('#precio').val(`$${precio}`);
            break;
          default:
              alert("clickea alguna medida");
            break;
        }
        break;
      default:
          alert("slecciona una de los tipos de fotos");
        break;
    }
  }
</script>