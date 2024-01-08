<?php

namespace App\Imports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportCourse implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Course([
            'id' => $row[0],
            'title' => $row[1],
            'discription' => $row[2],
            'created_at' => $row[3],
            'updated_at' => $row[4],
        ]);
    }
}
