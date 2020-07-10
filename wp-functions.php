<?php
//Wordpress User Meta functions.
add_user_meta( int $user_id, string $meta_key, mixed $meta_value, bool $unique = false )
update_user_meta( int $user_id, string $meta_key, mixed $meta_value, mixed $prev_value = '' )
delete_user_meta( int $user_id, string $meta_key, mixed $meta_value = '' )
get_user_meta( int $user_id, string $key = '', bool $single = false )

  
//Wordpress Post Meta functions.
add_post_meta( int $post_id, string $meta_key, mixed $meta_value, bool $unique = false )
delete_post_meta( int $post_id, string $meta_key, mixed $meta_value = '' )
update_post_meta( int $post_id, string $meta_key, mixed $meta_value, mixed $prev_value = '' )
get_post_meta( int $post_id, string $key = '', bool $single = false )
?>
