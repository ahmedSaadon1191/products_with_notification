<?php

namespace App\Exports;

use App\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmpolyeeExport implements FromCollection, WithHeadingRow
{
    public function headings(): array
    {
        return ['name', 'social_number', 'phone', 'job', 'going_date', 'response', 'start_permit', 'end_permit'];

    }
    public function collection()
    {
        //  Customer::all();

        return collect(Customer::getEmployee());
    }
}
