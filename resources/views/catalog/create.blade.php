<x-layout>
  <x-slot:title>
    Crear Pelicula
  </x-slot:title>

  <head>
    <style>
      form input,
      form button {
        display: block;
        margin: 0.5rem;
      }
    </style>
  </head>

  <h2>Crear Pelicula</h2>
  <form action="/catalog/store" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="director" placeholder="Director">
    <input type="text" name="descripcion" placeholder="Descripcion">
    <input type="date" name="fecha" placeholder="Fecha">
    <button>Crear</button>
  </form>
</x-layout>
