
<div class="col-12 col-sm-6 mx-3 my-2 border rounded p-2" style="overflow-y:auto; width:100%; height:500px;">
    <div class="row" style=" height:500px;">
        <div class="col-12 align-self-start">
            <table class="table table-bordered table-striped" style=" ">
                <thead class="thead-dark ">
                    <tr class="table-info">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Código de color</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead> <!-- Columnas Tabla -->

                <tbody>
                    @foreach ($colors as $color)
                    <tr>
                        <td>{{$color->id_color}}</td>
                        <td>{{$color->name}}</td>
                        <td>{{$color->image}}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal" data-id="{{ $color->id_color}}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            
                            <button class="btn btn-info" 
                                style="cursor: pointer" data-toggle="modal" 
                                data-target="#editColorsModal" data-myid="{{$color->id_color}}" data-myname="{{$color->name}}" 
                                data-mycode="{{$color->image}}" >
                                <i class="fas fa-marker"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody> <!-- Registros Tabla -->
            </table>
        </div>
        <div class="col-12 align-self-end">
            
        </div>
    </div>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="deleteCateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Color</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            ¿Esta seguro que desea eliminar este color?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <form id="formCatDelete" method="POST" action="{{ route('colors.destroy',0) }}" data-action="{{ route('colors.destroy',0) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="editColorsModal" tabindex="-1" role="dialog" aria-labelledby="editColorsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editColorsModalLabel">Editar Color</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  action="{{route('colors.update', 0)}}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <input hidden  type="text" id="id_color" name="id_color">
                    </div>

                    <div class="form-group">
                        <input type="text" id="name" name="name" value="" class="form-control" 
                        placeholder="Colocar Nombre" required>
                    </div> 

                    <div class="form-group">
                        <input type="text" id="image" name="image" value="" class="form-control" 
                        placeholder="Colocar Código" required>
                    </div> 

                    <button class="btn btn-outline-dark primary btn-sm" type="submit">Editar</button>  
                </form>
            </div>
        </div>
    </div>
</div>
