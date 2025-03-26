<x-dashboard-layout>
    <x-slot:breadcrumbs>
        <li class="breadcrumb-item"><a href="{{route('dashboard.home')}}">{{__('Home')}}</a></li>
        <li class="breadcrumb-item" aria-current="page">{{__('Chats')}}</li>
    </x-slot:breadcrumb>

    <div class="container mt-2">
        <div class="row">
            @if (count($users) > 0)

            <div class="col-md-3 mb-5">
                <ul class="list-group">
                   @foreach ($users as $user)
                      <li class="list-group-item  cursor-pointer list-dark user-list" data-id="{{ $user->id }}">
                        <img src="{{ asset($user->avatar_url) }}" alt="" class="user-image">
                        {{ $user->name }}
                      </li>
                   @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <h3 class="start-head" style="text-align: center">click to start chat</h3>
                <div class="chat-section">
                    <header>
                        <img src="{{ asset(Auth::user()->avatar_url) }}" alt="" class="header-user-image">
                        <span class="header-user-name">{{ Auth::user()->name }}</span>
                    </header>

                    <div id="chat-container">

                    </div>
                    <form action="" id="chat-form">
                        <input type='text' class="border form-control" name="message" placeholder="Enter Message" required id="message">
                        <button id="btnSend" class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            @else
                <div class="col-md-12">
                    <h3>Users Not Found!</h3>
                </div>
            @endif
        </div>
    </div>

</x-dashboard-layout>
