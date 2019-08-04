<div class="container portfolio_title">
	<div class="section-title">
		<h2>{{ $title }}</h2>
	</div>
</div>
<div class="portfolio">
	<div style="
	margin-top: 10px;
    margin-bottom: 40px;
    text-align: center;
    display: block;
    float: none;
    z-index: 2;
    position: relative;" class="sixteen colums">
		<ul style="padding:0px 0px 0px 0px">
			<li>
				<a href="{{ route('pages') }}">
					<h5>Страницы</h5>
				</a>
			</li>
			<li>
				<a href="{{ route('portfolio') }}">
					<h5>Портфолио</h5>
				</a>
			</li>
			<li>
				<a href="{{ route('service') }}">
					<h5>Сервисы</h5>
				</a>
			</li>
			<li>
				<a href="{{ route('people') }}">
					<h5>Команда</h5>
				</a>
			</li>
		</ul>
	</div>
</div>