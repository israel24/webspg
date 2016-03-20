<table class="table">
    <thead>
    <th>Titulo</th>
			<th>Facultad</th>
			<th>Logo</th>
			<th>Estado</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($sistemaUnos as $sistemaUno)
        <tr>
            <td>{!! $sistemaUno->titulo !!}</td>
			<td>{!! $sistemaUno->facultad !!}</td>
			<td>{!! $sistemaUno->logo !!}</td>
			<td>{!! $sistemaUno->estado !!}</td>
            <td>
                <a href="{!! route('sistemaUnos.edit', [$sistemaUno->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('sistemaUnos.delete', [$sistemaUno->id]) !!}" onclick="return confirm('Are you sure wants to delete this SistemaUno?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
