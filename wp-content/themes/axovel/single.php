<?php 
/**
 * Single Post Page
 * Include different templates based on Post Category
 * 
 */    
if(has_category('blog', $post)) {
   // use single-blog template to show blog       
   get_template_part('single-blog', 'blog');

}elseif(has_category('portfolio', $post)) {
	// use single-portfolio template to show portfolio
	get_template_part('single-portfolio', 'portfolio');

} else {
   // use default template file single-template.php
   get_template_part('single-template');
}
?>


