<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Notifications\RepliedToThread;
use App\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function addThreadComment(Request $request, Thread $thread)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

//        $comment=new Comment();
//        $comment->body=$request->body;
//        $comment->user_id=auth()->user()->id;
//
//        $thread->comments()->save($comment);

        $thread->addComment($request->body);

        $thread->user->notify(new RepliedToThread($thread));

        return back()->withMessage('comment created');
    }

    public function addReplyComment(Request $request, Comment $comment)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment->addComment($request->body);

        return back()->withMessage('Reply created');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        if($comment->user_id !== auth()->user()->id)
            abort('401');

        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment->update($request->all());

        return back()->withMessage('updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if($comment->user_id !== auth()->user()->id)
            abort('401');

        $comment->delete();

        return back()->withMessage('Deleted');

    }
}
