
<div class="col-12 col-sm-6 mx-3 my-2 border rounded p-2" style="overflow-y:auto; width:100%; height:500px;">
    <div class="row" style=" height:500px;">
        <div class="col-12 align-self-start">
            <table class="table table-bordered table-striped" style=" ">
                <thead class="thead-dark ">
                    <tr class="table-info">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoria Padre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead> <!-- Columnas Tabla -->

                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id_category}}</td>
                        <td>{{$category->name_category}}</td>
                        @if ( !$category->id_father_categoryf->isEmpty() )
                        @foreach ($category->id_father_categoryf as $categoryF)
                        <td>{{$categoryF->name_category}}</td>
                        @endforeach
                        @else
                        <td>-</td>
                        @endif
                        <td class="text-center">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal" data-id="{{ $category->id_category}}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button data-toggle="modal" data-target="#updateModal" class="btn btn-info"><i
                                    class="fas fa-marker"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody> <!-- Registros Tabla -->
            </table>
        </div>
        <div class="col-12 align-self-end">
            {{-- {{$categories->links()}} --}}
        </div>
    </div>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="deleteCateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            ¿Esta seguro que desea eliminar esta categoria?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <form id="formCatDelete" method="POST" action="{{ route('categories.destroy',0) }}" data-action="{{ route('categories.destroy',0) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </div>
      </div>
    </div>
  </div>

