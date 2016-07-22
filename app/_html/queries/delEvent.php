<?php
$id = $_POST['deleteId'];

if($id){
    echo json_encode( array('error' => 0, 'url' => 'http://yandex.ru') ); // ошибки нет, произойдёт редирект на указанный адрес
}else{
    echo json_encode(array('error'=> 1, 'message' => 'Кажется, что-то пошло не так.'));
}

?>