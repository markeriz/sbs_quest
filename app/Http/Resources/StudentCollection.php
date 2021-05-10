<?php

namespace App\Http\Resources;

use App\Models\Student;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $head = new Student();
        $thead = $head->tHeadListAverageOfSubject();

        return [
            'thead' => $thead,
            'tbody' => $this->collection
        ];
    }
}
