<div>
    <form  wire:submit="addNewUser" action="">
            <input type="text" wire:model="name">
            <input type="email" wire:model="email">
            <input type="password" wire:model="password">
            <button type="submit">submit</button>
    </form>
    <hr/>

    {{ count($users) }}

    @foreach($users as $user)
    <p>{{ $user->name }}</p>

    @endforeach
</div>
