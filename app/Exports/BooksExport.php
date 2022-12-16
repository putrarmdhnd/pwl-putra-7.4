<?php

namespace App\Exports;

use App\Models\Book;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;

class BooksExport implements FromArray, WithHeadings, ShouldAutoSize
{
    public function array(): array{
        return Book::getDataBooks();
    }
    public function headings(): array
    {
        return[
            'No',
            'Judul',
            'Penulis',
            'Tahun',
            'Penerbit'
        ];
    }
    public function collection()
    {
        return Book::all();
    }
}
