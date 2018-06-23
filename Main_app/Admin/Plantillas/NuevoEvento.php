<form id="form_subir" action="" method="post">
  
    <div class="form-group">
        <label>Hora de inicio</label>

        <div >
            <input class="form-control" type="time"  id="example-time-input" name="HoraInicio"  required autofocus>
        </div>
    </div>

     <div class="form-group">
        <label>Hora de cierre</label>
        <div >

            <input class="form-control" type="time"  id="example-time-input" name="HoraCierre" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label>Fecha del evento</label>
        <div >
            <input class="form-control" type="date"  id="example-text-input" name="FechaEvento"  required autofocus>

        </div>
    </div>

    <div class="form-group">
        <label>Lugar</label>

        <div >
            <input class="form-control" type="text"  id="example-text-input" name="Lugar" required autofocus>

        </div>
    </div>


    <div class="form-group">
        <label>Teléfono del lugar</label>

       <div >
           <input class="form-control"  class="input-medium bfh-phone" data-country="US" type="text"  name="Telefono" >

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
