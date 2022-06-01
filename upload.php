<?php
    ini_set('upload_max_filesize', 100000000);
    ini_set('post_max_size', 110000000);
    ini_set('memory_limit', 120000000);
    ini_set('max_input_time', 20);

print_r($_FILES);
print_r($_POST);

$uploads_dir = 'uploads';
// if (is_array())
$tmp_name = $_FILES["one"]["tmp_name"];
$name = basename($_FILES["one"]["name"]);
move_uploaded_file($tmp_name, "$uploads_dir/$name");
