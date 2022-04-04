<?php

namespace App\Imports;

use App\Models\Admin\Futsal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class FutsalImport implements ToCollection, WithHeadingRow, WithProgressBar
{
    use Importable;
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            Futsal::create([
                'name' => $row['name'],
                'address' => $row['address'],
                'phone' => $row['phone'],
                'map' => $row['map'],
                'latitude' => $row['latitude'],
                'longitude' => $row['longitude'],
            ]);
        }
    }
}
