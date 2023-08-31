<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar série</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item"> {{$serie->nome}} </li>
        @endforeach
    </ul>

    <script>
        const a = {{Js::from($series)}};
    </script>
</x-layout>
