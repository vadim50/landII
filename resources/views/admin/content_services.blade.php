<div style="margin:0px 50px 0px 50px">
	@if(isset($services))
	<table class="table table-hover table-striped">
		<head>
			<tr>
				<th>№ п/п</th>
				<th>Имя</th>
				<th>Текст</th>
				<th>Иконка</th>
				<th>Дата создания</th>
				<th>Удалить</th>
			</tr>
		</head>
		<tbody>
			@foreach($services as $k=>$service)
			<tr>
				<td>{{ $service->id }}</td>
				<td><a href="{{ route('serviceEdit',['service'=>$service->id]) }}">{{ $service->name }}</a></td>
				<td>{!! $service->text !!}</td>
				<td><span><i style="font-size:50px;" class="fa {{ $service->icon }}"></i></span></td>
				<td>{{ $service->created_at }}</td>
				<td>
					<form class="form-gorizontal"
					action="{{ route('serviceEdit',['serviceEdit'=>$service->id]) }}"
					method="post">
						@method('DELETE')
						@csrf
					<button class="btn btn-danger" type="submit">Удалить</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@endif
	<a style="padding-bottom:100px;" href="{{ route('serviceAdd') }}">Новый Сервис</a>
</div>