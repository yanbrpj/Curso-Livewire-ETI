<div>
    <h1>Listar Tweets</h1>
    <hr>
    <form method="post" wire:submit.prevent="create">
        @error('content')
            <p style="color:#FF0000">{{ $message }}</p>
        @enderror
        <input type="text" name="content" id="content" wire:model="content" placeholder="Informe o tweet">
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <ul>
        @foreach ($tweets as $tweet)
            <li>{{ $tweet->user->name }} - {{ $tweet->content }}</li>
        @endforeach
        <div>
            {{ $tweets->links() }}
        </div>
    </ul>
</div>
