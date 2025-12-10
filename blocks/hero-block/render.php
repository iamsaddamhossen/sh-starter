<?php
$headline = get_field('headline') ?: 'Your Headline';
$background = get_field('background_image') ?: '';
?>
<section class="hero-block" style="background-image:url('<?php echo esc_url($background); ?>')">
  <h1><?php echo esc_html($headline); ?></h1>
</section>
