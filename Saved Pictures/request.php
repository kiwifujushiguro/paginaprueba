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
    echo "Número de invitados: " . htmlspecialchars($guestNumber) . "<br>";
    echo "Fecha del evento: " . htmlspecialchars($eventDate) . "<br>";
    echo "Ubicación: " . htmlspecialchars($eventLocation) . "<br>";
    echo "Tema del evento: " . htmlspecialchars($eventTheme) . "<br>";
    echo "Detalles adicionales: " . nl2br(htmlspecialchars($eventDetails)) . "<br>";
}
?>

