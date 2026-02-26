{{-- Verificar si hay un elemento en el arreglo breadcrumbs --}}
@if(count($breadcrumbs))
    {{--Display:block indica que todos los leementos que estan vayan en otros bloques   --}}
    <nav class="mb-2 block">
        <ol class="flex flex-wrap text-slate-700 text-sm">
            @foreach ($breadcrumbs as $item)
                <li class="flex items-center">
                    {{-- SI NO ES EL PRIMER ELEMNTO PINTA EL SEPARADOR CON ESPACIO --}}
                    @unless ($loop->first)
                    {{-- El span crea el separador con margen lateral  --}}
                        <span class="px-2 text-gray-400">
                            /
                        </span>
                    @endunless
                    {{-- Revisa si existe una llave llamada 'header' --}}
                    @isset($item['href'])
                        {{-- Si existe, se muestra como enlace con opacidad reducida --}}
                        <a href="{{$item['href']}}" class="opacity-60 hover:opacity-100 transition">
                            {{ $item['name'] }}
                        </a> 
                    @else
                        {{$item['name']}}
                    @endisset
                </li>
            @endforeach
        </ol>
            {{-- El último elemento aprezca resaltado --}}
            @if (count($breadcrumbs)>1)
                <h6 class="font-bold mt-2">
                    {{end($breadcrumbs)['name']}}
                </h6>
            @endif
    </nav>
@endif