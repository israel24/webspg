



                  

<div class="table">
<table class="table table-bordered table-striped table-hover">
    
    <th>Tema</th>
			<th>Menu</th>
    
    <th>Acciones</th>
    <tbody>
    @foreach($temas as $tema)
        
            <td>{!! $tema->tema !!}</td>
            
			<td>{!! $tema->menu !!}
            
            </td>
            <td>
                
                <a href="{!! route('temas.edit', [$tema->id]) !!}">
                    <button type="submit" class="btn-primary btn-xs">Editar</button>
                </a> 
            </td>
        
    @endforeach
    </tbody>
</table>
</div>
