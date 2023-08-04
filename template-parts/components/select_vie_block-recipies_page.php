<div class="select-vie-block-conteiner">
	<div class="recipies-title-nav recipies-title__nav">
		<div class="select-view">
			<?php if ( is_page( 'menu-page-grid' ) ) {
				echo '<div class="select-view__colomns"> <h3>List</h3> </div>';
			} elseif ( is_page( 'recipies-page' ) ) {
				echo '<div class="select-view__colomns"><h3>2 column</h3></div>';
			} ?>
			<!-- <div class="select-view__grid"><img src="img/title-nav__icon_two-grid.png" alt=""></div> -->
		</div>
		<div class="recipies-title-nav__brows-recipes">
			<h3>Brows Recipes</h3>
			<div class="menu-recipies-burger burger-open">
				<span></span>
			</div>
			<!-- <nav class="menu-recipies">				// времменоо что бы не сыпались ошибки
				<ul class="menu-recipies__list">
					<li>
						<a href="#">
							<img src="img/title-nav__icon_breakfast.png" alt="">
							<p>Breakfast</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/title-nav__icon_starter.png" alt="">
							<p>Starter</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/title-nav__icon_lunch.png" alt="">
							<p>Lunch</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/title-nav__icon_icon_dinner.png" alt="">
							<p>Dinner</p>
						</a>
					</li>
					<li>
						<a href="#">
							<img src="img/title-nav__icon_icon_dessert.png" alt="">
							<p>Dessert</p>
						</a>
					</li>
				</ul>
			</nav> -->
		</div>
	</div>
</div>



<!-- if ( is_page( 'menu-page-grid' ) ) {


		} elseif ( is_page( 'recipies-page' ) ) {

	} -->