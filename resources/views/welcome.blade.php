<x-frontend::app>

@foreach($users as $user)

    <ul class='table'>
        <li>{{ $user->name }}</li>
        @if($user->addresses)
        <ul>
            @foreach ($user->addresses as $address )

                    <li>{{ $address->country }}</li>

            @endforeach
        </ul>
        @endif
    </ul>
@endforeach

</x-frontend::app>
