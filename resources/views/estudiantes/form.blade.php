<form class="row g-3 needs-validation" novalidate>

<div class="col-md-4 position-relative">
<label for="validationTooltip01" class="form-label">Código:</label>
<input type="text" pattern="SM.+|sm.+" class="form-control" id="validationTooltip01" name="codigo" placeholder="Ingrese su código.sm.." minlength="10" maxlength="10"value="{{ isset($estudiante->codigo )?$estudiante->codigo:'' }}"required>
<div class="invalid-tooltip">
      ¡Ingrese su código!
    </div>
    </div>
    <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip02" class="form-label">Nombre:</label>
<input type="text" pattern="[A-Z]{1}.+" class="form-control" id="validationTooltip02" name="nombre" placeholder="Ingrese su nombre " maxlength="20" value="{{ isset($estudiante->nombre )?$estudiante-> nombre:'' }}" 
  title="Debe comenzar con letra mayuscula" required>
<div class="invalid-tooltip">
      ¡Ingrese su nombre!
    </div>
    </div>
    <br>

<div class="col-md-4 position-relative">
<label for="validationTooltip03" class="form-label">Apellido:</label>
<input type="text" pattern="[A-Z]{1}.+" name="apellido" placeholder="Ingrese su apellido " class="form-control" id="validationTooltip03" maxlength="20"value="{{ isset($estudiante->apellido )?$estudiante->apellido:'' }}" 
title="Debe comenzar con letra mayuscula" required>
<div class="valid-tooltip">
      ¡Ingrese su apellido!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip04" class="form-label">Dirección:</label>
<input type="text" name="direccion" placeholder="Ingrese su dirección " class="form-control" id="validationTooltip04" maxlength="40" value="{{ isset ($estudiante->direccion)?$estudiante->direccion:''}}" required>
<div class="valid-tooltip">
      ¡Ingrese su dirección!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip05" class="form-label">Teléfono:</label>
<input type="integer" pattern="^[7|5|6]\d{7}$" name="telefono" placeholder="Ej. 77635421" class="form-control" id="validationTooltip05" value="{{ isset($estudiante->telefono )?$estudiante->telefono:'' }}" 
title="El número de teléfono solo debe contener numeros y debe empezar 5, 6 o 7 " minlength="8" maxlength="8" required>
<div class="valid-tooltip">
      ¡Ingrese su número teléfono!
    </div>
  </div>
  <br>

  <div class="col-md-4 position-relative">
<label for="validationTooltip06" class="form-label">Correo:</label>
<input type="text" pattern=".+@gmail\.com" name="correo" placeholder="Ej. nombre@gmail.com" class="form-control" id="validationTooltip06" value="{{ isset($estudiante->correo )?$estudiante->correo:'' }}"
title="Su correo electrónico debetener en cuenta  @gmail.com" required>
<div class="valid-tooltip">
      ¡Ingrese su correo !
    </div>
  </div>
<br><br>
<button type="submit" class="btn btn-warning ">Guardar Registro</button>

</div>
</form>