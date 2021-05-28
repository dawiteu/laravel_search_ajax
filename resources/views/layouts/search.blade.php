@if (count($users) <= 0)
    <td colspan="4" class="text-center text-dark"> pas de résultats ... </td>
@else
    @foreach ($users as $user)
        <tr class="search">
            <td>{{ $user->id }}</td>
            <td>{{ $user->nom }} </td>
            <td>{{ $user->prenom }} </td>
            <td>{{ $user->email }} </td>
        </tr>
    @endforeach  
@endif

