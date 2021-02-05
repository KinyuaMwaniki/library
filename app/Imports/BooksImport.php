<?php

namespace App\Imports;

use Throwable;
use Carbon\Carbon;
use Modules\Books\Entities\Book;
use Modules\Books\Entities\Genre;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class BooksImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure, WithBatchInserts
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        $genre = Genre::firstOrCreate([
            'name' => $row['genre']
        ]);

        return new Book([
            'title' => $row['title'],
            'author' => $row['author'], 
            'isbn' =>  $row['isbn'],
            'publisher' => $row['publisher'],
            'genre_id' => $genre->id,
            'publication_date' => Carbon::parse($row['publication_date']),
            'total_stock' => $row['total_stock'],
            'total_available' => $row['total_stock'],
        ]);
    }

    public function rules(): array
    {
        return [
            'title' =>'bail|required|string',
            'author' =>'bail|required|string',
            'genre' =>'bail|required',
            '*.isbn' =>'bail|required|unique:books',
            'total_stock' =>'bail|required',
        ];
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function onError(Throwable $error)
    {
        
    }
}
