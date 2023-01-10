<?php

namespace App\Filters;

class CategoryComfortFilter extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->where('category_comfort_id', '=', $this->getParameters());
    }
}
