<?php

namespace App\Exports;

use App\Models\Outlet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OutletExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Outlet::all();
    }

    public function map($outlet): array
    {
        return [
            $outlet->nama_outlet,
            $outlet->alamat_outlet,
            $outlet->telepon_outlet,
            $outlet->email_outlet,
        ];
    }
    public function headings(): array
    {
        return [
            'Nama',
            'Alamat',
            'Telepon',
            'Email',
        ];
    }

    public function styles(Worksheet $outlet)
    {
        return [
            // Style the first row as bold text.
            1 => ['font' => ['bold' => true]],
            
        ];
    }
}
