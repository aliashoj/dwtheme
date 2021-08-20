<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('testimonial') ?: 'Your testimonial here...';
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 231; //ID of the custom field set
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="testimonial-blockquote">
	
        <p>
			<span class="testimonial-text"><?php echo $text; ?></span>
		</p>
		
		<p>
			<span class="testimonial-author"><strong><?php echo $author; ?></strong></span>
		</p>
		
		<p>
			<span class="testimonial-role"><?php echo $role; ?></span>
		</p>
		
		<div class="testimonial-image">
			<?php echo wp_get_attachment_image( $image, 'full' ); ?>
		</div>
		
    </blockquote>
	
	<style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
		 #<?php echo $id; ?> blockquote { padding:5%; }
		 #<?php echo $id; ?> img { max-width:100px; height:auto; }
    </style>
	
</div>