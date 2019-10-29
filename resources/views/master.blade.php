<!DOCTYPE html>
<html>
<head>
	<title>Bóng Đá TV</title>
	<base href="{{asset('')}}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="source/css/bootstrap.min.css">
	<link rel="stylesheet" href="source/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&display=swap" rel="stylesheet">
	<script src="source/js/jquery.js"></script>
	<script src="https://kit.fontawesome.com/fe9872fc12.js" crossorigin="anonymous"></script>
</head>
<body>
	<header class="container-fuild">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="{{asset('source/index.html')}}"><img src="source/imgs/logo.png" alt=""></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			    <ul class="navbar-nav nav-tabs">
			      <li class="nav-item active">
			        <a class="nav-link" href="{{asset('source/highlight.html')}}">HIGHLIGHT <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="{{asset('source/sopcast.html')}}">Link Sopcast/AceStream <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="{{asset('source/rank.html')}}">Bảng Xếp Hạng <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="{{asset('source/lie-nhe.html')}}">Liên Hệ <span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<section class="header-footer container">
			<h2>BÓNG ĐÁ TV</h2>
			<p>Chúng tôi luôn mang tới cho các bạn những Video - Highlights các trận đấu đêm hôm qua và rạng sáng hôm nay các giải bóng đá hàng đầu thế giới. Tổng hợp các clip bàn thắng, diễn biến chính của các trận đấu hot nhất đêm qua.</p>
		</section>
		<section class="container">
			<aside class="contact">
				<p>BongDaTv.com - Mang những giây phút thoải mái đến bên bạn !</p>
			</aside>
		</section>
	</footer>
	<script>
		$(".load-more").click(function(){
		$(".highlight-more").show("2s");
		$(this).hide();
		})
	</script>
	<!-- <script src="source/js/bootstrap.min.js"></script> -->
</body>
</html>