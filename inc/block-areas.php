<?php
function sh_starter_block_area($block_area) {
    if(function_exists('get_field')){
        $content = get_field($block_area, 'option');
        if($content) echo apply_filters('the_content', $content);
    }
}
