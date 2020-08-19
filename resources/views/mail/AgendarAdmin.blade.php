<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 10px;
    }
</style>
<p>
    Olá, {{$data->user->name}} ! <br>
    Tem mensagem nova no seu processo de agendamento realizado em {{date('d/m/Y h:i:s', strtotime($data->created_at))}}.
</p>
<p>
    Para visualizar a data e hora de sua consulta, clique no link abaixo: <br>
    <a href="http://clinica.jnsolucoesinformatica.tech/login">Visualizar</a>
</p>

<p>Atenciosamente, <br>
    Clínica Wanzeller <br>
    Cirirgia plástica
</p>
<hr>
<p>Esta é uma mensagem automática enviada pelo sistema. Não responda eu encaminhe-a. <br>
    Todos direitos reservados à Clínica Wanzeller.</p>