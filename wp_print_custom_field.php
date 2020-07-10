<?php
echo "<p><b>Editore:</b> ";
$key_1_value = get_post_meta( get_the_ID(), 'meta-box-text', true );
// Check if the custom field has a value.
if ( ! empty( $key_1_value ) ) {
    echo $key_1_value;
}
echo "</p>";
?>
