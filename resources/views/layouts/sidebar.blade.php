<div class="list-group">
  <a href="{{ route('home') }}" class="list-group-item list-group-item-action {{ request()->is('home') ? 'active' : '' }}">Inicio</a>
  <a href="{{ route('categoria.index') }}" class="list-group-item list-group-item-action {{ request()->is('categoria') ? 'active' : '' }}">Categorias</a>
  <a href="{{ route('producto.index') }}" class="list-group-item list-group-item-action {{ request()->is('producto') ? 'active' : '' }}">Productos</a>
  <a href="#" class="list-group-item list-group-item-action">Clientes</a>
  <a href="#" class="list-group-item list-group-item-action">Usuarios</a>
  <a href="#" class="list-group-item list-group-item-action">Pedidos</a>
</div>