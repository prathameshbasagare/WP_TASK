<?php

function pb_register_blocks(){
    register_block_type(
        PB_PLUGIN_DIR.'build/pricing-block/block.json'
    );
}