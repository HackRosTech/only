<?php

namespace App\Filters;

class ModelAutomobileFilter extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->where('model_id', '=', $this->getParameters());
    }
}
