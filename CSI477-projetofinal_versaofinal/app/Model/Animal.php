<?php

class Animal extends AppModel{


public $validate = array(
	   'nome' => array(

		   	'alphaNumeric' => array(
	                'rule'     => 'alphaNumeric',
	                'message'  => 'Somente letras e números'
	        ),

	        'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Animal já cadastrado em nosso banco de dados'
			),
  		)

);


}
