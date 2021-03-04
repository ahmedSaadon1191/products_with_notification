<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class EmpolyeeImport implements ToModel
{

    public function model(array $row)
    {
        return new Customer([

            'name' => $row['1'],
            'social_number' => $row[2],
            'phone' => $row[3],
            'job' => $row[4],
            'going_date' => date('Y-m-d', strtotime($row[5])),
            'response' => $row[6],
            'start_permit' => date('Y-m-d', strtotime($row[7])),
            'end_permit' => date('Y-m-d', strtotime($row[8])),
            'notes' => $row[9],

        ]);
    }
}
