<!DOCTYPE html>
<html>
<head>
  <title>Mensaje recibido</title>
</head>
<body>
  <p>Has recibido un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
  <p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
  <p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
</body>
</html>
