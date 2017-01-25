<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;
use App\Helpers\JResponse;

class ICUser extends Model
{
	/**
	 * Basic Validation for IC User Schema
	 *
	 * @return Boolen
	 * @author jumper
	 **/
	public function validate(array $data, $rules)
  {
	     return Validator::make($data, $rules);
  }
	/**
	 * Validation Rules for creating new IC user
	 *
	 * @return Array 
	 * @author Jumper
	 **/

	public function rules()
  {
      return [
          'name' => 'required',
          'gender' => 'required',
          'email' => 'required|email',
          'phone' => 'required|numeric',
          'address' => 'required',
          'nationality' => 'required',
          'dob' => 'required',
          'education_background' => 'required',
          'mode_of_contact' => 'required'
      ];
  }

  /**
   * Create New IC User
   *
   * @return void
   * @author 
   **/
  public function saveICUser($data='', $store = [],$icuUserExport)
  {
  	$valdiate = $this->validate($data, $this->rules());
  	if($valdiate->fails()){
      return JResponse::error($valdiate->errors()->all());
    }

  	if($data){
			array_push($store, $data);
			$icuUserExport->sheet('userList', function($sheet) use($store) {
	        $sheet->fromArray($store);
	    })->store('csv');

      return JResponse::data($data);
  	}
  }

  /**
   * Delete User Detail Row
   *
   * @return Boolen
   * @param   $index Inteter
   * @param   $store App\Repo\ICUserList;
   * @author 
   **/
  public function deleteICUser($store = [], $icuUserExport)
  {
  		$icuUserExport->sheet('userList', function($sheet) use($store) {
	        $sheet->fromArray($store);
	    })->store('csv');

	    return JResponse::data();
  	
  }
    
}
