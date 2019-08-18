<table class="table table-responsive table-hover">
    <thead>

    <th class=>Tarifa</th>
    <th class=>Valor</th>
    <th>Opções</th>


    </thead>
    <tbody style="font-size: small">
    @foreach($tarifas as $tarifa)
        <tr>
            <td >{{ $tarifa->dtarifa->tar_desc }}</td>
            <td >
                {{'R$'.number_format($tarifa->tab_valor, 2, ',', '.') }}
            </td>
            <td >
                <button type="button" data-id="{{ $tarifa->getKey() }}" class="btn btn-sm btn-primary update-rate"><i class="fa fa-refresh "></i></button>
                <button type="button" data-id="{{ $tarifa->getKey() }}" class="btn btn-sm delete-rate"><i class="fa fa-close"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
