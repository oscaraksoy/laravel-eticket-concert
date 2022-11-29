<?php

namespace App\Services\Api\Main;

use App\Services\ApiService;
use App\Http\Resources\Main\ConcertResource;

class ConcertService extends ApiService
{
    /**
     * Index function.
     */
    public function index()
    {
        $concerts = $this->concertInterface->all(['*'], ['companion']);

        if (count($concerts) > 0) {
            return $this->createResponse(trans('api.response.accepted'), [
                'data' => ConcertResource::collection($concerts)
            ], 202);
        }

        return $this->createResponse(trans('api.response.accepted'), [
            'data' => trans('api.response.no_data')
        ], 202);
    }

    /**
     * Show function.
     * 
     * @param $path
     */
    public function show($id)
    {
        $concert = $this->concertInterface->findById(intval($id), ['*'], ['companion']);

        return $this->createResponse(trans('api.response.accepted'), [
            'data' => new ConcertResource($concert)
        ], 206);
    }
}