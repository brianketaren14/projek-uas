<?php
// See the password_hash() example to see where this came from.
/*$hash = '$2y$10$tFav5ElPKe0i3';

if (password_verify('brian123', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}*/
$password = 'brian123';
$hash = password_hash($password, PASSWORD_DEFAULT);
if (password_verify($password, $hash)) {
    echo 'Password is KONTOL!';
} else {
    echo 'Invalid password.';
}
?>