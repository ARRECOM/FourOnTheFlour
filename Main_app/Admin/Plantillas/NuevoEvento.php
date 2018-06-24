<form id="form_subir" action="../subir.php" method="post">
  
    <div class="form-group">
        <label>Hora de inicio</label>

        <div >
            <input class="form-control" type="time"  id="InicioH" name="InicioH"  required autofocus>
        </div>
    </div>

     <div class="form-group">
        <label>Hora de cierre</label>
        <div >

            <input class="form-control" type="time"  id="FinH" name="FinH" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label>Fecha del evento</label>
        <div >
            <input class="form-control" type="date"  id="FechaEvento" name="FechaEvento"  required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label>Lugar</label>

        <div >
            <input class="form-control" type="text"  id="Lugar" name="Lugar" required autofocus>

        </div>
    </div>


    <div class="form-group">
        <label>Teléfono del lugar</label>

       <div >
           <input class="form-control" id="TelefonoLugar"  class="input-medium bfh-phone" data-country="US" type="text"  name="TelefonoLugar" >

       </div>
    </div>

    <div class="form-group">
        <label>Flyer del evento</label>
        <input type="file" name="archivo">
        <small class="form-text text-muted" id="fileHelp">Seleccione el flyer del evento para mostrar en la página principal.</small>

    </div>

    <div class="barra">
      <div class="barra_azul" id="barra_estado">
        <span></span>
      </div>

    </div>
    <div class="acciones">
      <button type="submit" class="btn btn-primary" value="Enviar">Guardar</button>
      <button type="reset" class="btn btn-default cancelar" value="cancelar" id="cancelar" >Cancelar</button>

    </div>


  </div>

</form>
