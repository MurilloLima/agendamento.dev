<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
    }
</style>
<p>
    Olá, Administrador ! <br>
    Tem mensagem nova do cliente {{$data->user->name}} para agendamento de consulta.
</p>
<p>
    Para agendar a consulta do cliente, clique no link abaixo: <br>
    <a href="http://clinica.jnsolucoesinformatica.tech/login">Agendar</a>
</p>

<p>Obrigado, <br>
    {{$data->nome}}
</p>
<hr>
<p>Esta é uma mensagem automática enviada pelo sistema. Não responda eu encaminhe-a. <br>
    Todos direitos reservados à Clínica Wanzeller.</p>