<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 7/15/2017
 * Time: 1:06 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ThreadFilters extends Filter
{

    public function tags($value=1)
    {
        $this->builder->whereHas('tags', function ($query) use ($value) {
            $query->where('tag_id', $value);
        });
    }

    public function user($value)
    {
        $this->builder->where('user_id', $value);

    }


}