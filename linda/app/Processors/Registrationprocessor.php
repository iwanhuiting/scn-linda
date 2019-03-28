<?php
namespace App\Processors;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class RegistrationProcessor
{

    /**
     * Store the note in the database and flush the cache.
     * @param Request $request Post request.
     */
	public function createUser(Request $request)
	{

		// Prepare data.
		$data = $this->prepareData($request);

		// Create lead.
		$user = User::create($data);

		return $user;
	}

    /**
     * Prepare the data from the POST request.
     * @param Request $request Post request.
     */
	private function prepareData($request)
	{
		// Set data array.
		$data = [
			'first_name' => $request->first_name,
			'middle_name' => $request->middle_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
		];

		if(!empty($request->password))
		{
			$data['password'] = bcrypt($request->password);
		}

		return $data;
	}

}