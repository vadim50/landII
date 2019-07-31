<div class="wrapper container-fluid">
	<form action="{{ route('portfolioAdd') }}" enctype="multipart/form-data" method="post">
		@csrf
		<div class="form-group">
			<label for="name" class="col-xs-2 control-label">Название:</label>
			<input class="col-xs-10" id="name" type="text" name="name" value="{{ old('name') }}"
			placeholder="Введите название">
		</div>

	<div style="clear:both; padding: 10px;"></div>

	<div class="form-group">
		<label for="images" class="col-xs-2 control-label">Изображение:</label>
		<div class="col-xs-10">
			<input  type="file" class="filestyle"
			name="images" value="{{ old('alias') }}" placeholder="Загрузите изображение">
		</div>
	</div>

<div style="clear:both; padding: 10px;"></div>

	<div class="form-group">
			<label for="filter" class="col-xs-2 control-label">Фильтр:</label>
			<input class="col-xs-10" id="filter" type="text" name="filter" value="{{ old('filter') }}"
			placeholder="Введите фильтр">
	</div>

<div style="clear:both; padding: 10px;"></div>

	<div class="form-group">
		<div class="col=xs-2 col-xs-10">
			<button type="submit" class="btn btn-primary" >Сохранить</button>
		</div>	
	</div>

	</form>
</div>