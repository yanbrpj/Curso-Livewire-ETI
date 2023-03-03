<div>
    <h1>Listar Tweets</h1>
    <hr>
    <form method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content" placeholder="Informe o tweet">
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <ul>
        @foreach ($tweets as $tweet)
            <li>{{ $tweet->user->name }} - {{ $tweet->content }}</li>
        @endforeach
    </ul>
</div>
