<?php
/**
 * Created by PhpStorm.
 * User: subhendu
 * Date: 2/11/2018
 * Time: 9:32 PM
 */

namespace App;


trait RecordsFeed
{

    protected static function bootRecordsFeed()
    {
        static::created(function($model){
            $model->recordFeed('created');
        });

    }

    public function feeds()
    {
        return $this->morphMany(Feed::class, 'feedable');
    }

    protected function recordFeed($event)
    {
        $this->feeds()->create([
            'user_id' => auth()->id(),
            'type'    => $event . '_' . strtolower(class_basename($this))
        ]);
    }
}