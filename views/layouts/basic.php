<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="banner">
    <?php
    NavBar::begin([
        'options' => [
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
             ['label' => 'Запросы', 'items' => [
                ['label' => 'Информация', 'url' => ['/site/info']],
                ['label' => 'Запрос1', 'url' => ['/hotel/z1']],
                ['label' => 'Запрос2', 'url' =>['/hotel/z2']],
                ['label' => 'Запрос3', 'url' => ['/hotel/z3']],
                ['label' => 'Запрос4', 'url' => ['/hotel/z4']],
                ['label' => 'Запрос5', 'url' => ['/hotel/z5']],
                ['label' => 'Запрос6', 'url' => ['/hotel/z6']],
                ['label' => 'Запрос7', 'url' => ['/hotel/z7']],
                ['label' => 'Запрос8', 'url' => ['/hotel/z8']],
                ['label' => 'Запрос9', 'url' => ['/hotel/z9']],
                ['label' => 'Запрос10', 'url' => ['/hotel/z10']],
                ['label' => 'Запрос11', 'url' => ['/hotel/z11']],
                ['label' => 'Запрос12', 'url' => ['/hotel/z12']],
                ['label' => 'Запрос13', 'url' => ['/hotel/z13']],
                ['label' => 'Запрос14', 'url' => ['/hotel/z14']],
                ['label' => 'Запрос15', 'url' => ['/hotel/z15']],
                ['label' => 'Запрос16', 'url' => ['/hotel/z16']],
                ['label' => 'хэш', 'url' => ['/site/hash']],
              ]],
            ['label' => 'Админка', 'url' => ['/admin']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- banner-pos -->
<div class="banner-pos">
	<div class="container">
		<div class="banner-pos-grids">
			<div class="ban-pos-gridone">
				<h3>Featured Hotel</h3>
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/4.jpg" alt=""/>
							<figcaption>
								<h4>CLASSIC HOTEL</h4>
								<p>In officiis debitis aut rerum tincidunt labore dolore magna</p>																
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="ban-pos-gridtwo l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/6.jpg" alt=""/>
							<figcaption>
								<h4>CLASSIC HOTEL</h4>
								<p>In sit amet sapien eros Integerore et dolore magna aliqua. In sit tincidunt magna aliqua rerum tincidunt</p>														
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="ban-pos-gridthree l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/5.jpg" alt=""/>
							<figcaption>
								<h4>CLASSIC HOTEL</h4>
								<p>In sit amet sapien eros Integerore et dolore magna aliqua. In sit tincidunt magna aliqua rerum tincidunt</p>																
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-pos -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<h2 class="tittle-one">WELCOME</h2>
		<div class="welcome-grids">
			<div class="col-md-4 welcome-left">
				<ul>
					<li><a href="#">Lorem Ipsum is not simply random text.</a></li>
					<li><a href="#">There are many variations of passages.</a></li>
					<li><a href="#">The standard chunk of Lorem Ipsum.</a></li>
				</ul>
			</div>
			<div class="col-md-4 welcome-middle">
				<ul>
					<li><a href="#">Lorem Ipsum is not simply random text.</a></li>
					<li><a href="#">There are many variations of passages.</a></li>
					<li><a href="#">The standard chunk of Lorem Ipsum.</a></li>
				</ul>
			</div>
			<div class="col-md-4 welcome-right">
				<ul>
					<li><a href="#">Lorem Ipsum is not simply random text.</a></li>
					<li><a href="#">There are many variations of passages.</a></li>
					<li><a href="#">The standard chunk of Lorem Ipsum.</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
		doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
		veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
</div>
<!-- //welcome -->
<!-- facilities -->
<div class="facilities">
	<div class="container">
		<h3 class="tittle">FACILITIES</h3>
		<div class="facilities-grids">
			<div class="col-md-6 facilities-grid">
				<img src="images/222.jpg" alt="" />
			</div>
			<div class="col-md-6 facilities-grid-left">
				<div class="fac-grids">
					<div class="facilities-left">
						<img src="images/111.jpg" alt="" />
					</div>
					<div class="facilities-right">
						<img src="images/333.jpg" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="fac-rig-btm">
					<img src="images/444.jpg" alt="" />
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //facilities -->
<!-- services -->
<div class="feature-serv">
	<div class="container">
		<h3 class="tittle">FEATURED SERVICES</h3>
		<div class="services-bottom-grids">
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>dolorem eum fugia</h4>
						<p>To take a trivial example, which of us ever undertakes laborious 
						physical exercise, except to obtain.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid btm-gre">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>dolorem eum fugia</h4>
						<p>To take a trivial example, which of us ever undertakes laborious 
						physical exercise, except to obtain.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>dolorem eum fugia</h4>
						<p>To take a trivial example, which of us ever undertakes laborious 
						physical exercise, except to obtain.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid btm-gre">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>dolorem eum fugia</h4>
						<p>To take a trivial example, which of us ever undertakes laborious 
						physical exercise, except to obtain.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>dolorem eum fugia</h4>
						<p>To take a trivial example, which of us ever undertakes laborious 
						physical exercise, except to obtain.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid btm-gre">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>dolorem eum fugia</h4>
						<p>To take a trivial example, which of us ever undertakes laborious 
						physical exercise, except to obtain.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- gallery -->
<div class="gallery" id="gallery">
	<div class="container">
		<h3 class="tittle">GALLERY</h3>
			<div class="gallery-bottom">
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/aaa.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/aaa.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
						   <a href="images/bbb.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/ccc.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ccc.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
						   <a href="images/ddd.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ddd.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						 <div class="view view-fifth">
							<a href="images/eee.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/eee.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/bbb.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/ggg.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/ggg.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
							<a href="images/bbb.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/bbb.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 gal-grid">
						<div class="view view-fifth">
						   <a href="images/aaa.jpg" class="b-link-stripe b-animate-go  thickbox"  title="Image Title"><img src="images/aaa.jpg" alt="" class="img-responsive">
								<div class="mask">
									<h4>CLASSIC HOTEL</h4>
									<p>A wonderful serenity has taken possession of my entire soul.</p>
									<span>More</span>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
				<script src="js/jquery.chocolat.js"></script>
			
			<!--light-box-files -->
			<script type="text/javascript">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script>

	</div>
</div>
<!--footer-->
<div class="footer">
		<div class="container">				 	
			<div class="col-md-3 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="typography.html">Services</a></li>						
					<li><a href="booking.html">Booking</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
					 <h3>FACILITIES</h3>
					 <ul>
						 <li><a href="#">Double bedrooms</a></li>
						 <li><a href="#">Single bedrooms</a></li>
						 <li><a href="#">Royal facilities</a></li>						
						 <li><a href="#">Connected rooms</a></li>
					 </ul>
			</div>
			<div class="col-md-3 ftr_navi ftr">
				<h3>GET IN TOUCH</h3>
				<ul>
					<li>Ola-ola street jump,</li>
					<li>260-14 City, Country</li>
					<li>+62 000-0000-00</li>
				</ul>
			</div>
			<div class="col-md-3 ftr-logo">
				<a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Classic Hotel</a>
				<ul>
					<li><a href="#" class="f1"> </a></li>
					<li><a href="#" class="f2"> </a></li>
					<li><a href="#" class="f3"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
