<?php

namespace App\Filters;

use Illuminate\Support\Str;

abstract class Filter
{
    public function handle($request, \Closure $next)
    {
        if (! request()->has($this->filterName())) {
            return $next($request);
        }

        $builder = $next($request);
        return $this->applyFilter($builder, $request);
    }

    protected abstract function applyFilter($builder);

    protected function filterName(): string
    {
        return Str::snake(class_basename($this));
    }

    protected function getParameters()
    {
        return request()->get($this->filterName());
    }

}
