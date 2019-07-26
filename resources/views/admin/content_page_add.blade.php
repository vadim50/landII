
<div class="wrapper container-fluid">
	<form action="{{ route('pagesAdd') }}"
	class="form-gorizontal" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="name" class="col-xs-2 control-label">Название:</label>
		<div class="col-xs-8">
			<input id="name" class="form-control" type="text"
			name="name" value="{{ old('name') }}" placeholder="Введите название">
		</div>
	</div>
	
<div style="clear:both;"></div>
	<div class="form-group">
		<label for="alias" class="col-xs-2 control-label">Псевдоним:</label>
		<div class="col-xs-8">
			<input id="alias" class="form-control" type="text"
			name="alias" value="{{ old('alias') }}" placeholder="Введите псевдоним">
		</div>
	</div>
<div style="clear:both;"></div>
	<div class="form-group">
		<label for="text" class="col-xs-2 control-label">Текст:</label>
		<div class="col-xs-8">
			<textarea class="form-control" name="text" id="editor" placeholder="Введите текст">{{ old('text') }}</textarea>
		</div>
	</div>
<div style="clear:both;"></div>
	<div class="form-group">
		<label for="images" class="col-xs-2 control-label">Изображение:</label>
		<div class="col-xs-8">
			<input  type="file" class="filestyle"
			name="images" value="{{ old('alias') }}" placeholder="Загрузите изображение">
		</div>
	</div>

	<div style="clear:both;"></div>
	<div class="form-group">
		<div class="col=xs-2 col-xs-10">
			<button type="submit" class="btn btn-primary" >Сохранить</button>
		</div>
		
	</div>

		
	</form>
</div>
<script>
        CKEDITOR.replace( 'editor' );
</script>