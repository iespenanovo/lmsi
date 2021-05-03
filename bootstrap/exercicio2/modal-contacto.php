<!-- Modal -->
<div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Formulario de contacto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

              <button type="submit" class="btn btn-light mt-2">Enviar</button>
            </form>
          </div>
          <div class="col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.0089154326497!2d-7.6853280841539195!3d43.29313497913527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd31e6bcba5bf0db%3A0xff377d1433ad89d6!2sIES%20Lois%20Pe%C3%B1a%20Novo!5e0!3m2!1ses!2ses!4v1619448962374!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>