<!DOCTYPE html>
<html>
<head>
  <title>Pusher Test</title>

  <!-- Importa a biblioteca JavaScript do Pusher -->
  <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>

  <script>
    // Ativa logs do Pusher no console 
    Pusher.logToConsole = true;

    // Cria uma instância do Pusher com sua chave pública
    var pusher = new Pusher('73102755987e76250ed9', {
      cluster: 'us2' // Define o cluster onde seu app tá hospedado
    });

    // Inscreve o cliente (navegador) no canal
    var channel = pusher.subscribe('my-channel');

    channel.bind('my-event', function(data) {
      // Mostra os dados recebidos no evento em formato JSON em um alerta
      alert(JSON.stringify(data));
    });
  </script>
</head>

<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>
</html>
