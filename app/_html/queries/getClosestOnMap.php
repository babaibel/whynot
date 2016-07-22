<?php
$lat = $_GET['lat'];
$lon = $_GET['lon'];

$result = array(
    array(
        'type' => 'zoo',
        'lat' => $lat + 0.003,
        'lon' => $lon + 0.002,
        'title' => '<a href="#!" class="link link-und--green-d">Заголовок ивента</a>',
        'html' => 'Зоопарк.  Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
    ),
    array(
        'type' => 'food',
        'lat' => $lat + 0.002,
        'lon' => $lon - 0.006,
        'title' => '<a href="#!" class="link link-und--green-d">Заголовок ивента</a>',
        'html' => 'Ресторан/фастфуд. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
    ),
    array(
        'type' => 'attraction',
        'lat' => $lat - 0.003,
        'lon' => $lon - 0.005,
        'title' => '<a href="#!" class="link link-und--green-d">Заголовок ивента</a>',
        'html' => 'Атракционы. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
    ),
    array(
        'type' => 'attraction',
        'lat' => $lat - 0.002,
        'lon' => $lon + 0.005,
        'title' => '<a href="#!" class="link link-und--green-d">Заголовок ивента</a>',
        'html' => 'Атракционы. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
    ),
    array(
        'type' => 'attraction',
        'lat' => $lat - 0.002,
        'lon' => $lon + 0.005,
        'title' => '<a href="#!" class="link link-und--green-d">Заголовок ивента</a>',
        'html' => 'Атракционы. Подбор мероприятий по дате, вашим интересам и предпочтениям, атак же по удаленности от вас.'
    )
);

echo json_encode( $result );
?>