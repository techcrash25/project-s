<?php

namespace App\Exports;


use App\Models\Course;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{


    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        return DB::table('students')
            ->select(
                'students.document',
                'students.name',
                'students.lastname',
                'students.telephone',
                'students.email',
                'students.address',
                DB::raw("CASE WHEN students.state='1' THEN 'Sin síntomas'  ELSE '¡Con sintomas!' END")
            )->get();
    }


    public function headings(): array
    {
        return [
            [
                'Documento',
                'Nombre',
                'Apellido',
                'Teléfono',
                'Correo electrónico',
                'Dirección',
                'Estado'
            ]
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $position_last = count($this->headings()[1]);

                $column = Coordinate::stringFromColumnIndex($position_last);
                $cells = "A1:{$column}1";
                $event->sheet->mergeCells($cells);
                $event->sheet->getDelegate()->getStyle($cells)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cells)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
                $event->sheet->getDelegate()->getStyle($cells)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            }
        ];
    }
}
