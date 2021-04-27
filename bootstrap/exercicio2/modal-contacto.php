<!-- Modal -->


<div class="modal fade" id="modalContacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Formulario de contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body bg-info">
	   	<div class="row">
		      <div class="col">
		        <h1>Contacto</h1>
		      </div>
		</div>
	    <div class="row">
			<div class="col-md-5">
		          <form>
		            <div class="form-group">
		              <label for="correo">Correo electrónico:</label>
		              <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico">
		            </div>
		            <div class="form-group">
		              <label for="nombre">Sexo:</label>
					  <div class="radio">
						  <label><input type="radio" name="sexo"  value="H" > Home</label>
						  <label><input type="radio" name="sexo"  value="M" > Muller</label>
					  </div>
		            </div>
		            <div class="form-group">
		              <label for="tfno">Interesado en cursos:</label>
					  <div class="checkbox">
					  	<label><input type="checkbox"> ASIR</label>
					  	<label><input type="checkbox"> AF</label>
					  	<label><input type="checkbox"> EMV</label>
					  </div>		              
		            </div>

		            <div class="checkbox">
		              <label>
		                <input type="checkbox"> Deseo que me envíen ofertas de cursos
		              </label>
		            </div>
		            <div class="form-group">
		            <label for="comentario">Comentario:</label>	
		            <textarea class="form-control" rows="2" id="comentario"></textarea>
		            </div>

		            <button type="submit" class="btn btn-default">Enviar</button>
		          </form>
			</div>
			<div class="col-md-7">
			      	<a href="#">
			        	<img src="img/mapa.jpg" class="img-fluid">
			        </a>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>