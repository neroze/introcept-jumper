<?php
namespace App\Repo;
use Maatwebsite\Excel\Files\ExcelFile;
use Excel;

class ICUserList extends ExcelFile {

    public function getFile()
    {
    		if(!file_exists(storage_path('exports') . '/icu-users.csv')){
    			 Excel::create('icu-users', function($excel)  {
						    $excel->sheet('userList', function($sheet) {
						        $sheet->fromArray([["Name","Gender",'Email','Phone','Address','Nationality','DOB','Education Background','Mode Of Contact']]);
						    });
						})->store('csv');
  			}
  			return storage_path('exports') . '/icu-users.csv';
    }
}