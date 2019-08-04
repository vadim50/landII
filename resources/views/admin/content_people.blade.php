<div style="margin:0px 50px 0px 50px;">
	@if(isset($people))
	<table class="table table-hover table-striped">
		<head>
			<tr>
				<th>№ п/п</th>
				<th>Имя</th>
				<th>Должность</th>
				<th>Фото</th>
				<th>Текст</th>
				<th>Дата создания</th>
				<th>Удалить</th>
			</tr>
		</head>
		<tbody>
			@foreach($people as $k=>$member)
			<tr>
				<td>{{ $member->id }}</td>
				<td><a href="{{ route('peopleEdit',['people'=>$member->id]) }}">{{ $member->name }}</a></td>
				<td>{{ $member->position }}</td>
				<td><img src="{{ asset('assets/img/'.$member->images) }}" width="100"></td>
				<td>{!! $member->text !!}</td>
				<td>{{ $member->created_at }}</td>
				<td>
					<form class="form-gorizontal"
					action="{{ route('peopleEdit',['people'=>$member->id]) }}"
					method="post">
						@method('DELETE')
						@csrf
						<button type="submit" class="btn btn-danger">Удалить</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@endif
<a class="btn btn-success" href="{{ route('peopleAdd') }}">Новый член команды</a>
</div>