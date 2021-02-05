<?php

namespace App\Imports;

use Throwable;
use Modules\Students\Entities\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class StudentsImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure, WithBatchInserts
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'first_name' => $row['first_name'],
            'middle_name' => $row['middle_name'], 
            'last_name' =>  $row['last_name'],
            'student_number' => $row['student_number'],
        ]);
    }

    public function rules(): array
    {
        return [
            'first_name' =>'bail|required|string',
            'middle_name' =>'bail|required|string',
            'last_name' =>'bail|required|string',
            '*.student_number' =>'bail|required|unique:students',
        ];
    }

    public function batchSize(): int
    {
        return 500;
    }

    public function onError(Throwable $error)
    {
        info($error);
    }
}
