<?php
$lat = $_GET['lat'];
$lon = $_GET['lon'];

$map_marks = array(
        array(
            'type' => 'zoo',
            'lat' => $lat + 0.003,
            'lon' => $lon + 0.002,
            'title' => 'Заголовок ивента',
            'html' => 'Зоопарк.  Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
        ),
        array(
            'type' => 'food',
            'lat' => $lat + 0.002,
            'lon' => $lon - 0.006,
            'title' => 'Заголовок ивента',
            'html' => 'Ресторан/фастфуд. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
        ),
        array(
            'type' => 'attraction',
            'lat' => $lat - 0.003,
            'lon' => $lon - 0.005,
            'title' => 'Заголовок ивента',
            'html' => 'Атракционы. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
        ),
        array(
            'type' => 'attraction',
            'lat' => $lat - 0.002,
            'lon' => $lon + 0.005,
            'title' => 'Заголовок ивента',
            'html' => 'Атракционы. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
        ),
        array(
            'type' => 'attraction',
            'lat' => $lat - 0.002,
            'lon' => $lon + 0.005,
            'title' => 'Заголовок ивента',
            'html' => 'Атракционы. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
        ),

    );

$result = array(
    'marks' => $map_marks
);

echo json_encode($result);

?>