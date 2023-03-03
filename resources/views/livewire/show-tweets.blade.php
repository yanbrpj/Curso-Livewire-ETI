<div>
    Show Tweets <br>
    {{ $message }} <br>

    <input type="text" name="message" id="message" value="" wire:model="message">

    <br>
    <br>
    <ul>
        @foreach ($tweets as $tweet)
            <li>{{ $tweet->user->name }} - {{ $tweet->content }}</li>
        @endforeach
    </ul>
</div>
