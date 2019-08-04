<div class="wrapper container-fluid">
	<form class="form-gorizontal" action="{{ route('peopleAdd') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="name" class="col-xs-2 control-label">Имя:</label>
			<div class="col-xs-10">
				<input type="text" name="name" id="name" class="form-control"
				value="{{ old('name') }}" placeholder="Введите имя">
			</div>
		</div>

		<div class="form-group">
			<label for="position" class="col-xs-2 control-label">Должность:</label>
			<div class="col-xs-10">
				<input type="text" name="position" id="position"
				value="{{ old('position') }}" class="form-control" placeholder="Введите должность">
			</div>
		</div>

		<div class="form-group">
			<label for="images" class="col-xs-2 control-label">Фото:</label>
			<div class="col-xs-10">
				<input type="file"class="filestyle" class="form-controll" name="images" value="{{ old('images') }}" placeholder="Загрузите фото">
			</div>
		</div>

		<div class="form-group">
			<label for="'text" class="col-xs-2 control-label">Текст:</label>
			<div class="col-xs-10">
				<textarea name="text" class="form-control" id="editor" placeholder="Введите текст">
					{{ old('text') }}
				</textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-xs-2">
				<button type="submit" class="btn btn-primary">Сохранить</button>
			</div>
		</div>
	</form>
	<script type="text/javascript">
		CKEDITOR.replace('editor');
	</script>
</div>