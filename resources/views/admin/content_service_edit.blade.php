<div class="wrapper container-fluid">
	<form action="{{  route('serviceEdit',['service'=>$data['id']]) }}"
		class="form-gorizontal" method="post">
			@csrf

			<div class="form-group">
				<input type="hidden" name="id" value="{{ $data['id'] }}">

				<label for="name" class="col-xs-2 control-label">Название:</label>
				<div class="col-xs-10">
					<input type="text" name="name" value="{{ $data['name'] }}" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="text" class="col-xs-2 control-label">Текст:</label>
				<div class="col-xs-10">
					<textarea id="editor" name="text" class="form-control">
						{!! $data['text'] !!}
					</textarea>
				</div>
			</div>

			<div class="form-group">
				<label for="icon" class="col-xs-2 control-label">Иконка</label>
				<div class="col-xs-10">
					<input type="text" name="icon" value="{{ $data['icon'] }}" class="form-control">
				</div>
			</div>

			<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="submit" class="btn btn-primary">Сохранить</button>
			</div>
		</div>

		</form>
<script>
	CKEDITOR.replace('editor');
</script>
</div>