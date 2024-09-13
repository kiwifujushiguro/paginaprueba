<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $eventType = $_POST['eventType'];
    $guestNumber = $_POST['guestNumber'];
    $eventDate = $_POST['eventDate'];
    $eventLocation = $_POST['eventLocation'];
    $eventTheme = $_POST['eventTheme'];
    $eventDetails = $_POST['eventDetails'];

    // Mostrar los datos enviados
    echo "<h2>Pedido de Evento</h2>";
    echo "Tipo de evento: " . htmlspecialchars($eventType) . "<br>";
    echo "Número de invitados: " . htmlspecialchars($guestNumbe
