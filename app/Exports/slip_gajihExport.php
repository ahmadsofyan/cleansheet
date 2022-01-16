<?php

namespace App\Exports;

use App\Models\slip_gajih;
use Maatwebsite\Excel\Concerns\FromCollection;

class slip_gajihExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return slip_gajih::all();
    }
}
