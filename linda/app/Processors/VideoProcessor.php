<?php
namespace App\Processors;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class VideoProcessor
{

    /**
     * Store the note in the database and flush the cache.
     * @param Request $request Post request.
     */
	public function updateVideo(Request $request, $name)
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
	private function prepareData($request, $thumbnail_name, $video_name, $views_count)
	{
		// Set data array.
		$data = [
			'user_id' => Auth::user()->id,
			'catagory_id' => $id,
			'views' => $views_count,
			'title' => $request->title,
			'video' => $video_name,
			'description' => $request->description,
			'thumbnail' => $thumbnail_name,
		];

		return $data;
	}

}
