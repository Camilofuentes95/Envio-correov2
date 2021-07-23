<?php

namespace App\Imports;

use App\Models\dato;
use Maatwebsite\Excel\Concerns\ToModel;

class Datosimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new dato([
            'name' => $row[0],
            'email' => $row[1],

            //
        ]);
    }
}
