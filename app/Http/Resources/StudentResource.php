<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $averages = MarksAverageResource::collection($this->subject_average);

        // Paverčiamas multi masyvas į masivą
        $averages = call_user_func_array('array_merge', $averages->toArray(1));

        // Gražinimas lentelės turinio masyvas.
        return [
            'university_name' => $this->university->name,
            'full_name' => $this->full_name,
            'subjects' => $averages,
        ];
    }
}
