<?php

namespace App\Http\Controllers;

use App\Http\Resources\Booking\IndexResource;
use App\Http\Resources\FilterListResource;
use App\Models\Automobile;
use App\Models\CategoryComfort;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends Controller
{
    /**
     * Фильтры реализовал с помощью pipeline, т.к. в самом Laravel если посмотреть исходники используются пайпланы,
     * для прохода объекта request по каждому middleware,
     * на пример в методе Illuminate\Foundation\Http\Kernel\sendRequestThroughRouter()
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $cars = Automobile::filteredAutomobile();

        return (IndexResource::collection($cars))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }
}
