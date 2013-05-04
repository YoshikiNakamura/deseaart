<!doctype html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
		|Deseaart
	</title>
	<?php echo $this->Html->meta('icon');?>
	<?php echo $this->Html->css('website');?>
	<?php echo $this->fetch('meta');?>
	<?php echo $this->fetch('css');?>
	<?php echo $this->fetch('script');?>
	<?php echo $this->Html->script('jquery.js');?>
	<!--[if lt IE 9 ]>
		<?php echo $this->Html->script('html5shiv.js');?>
	<![endif]-->
</head>
<body>
	<!--[if lt IE 8 ]>
		<div style="z-index:1000;width:100%;position:fixed;font-size:16px;font-weight:bold;text-align:center;background:red;color:#FFF;">
			お使いのブラウザでは正常に表示されない可能性が御座います。
			<a href="http://www.google.co.jp/intl/ja/chrome/browser/" style="text-decoration:underline;color:#FFF;">
				最新のブラウザ
			</a>
			でご覧下さい。
		</div>
	<![endif]-->
	<div id="top">
		<header id="header">
			<a href="/">
				<?php echo $this->Html->image('contents/header_logo.png', array('width'=>209, 'height'=>71, 'alt'=>'DeseaArt'));?>
			</a>
			<nav id="headernav">
				<ul>
					<li>
						<a href="#">
							About
						</a>
					</li>
					<li>
						<a href="#">
							Discover
						</a>
					</li>
					<li>
						<a href="#">
							Make
						</a>
					</li>
					<li>
						<a href="#">
							ログイン
						</a>
					</li>
				</ul>
				<form>
					<input type="text">
				</form>
			</nav>
		</header>
	</div>
	<?php echo $this->fetch('content'); ?>
	<div id="bottom">
		<footer id="footer">
			<div id="footerlogo">
				<?php echo $this->Html->image('contents/footer_logo.png', array('width'=>379, 'height'=>135, 'alt'=>'DeseaArt'));?>
			</div>
			<nav id="footernav">
				<dl>
					<dt>
						PRODUCTS
					</dt>
					<dd>
						<ul>
							<li>
								<a href="#">
									All
								</a>
							</li>
							<li>
								<a href="#">
									Graphic Design
								</a>
							</li>
							<li>
								<a href="#">
									Art Works
								</a>
							</li>
							<li>
								<a href="#">
									Furniture Design
								</a>
							</li>
							<li>
								<a href="#">
									Life Style
								</a>
							</li>
							<li>
								<a href="#">
									Others
								</a>
							</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>
						CREATOR
					</dt>
					<dd>
						<ul>
							<li>
								<a href="#">
									All
								</a>
							</li>
							<li>
								<a href="#">
									Graphic Designer
								</a>
							</li>
							<li>
								<a href="#">
									Artist
								</a>
							</li>
							<li>
								<a href="#">
									Product Designer
								</a>
							</li>
							<li>
								<a href="#">
									Others
								</a>
							</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>
						ENTRY
					</dt>
					<dd>
						<ul>
							<li>
								<a href="#">
									新規会員登録
								</a>
							</li>
							<li>
								<a href="#">
									ログイン
								</a>
							</li>
							<li>
								<a href="#">
									マイページ
								</a>
							</li>
							<li>
								<a href="#">
									アカウント設定
								</a>
							</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>
						GUIDANCE
					</dt>
					<dd>
						<ul>
							<li>
								<a href="#">
									利用規約
								</a>
							</li>
							<li>
								<a href="#">
									ガイドライン
								</a>
							</li>
							<li>
								<a href="#">
									プライバシーポリシー
								</a>
							</li>
							<li>
								<a href="#">
									Deseaartとは？
								</a>
							</li>
						</ul>
					</dd>
				</dl>
			</nav>
		</footer>
	</div>
</body>
</html>
