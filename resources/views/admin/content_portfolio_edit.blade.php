<div class="wrapper container-fluid">
	<form action="{{ route('portfolioEdit',['portfolio'=>$data['id']]) }}"
		class="form-gorizontal" method="post" enctype="multipart/form-data">
			@csrf

		<div class="form-group">
			<input type="hidden" name="id" value="{{ $data['id'] }}">
			<label for="name" class="col-xs-2 control-label">Название</label>
			<input type="text" name="name" value="{{ $data['name'] }}" class="form-control">
		</div>

		<div class="form-group">
			<label for="filter" class="col-xs-2 control-label">Фильтр</label>
			<input type="text" name="filter" value="{{ $data['filter'] }}" class="form-control">
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
			name="images" buttonText="Upload">
			</div>
		</div>

		<div class="form-group">
			<div class="col-xs-offset-2 col-xs-10">
				<button type="submit" class="btn btn-primary">Сохранить</button>
			</div>
		</div>
		

		</form>
</div>