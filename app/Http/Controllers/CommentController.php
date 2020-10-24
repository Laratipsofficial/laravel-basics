<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        Session::put('activeNav', 'comments');

        $data = [
            'title' => 'Comments',
            'comments' => Comment::with(['commentable'])->whereHasMorph(
                'commentable',
                ['*'],
                function (Builder $query, $type) {
                    if ($type === Post::class) {
                        return $query->where('title', 'like', 'Aspernatur%');
                    } 

                    return $query->where('title', 'like', 'Dolorem%');
                }
            )->where('is_active', 1)->get(),
        ];

        return view('comments', $data);
    }
}
