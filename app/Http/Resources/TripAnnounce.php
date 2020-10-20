<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TripAnnounce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        /*[
            'departure_city' => $this->departure_city,
             'arrival_city' => $this->departure_city,
             'departure_date' => $this->departure_date,
              'arrival_date' => $this->arrival_date,
            'number_kilo' => $this->number_kilo,
            'price_kilo' => $this->price_kilo,
            'currency' => $this->currency,
            'transport' => $this->transport,
            'paypal_info' => $this->paypal_info,
        ];*/
    }
}
