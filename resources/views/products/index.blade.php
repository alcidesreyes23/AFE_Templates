@extends('layouts.app')

@section('content')
    <div class="mt-3 px-5">
        <div class="p-5 shadow">
            <h3 class="text-center ">Administración de productos</h3>
            <div class="col-md-10 mx-auto p-3">
                <div class="d-flex flex-row-reverse">
                    <a href="{{ route('product.create') }}" style="background-color: #63B4B8"
                        class="btn mr-2 my-2 text-white">
                        <i class="fa-solid fa-plus"></i>
                        Nuevo Producto
                    </a>
                </div>
                {{-- <div>
                    <button type="button" class="btn btn-sm btn-success my-4">
                        
                    </button>
                </div> --}}
                <table class="table">
                    <thead style="background-color: #9772FB " class="text-light">
                        <tr>
                            <th>Info</th>
                            <th scole="col">Codigo</th>
                            <th scole="col">Producto</th>
                            <th scole="col">Precio</th>
                            <th scole="col">Categoria</th>
                            <th scole="col">Usuario</th>
                            <th scole="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr>
                                <td>
                                    <a class="btn btn-secondary btn-sm" href="{{ route('product.show', $item) }}">
                                        <i class="fa-solid fa-info"></i>
                                    </a>
                                </td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>${{ number_format($item->price, 2) }}</td>
                                <td>{{ $item->categorie->name }}</td>
                                <td>{{ $item->user->name }}</td>

                                <td>
                                    <a class="btn btn-success btn-sm" href="{{ route('product.edit', $item) }}">
                                        <i class="fa-solid fa-file-pen"></i>
                                    </a>
                                    <form class="d-inline"
                                        action="{{ route('product.delete', ['product' => $item]) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm show_confirm border-0"
                                            data-toggle="tooltip" title='Delete' id="btnDelete">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if (!$products->count())
                    <h6 class="text-muted">No hay registro de productos</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="application/javascript">
    $('#btnDelete').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        Swal.fire({
            icon: 'question',
            title: '¿Desea eliminar el registro?',
            showCancelButton: true,
            confirmButtonText: 'Eliminar',
            cancelButtonText:'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        })
    });
</script>
@endsection
