<tr>

	<td data-order="{{ $video->created_at }}">
		 {{ Carbon\Carbon::parse( $video->created_at )->format('d/m/Y') }}
	</td>

	<td>
		{{ $video->title }}
	</td>

	<td> 
		{{ $video->description }}
	</td>

	<td>
		{{ $video->views}}
	</td>

</tr>
