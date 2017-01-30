<?php
namespace App\Repo;

use Maatwebsite\Excel\Files\ExcelFile;
use Excel;

/**
 * http://www.maatwebsite.nl/laravel-excel/docs/import
 *  Extending ExcelFile class, a wrapper for a  Excel file
 *  ICUser list wrapper for csv file to read data inside
 */
class ICUserList extends ExcelFile
{
    /**
     * Maatwebsite\Excel\Files\ExcelFile Method over loading to set csv file to read ( create if donot exits )
     * @return String CSV file path
     */
    public function getFile()
    {
        if (!file_exists(storage_path('exports') . '/icu-users.csv')) {
            Excel::create('icu-users', function ($excel) {
                $excel->sheet('userList', function ($sheet) {
                    $sheet->fromArray([["Name","Gender",'Email','Phone','Address','Nationality','DOB','Education Background','Mode Of Contact']]);
                });
            })->store('csv');
        }
        return storage_path('exports') . '/icu-users.csv';
    }
}
