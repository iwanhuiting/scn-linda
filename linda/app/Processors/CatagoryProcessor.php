<?php
namespace App\Processors;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CatagoryProcessor
{

    /**
     * Store the note in the database and flush the cache.
     * @param Request $request Post request.
     */
	public function createCatagory(Request $request, $name)
	{

		// Prepare data.
		$data = $this->prepareData($request, $name);

		// Create catagory.
		$catagory = Catagory::create($data);

		return $catagory;
	}

    /**
     * Prepare the data from the POST request.
     * @param Request $request Post request.
     */
	private function prepareData($request, $name)
	{
		// Set data array.
		$data = [
			'title' => $request->title,
			'image' => $name,
		];

		return $data;
	}

}
