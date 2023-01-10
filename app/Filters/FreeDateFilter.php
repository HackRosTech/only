<?php

namespace App\Filters;

use Illuminate\Http\Request;

class FreeDateFilter extends Filter
{
    protected function applyFilter($builder)
    {
        $parameters = json_decode($this->getParameters());

        return $builder->whereNotIn('id', function ($query) use ($parameters) {
            $query->select('automobile_id')
                ->from('booking')
                ->where('start_time', '<', $parameters->finish_time)
                ->where('finish_time', '>', $parameters->start_time);
        });
    }
}
