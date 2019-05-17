<?php
namespace App\Processors;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CommentProcessor
{

    /**
     * Store the note in the database and flush the cache.
     * @param Request $request Post request.
     */
	public function storeComment(Request $request, $id)
	{


		// Prepare data.
		$data = $this->prepareData($request, $id);

		// Create catagory.
		$comment = Comment::create($data);

		return $comment;

	}

    /**
     * Prepare the data from the POST request.
     * @param Request $request Post request.
     */
	private function prepareData($request, $id)
	{
		// Set data array.
		$data = [
			'user_id' => Auth::user()->id,
			'video_id' => $id,
			'title' => $request->title,
			'response' => $request->response,
			'response_to' => $request->responseto,
		];

		return $data;
	}

}
