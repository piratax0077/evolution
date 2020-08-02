<div class="contactanos" id="contacto">
	<h2>Contáctanos</h2>
</div>
<div class="formulario-contacto">
	<form>
		@csrf
		<div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="&#xf007;Nombre" >
    </div>
    <div class="col">
      <input type="email" class="form-control" placeholder="&#xf1fa;Email">
    </div>
    <div class="col">
    	<input type="text" class="form-control" placeholder="Empresa">
    </div>
  </div>
  
  <textarea name="comentario" class="form-control" placeholder="Ingrese comentario"></textarea>
  <input type="submit" name="" class="btn btn-warning" value="Enviar">
	</form>
</div>