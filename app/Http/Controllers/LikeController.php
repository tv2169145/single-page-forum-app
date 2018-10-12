<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt');
    }

    public function likeIt(Reply $reply, Request $request)
    {
        $reply->like()->create([
//            'user_id' => auth()->id(),
            'user_id' => '1',
        ]);
//        $reply->like()->create($request->all());
        return response('like it', Response::HTTP_OK);
    }

    public function unLikeIt(Reply $reply)
    {
//        $reply->like()->where('user_id', auth()->id())->first()->delete();
        $reply->like()->where('user_id','1')->first()->delete();
        return response('delete', Response::HTTP_OK);
    }
}
