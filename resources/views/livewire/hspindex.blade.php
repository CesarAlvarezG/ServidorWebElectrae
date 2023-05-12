<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" name="" id="" placeholder="Buscar..." class="form-control" wire:model="busqueda" wire:click="$refresh()">
        </div>
        <div class="col-sm-3">
            <select name="" id="" class="form-select" wire:click="$refresh()" wire:model="paginacion"  wire:init="init">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>


    </div>
    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th>
                    Hora Solar Promedio:
                </th>
                <th>
                    Fecha medicion:
                </th>
                <th>
                    opciones
                </th>
            </tr>
        </thead>
        <tbody>
             @foreach ($mediciones as $medicion)
             <tr>
                <td>
                    {{ $medicion ->hsp }}
                </td>
                <td>
                    {{ $medicion->fecha_medicion }}
                </td>
                <td>
                    <a href="{{ route('hsp.edit', $medicion) }}">Editar>   </a>
                    
                    <a href="{{ route('hsp.show', $medicion) }}">Ver></a>
                </td>

                
             </tr>
                 
             @endforeach
        </tbody>
        {{ $mediciones->links() }}
    </table>


</div>
