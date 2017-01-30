<?php
namespace App\Repo;

use Maatwebsite\Excel\Files\NewExcelFile;

/**
 * 	http://www.maatwebsite.nl/laravel-excel/docs/export
 *  Extending NewExcelFile class, a wrapper for a new Excel file
 *  for easy method injection
 */
class ICUserExport extends NewExcelFile
{
    /**
         * Maatwebsite\Excel\Files\NewExcelFile Method Over loading
         * @return String Name of the csv file
         */
    public function getFilename()
    {
        return 'icu-users';
    }
}
