<div id="search-bar">
    <form class="">
        <input wire:model.live.debounce.500ms="search" type="search" placeholder="search " aria-label="Search" class="form-control resources/css/app.css">
    </form>
    @if(sizeof($users) > 0)
    <div class="dropdown-menu">
        @foreach($users as $user)
            <div class="px-3 py-1 border-bottom">
                <div class="flex flex-col ml-3" style="display:flex;flex-direction:column;">
                    <span>{{ $user->name }}</span>
                    <span>{{ $user->email }}</span>
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>