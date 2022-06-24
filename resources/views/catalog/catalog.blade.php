<x-layout>
  <x-slot:title>
    Catalog
  </x-slot:title>
  @php
  $fields = ["nombre","director","fechaPublicacion"];
  @endphp
  <table>
    <thead>
      <tr>
        @foreach($fields as $v)
        <th>{{ucfirst($v)}}</th> {{-- ucfirst: uppercase first (primer letra mayuscula)--}}
        @endforeach
      </tr>
    </thead>
    <tbody>
      @isset($peliculas)
      @foreach($peliculas as $peli)
      <tr>
        @foreach($fields as $i=>$f)
        <td>
          @if($i == 0)
          <a href="/catalog/show/{{$peli->id}}">{{$peli->$f}}</a>
          @else
            {{$peli->$f}}
          @endif
        </td>
        @endforeach
      </tr>
      @endforeach
      @endisset
    </tbody>
  </table>
</x-layout>
