
  <div class="form-group">
      <label>Nombre de la musica</label>
      <div >
          <input class="form-control" type="text"  id="example-text-input" name="Nombre" value="{{ old('Nombre') }}" required autofocus>

          @if ($errors->has('Nombre'))
              <span class="help-block">
                  <strong>{{ $errors->first('Nombre') }}</strong>
              </span>
          @endif
      </div>
  </div>



    <div class="form-group">
        <label>URL</label>
        <div >
            <input class="form-control" type="text"  id="example-text-input" name="URL" value="{{ old('URL') }}" required autofocus>

            @if ($errors->has('URL'))
                <span class="help-block">
                    <strong>{{ $errors->first('URL') }}</strong>
                </span>
            @endif
        </div>
    </div>
