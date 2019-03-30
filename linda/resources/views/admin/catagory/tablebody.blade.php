<tr>

	<td data-order="{{ $catagorie->created_at }}">
		 {{ Carbon\Carbon::parse( $catagorie->created_at )->format('d/m/Y') }}
	</td>

	<td>
		{{ $catagorie->title }}
	</td>

	<td> 
		{{ $catagorie->image }}
	</td>

</tr>
