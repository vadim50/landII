<div class="wrapper container-fluid">
	<form action="{{ route('serviceAdd') }}" method="post" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<label for="name" class="col-xs-2 control-label">Название:</label>
			<div class="col-xs-10">
				<input type="text" name="name" id="name"
				value="{{ old('name') }}" placeholder="Введите название">
			</div>
		</div>

		<div class="form-group">
			<label for="text" class="col-xs-2 control-label">Текст:</label>
			<div class="col-xs-10">
				<textarea name="text" id="editor" value="{{ old('text') }}" placeholder="Введите текст">></textarea>
			</div>
		</div>

		<div class="form-group">
			<label for="icon" class="col-xs-2 control-label">Иконка:</label>
			<div class="col-xs-10">
				<input type="text" name="icon" value="{{ old('icon') }}" placeholder="Введите текст">
			</div>
		</div>

		<div class="form-group">
		<div class="col-xs-2">
			<button type="submit" class="btn btn-primary" >Сохранить</button>
		</div>
		
	</div>

	</form>
</div>
<script type="text/javascript">
	CKEDITOR.replace('editor');
</script>