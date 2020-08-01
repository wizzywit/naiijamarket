<?php

function productImage($path)
{
    # code...
    return ($path != null) && file_exists('storage/'.$path)? asset('storage/'.$path) : asset('storage/default/default_product.jpg');
}

?>
