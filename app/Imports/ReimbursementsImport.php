<?php

namespace App\Imports;

use App\Models\ReimbursementForm;
use Maatwebsite\Excel\Concerns\ToModel;

class ReimbursementsImport implements ToModel
{
    public function model(array $row)
    {
        return new ReimbursementForm([
            'employee_name' => $row[0],
            'category' => $row[1],
            'amount' => $row[2],
            'date' => $row[3],
        ]);
    }
}
