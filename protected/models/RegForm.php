<?php
/**
 * RegistrationForm class.
 * RegistrationForm is the data structure for keeping
 * user registration form data. It is used by the 'registration' action of 'UserController'.
 */
class RegForm extends User {
	public function rules() {
		$rules = array(
			array('name, company, title, phone, email, address', 'required', 'message'=>'请正确输入 {attribute}'),
			//company_address, company_website, blog
 			//array('email', 'email'),
            //array('telephone', 'numerical', 'integerOnly'=>true),
		);
		return $rules;	
	}
	
}