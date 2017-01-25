<?php
namespace App\Repo;
use Maatwebsite\Excel\Files\NewExcelFile;

class ICUserExport extends NewExcelFile {

    public function getFilename()
    {
    		return 'icu-users';
    }
}