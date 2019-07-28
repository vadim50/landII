<div style="margin:0px 50px 0px 50px;">
	@if(@pages)
	<table class="table table-hover table-striped">
		<head>
			<tr>
				<th>№ п\п</th>
				<th>Имя</th>
				<th>Псевдоним</th>
				<th>Текст</th>
				<th>Дата создания</th>
				<th>Удалить</th>
			</tr>
		</head>
		<tbody>
			@foreach($pages as $k=>$page)

			<tr>
				<td>{{ $page->id }}</td>
				<td><a href="{{ route('pagesEdit',['page'=>$page->id]) }}">{{ $page->name }}</a></td>
				<td>{{ $page->alias }}</td>
				<td>{{ $page->text }}</td>
				<td>{{ $page->created_at }}</td>
				<td>
					<form class="form-gorizontal" acion="{{ route('pagesEdit',['page'=>$page->id]) }}" method="post">
					<input type="hidden" name="action" value="delete">
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
				</td>
				
			</tr>

			@endforeach
		</tbody>
	</table>
@endif
<a href="{{ route('pagesAdd') }}">Новая страница</a>
</div>