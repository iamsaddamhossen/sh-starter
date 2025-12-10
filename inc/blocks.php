<?php
function sh_starter_register_blocks() {
    $blocks_dir = get_template_directory() . '/blocks';
    foreach (glob($blocks_dir . '/*', GLOB_ONLYDIR) as $block) {
        $block_json = $block . '/block.json';
        if (file_exists($block_json)) {
            register_block_type($block);
        }
    }
}
add_action('init', 'sh_starter_register_blocks');
