<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Corsi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table align-middle mt-4">
                        <thead class="table-light align-middle text-center">
                            <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Giorno</th>
                            <th scope="col">Orario inizio</th>
                            <th scope="col">Orario fine</th>
                            <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider text-center">
                            @if($corsi)
                                @foreach($corsi as $key => $value)
                                    <tr>
                                        <td  class="text-center">{{ $value->titolo }}</td>
                                        <td>{{$value->descrizione}}</td>
                                        <td>{{ $value->giorno }}</td>
                                        <td>{{ \Carbon\Carbon::parse($value->inizio)->format('H') }}:00</td>
                                        <td>{{ \Carbon\Carbon::parse($value->fine)->format('H') }}:00</td>
                                        <td>
                                        @if ($user && $user->is_admin == 0)
                                                    <a type="button" class="btn btn-outline-warning my-2 w-100" href="/corsi/{{$value->id}}">Iscriviti</a>
                                                @else
                                                    <a type="button" class="btn btn-outline-info my-2 w-100" href="/corsi/{{$value->id}}">Dettagli</a>
                                                    <a type="button" class="btn btn-outline-danger my-2 w-100" href="/corsi/{{$value->id}}">Elimina</a>
                                                @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
