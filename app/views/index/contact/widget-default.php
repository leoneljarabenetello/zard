<div class="container">
	<div class="row">
		<div class="col-md-8">
		<h1>ENVIAR UN MENSAJE</h1><br>
<div class="panel panel-default">
<div class="panel-heading">MENSAJE</div>
<div class="panel-body">

<form role="form" method="post" action="./?r=index/addmsg">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo electronico</label>
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo Electronico">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Comentario</label>
    <textarea class="form-control" name="comment" required rows="4" placeholder="Escribe tu comentario ..."></textarea>
  </div>
  <input type="hidden" name="post_id" value="<?=$post->id;?>">
  <button type="submit" class="btn btn-default">Enviar comentario</button>
</form>
</div>
</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>

		<br><br>

		</div>
	</div>
	
</div>
