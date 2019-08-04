<div class="wrapper container-fluid">
	<form action="{{ route('peopleEdit',['people'=>$data['id']]) }}" class="form-gorizontal"
		method="post" enctype="multipart/form-data">

		@csrf

		<div class="form-group">
			<input type="hidden" name="id" value="{{ $data['id'] }}">
			<label for="name" class="col-xs-2 control-label">Название:</label>
			<div class="col-xs-10">
				<input type="text" name="name" value="{{ $data['name'] }}" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="position" class="col-xs-2 control-label">Должность:</label>
			<div class="col-xs-10">
				<input type="text" name="position" value="{{ $data['position'] }}" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="text" class="col-xs-2 control-label">Текст:</label>
			<div class="col-xs-10">
				<textarea name="text" id="editor" class="form-control">
				{{ $data['text'] }}
			</textarea>
			</div>
		</div>

		<div class="form-group">
			<label for="old_images" class="col-xs-2 control-label">Изображение:</label>
			<div class="col-xs-offset-2 col-xs-10">
				<img src="{{ asset('assets/img/'.$data['images']) }}" class="img-control
				zoomIn wow animated" width="500" height="500">
				<input type="hidden" name="old_images" value="{{ $data['images'] }}">
			</div>
		</div>

		<div class="form-group">
			<label for="images" class="col-xs-2 control-label">Изображение</label>
			<div class="col-xs-offset-2 col-xs-10">
				<input  type="file" class="filestyle"
			name="images" value="{{ old('alias') }}" buttonText="Upload">
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