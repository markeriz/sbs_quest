<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MarksAverageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Gražinamas masyvas su studijų dalyko pavadinimu ir jo vidurkio reikšme
        return [
            $this->subject->code => $this->average,
        ];
    }
}
