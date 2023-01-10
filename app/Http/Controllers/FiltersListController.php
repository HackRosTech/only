<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilterListResource;
use App\Models\CategoryComfort;
use App\Models\ModelAutomobile;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FiltersListController extends Controller
{
    public function categoriesComfort(): JsonResponse
    {
        $categoriesComfort = CategoryComfort::all();


        return (FilterListResource::collection($categoriesComfort))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function modelsAutomobiles(): JsonResponse
    {
        $modelsAutomobiles = ModelAutomobile::all();

        return (FilterListResource::collection($modelsAutomobiles))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }
}
