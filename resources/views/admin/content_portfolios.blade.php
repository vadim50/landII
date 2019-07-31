<div style="margin:0px 50px 0px 50px">
	@if(isset($portfolios))
	<table class="table table-hover table-striped">

		<head>
			<tr>
				<th>№ п\п</th>
				<th>Имя</th>
				<th>Фильтр</th>
				<th>Дата создания</th>
				<th>Удалить</th>
			</tr>
		</head>
		<tbody>
			@foreach($portfolios as $k=>$portfolio)
			<tr>
				<td>{{ $portfolio->id }}</td>
				<td><a href="{{ route('portfolioEdit',['portfolio'=>$portfolio->id]) }}">{{ $portfolio->name }}</a></td>
				<td>{{ $portfolio->filter }}</td>
				<td>{{ $portfolio->created_at }}</td>
				<td>
					<form class="form-gorizontal" action="{{ route('portfolioEdit',['portfolio'=>$portfolio->id]) }}" method="post">
						 @method('DELETE')
							@csrf
						<!-- <input type="hidden" name="_method" value="delete"> -->
				
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		
	</table>

	@endif
<a class="btn btn-success" href="{{ route('portfolioAdd') }}">Новое Портфолио</a>
</div>