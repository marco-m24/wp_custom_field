<?php
// Salvataggio del custom field

function save_custom_meta_box($post_id, $post)
{
    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "libri";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["meta-box-text"])) {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);

}

add_action("save_post", "save_custom_meta_box", 10, 2);
?>
