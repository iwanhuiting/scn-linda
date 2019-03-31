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
	public function storeVideo(Request $request, $thumbnailname, $videoname, $views, $id)
	{

		// Prepare data.
		$data = $this->prepareData($request, $thumbnailname, $videoname, $id, $views);

		// Create catagory.
		$video = Video::create($data);

		return $video;

	}

    /**
     * Prepare the data from the POST request.
     * @param Request $request Post request.
     */
	private function prepareData($request, $thumbnailname, $videoname, $id, $views)
	{
		// Set data array.
		$data = [
			'user_id' => Auth::user()->id,
			'catagory_id' => $id,
			'views' => $views,
			'title' => $request->title,
			'video' => $videoname,
			'description' => $request->description,
			'thumbnail' => $thumbnailname,
		];

		return $data;
	}

}
