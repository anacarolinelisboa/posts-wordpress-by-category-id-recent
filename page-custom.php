<?php
if( have_rows('bloco_de_posts_pgsingle', 'option') ):
echo '<div class="bloco-de-posts">';
while( have_rows('bloco_de_posts_pgsingle', 'option') ) : the_row();  ?> 
	<div class="txt"> 
		<h2 class="title"><?php echo get_sub_field('titulo'); ?></h2> 
		<a href="<?php echo get_sub_field('link_do_botao'); ?>" class="btn-default"><?php echo get_sub_field('texto_do_botao'); ?></a>
	</div>
	<?php
	$qtposts=8;
	if(get_sub_field('opcoes_de_posts') == "Mostrar ultimos posts"){
		include 'posts-recentes.php'; 
	}
	if(get_sub_field('opcoes_de_posts') == "Selecionar posts manualmente"){
		include 'posts-por-id.php'; 
	}
	if(get_sub_field('opcoes_de_posts') == "Mostrar posts por categoria"){ 
		include 'posts-por-categoria.php'; 
	}
	?> 
<?php 
endwhile;
echo "</div>";
endif; 
?>