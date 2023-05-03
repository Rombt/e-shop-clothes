<div class="background background__footer">
	<div class="footer conteiner">
		<section class="footer__row">
			<div class="footer__navigation">
				<h2>Navigation</h2>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Menu</a></li>
					<li><a href="#">Reservation</a></li>
					<li><a href="#">Recipe</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="footer__news">
				<h2>News letter</h2>
				<span>Enter your email address and subscribe daily newsletter</span>
				<div class="form-footer">
					<div class="form-footer__input">
						<img src="@img/form-icon_email.png" alt="">
						<p>Email Address</p>
						<input type="email">
					</div>
					@@include('html/parts/button-orange.html',{'mod':'','title':'Subscribe', 'href':'#'})
				</div>
				@@include('html/parts/icons-block.html',{})
			</div>
			<div class="footer__app">
				<h2>Our app avilable</h2>
				@@include('html/parts/button-app.html',{'title':'App&nbspStore','text':'Avilable&nbspon&nbspthe','icon':'@img/icon_apple.png'})
				@@include('html/parts/button-app.html',{'title':'Google&nbspPlay','text':'Get&nbspit&nbspon','icon':'@img/icon_google-play.png'})
			</div>
		</section>
	</div>
	<div class="copyright-block">
		<span></span>
		<p>2016 © Luxury RestaurAnt, All rights reserved</p>
		<span></span>
	</div>
</div>



<?php get_footer(); ?>
</body>

</html>