
<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row full-width" role="contentinfo">
	<div class="thepadding">
		<div class="small-3 large-3 columns">
			<ul class="no-bullet">
				<li>Calle 74 # 15 – 80 Int.1 Of 312</li>
				<li>Edificio Osaka – Bogota - Colombia</li>
				<li>Tel Oficina: 571-321 61 60</li>
				<li>Tel Móvil: 57- 3102540276</li>
			</ul>
		</div>
		<div class="small-3 large-3 columns">
			<h5>Mejora y Soluciones</h5>
			<ul>
				<li>Nuestra empresa</li>
				<li>Nuestros servicios</li>
				<li>Blog</li>
				<li>Contacto</li>
			</ul>
		</div>
		<div class="small-3 large-3 columns">
			<h5>Conéctate con nosotros</h5>
			<ul>
				<li>Facebook</li>
				<li>Twitter</li>
				<li>LinkedIn</li>
			</ul>
		</div>
		
		<div class="small-3 large-3 columns">
			<h5>Idiomas</h5>
			<ul>
				<li>Español</li>
				<li>English</li>
				<li>Portugués</li>
			</ul>
			<?php // wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>