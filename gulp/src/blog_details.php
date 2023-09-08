<?php
/* ____Template Name: Blog details */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>



<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<div class="conteiner blog-details-conteiner">
	<main class="blog-details-row">

		@@include('html/parts/article-blog.html',{
		'day':'08',
		'month':'nov-06',
		'title':'Aenean pharetra lectus utsto.',
		'text':'Lorem&nbspipsum,&nbspdolor&nbspsit&nbspamet&nbspconsectetur&nbspadipisicing&nbspelit.&nbspQuam&nbspharum&nbspdelectus&nbspcumque&nbspdeserunt&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplaboriosam&nbspquis&nbspdicta&nbspsuscipit&nbsplaudantium&nbspcorrupti&nbspquos&nbspdoloremque&nbspasperiores,&nbspconsequuntur&nbsput&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsprepellendus!&nbspLaudantium&nbspsint&nbspaut&nbspest&nbspeum!',
		'likes-amounth':'65',
		'article-blog-footer-display':'style="display:none"',
		'blog-details-footer-display':'',
		})

		<section class="blog-details-block">
			<div class="wrap-img blog-details-block__img"><img src="@img/Image_412x270.jpg" alt=""></div>
			<div class="wrap-img blog-details-block__img"><img src="@img/Image_412x270.jpg" alt=""></div>

			<div class="blog-details-block__text">
				<h4>
					Randomised words which don't look even slightly believable
				</h4>
				<span>
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas sit odit est eligendi quae harum
					numquam, tempore dolorum porro amet?adipisicing elit. Quas sit odit est eligendi quae harum
					numquam,
				</span>
			</div>

			<footer class="blog-details-block__footer">
				<div class="blog-details-block__button-block">
					@@include('html/parts/button-pagination__prev.html',{})
					@@include('html/parts/button-pagination__next.html',{})
				</div>
				@@include('html/parts/article-icons-block.html',{'likes-amounth':'65'})
			</footer>
		</section>
	</main>

	@@include('html/parts/blog-sidebar.html',{})
</div>

@@include('html/comments-block.html',{
'amount-comments':'3',
})



<?php get_footer(); ?>