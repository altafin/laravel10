<h1>Nova dúvida</h1>

<form action="{{ route('supports.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>