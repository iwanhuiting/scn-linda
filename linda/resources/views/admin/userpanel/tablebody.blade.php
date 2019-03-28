<tr>

	<td data-order="{{ $user->created_at }}">
		 {{ Carbon\Carbon::parse( $user->created_at )->format('d/m/Y') }}
	</td>

	<td>
		{{ $user->username }}
	</td>

	<td> 
		{{ $user->last_name }}
	</td>

	<td>
		@if($user->admin == 1)
			Is admin
		@else
			Is geen admin
		@endif
	</td>

</tr>
