<?php
/**
 * Created by PhpStorm.
 * User: webdev
 * Date: 7/15/2017
 * Time: 1:27 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class Filter
{

    protected $request;
    protected $builder;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach ($this->filters() as $name => $value) {
            if (method_exists($this, $name)) {
                $this->$name(array_filter([$value]));
            }
        }


    }

    public function filters()
    {
        return $this->request->all();
    }
}