<?php

namespace App\Exports;

use App\Models\ReimbursementForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReimbursementsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return ReimbursementForm::with('user')->get()->map(function ($reimbursement) {
            return [
                'id' => $reimbursement->id,
                'name' => $reimbursement->user->name ?? 'N/A', // Handle nullable user relationship
                'price' => $reimbursement->price,
                'title' => $reimbursement->title,
                'date' => $reimbursement->date,
                'category' => $reimbursement->category,
                'is_paid' => $reimbursement->is_paid ? 'Paid' : 'Unpaid',
                'pictures' => implode(', ', [
                    $reimbursement->picture['before'] ?? 'N/A',
                    $reimbursement->picture['after'] ?? 'N/A',
                    $reimbursement->picture['documentation'] ?? 'N/A',
                ]),
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Price',
            'Title',
            'Date',
            'Category',
            'Status',
            'Foto (Before, After, Documentation)'
        ];
    }
}
