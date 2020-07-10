<?php
// Creazione del Custom Field

function custom_meta_box_markup($post)
{
    ?>
    <div>
        <label for="meta-box-text">Text</label>
        <input name="meta-box-text" type="text" value="<?php echo get_post_meta($post->ID, "meta-box-text", true); ?>">
    </div>
    <?php
}

function add_custom_meta_box()
{
    add_meta_box("custom-meta-box", "Editore", "custom_meta_box_markup", "libri", "normal");
}

add_action("add_meta_boxes", "add_custom_meta_box");
?>
