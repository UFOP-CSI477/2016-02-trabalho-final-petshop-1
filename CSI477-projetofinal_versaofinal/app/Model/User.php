<?php

class User extends AppModel{

	public $hasMany = 'Adoption';

	public $validate = array(
	   'name' => array(

		   	'alphaNumeric' => array(
	                'rule'     => 'alphaNumeric',
	                'message'  => 'Somente letras e números'
	        ),

	        'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Usuário já cadastrado em nosso banco de dados'
			),
  		),

	   'email' => array('email'),


	   'senha' => array(
	        'minLength' => array(
		        'rule' => array('minLength', 8),
		        'message' => 'Senha deve conter no mínimo 8 caracteres'
	        ),

	        'validacaoSenha' => array(
	   			'rule' => array('validacaoSenha'),
	   			'message' => 'Senhas não combinam'
	   		)

	    ),

	   'csenha' => array(
	   		'minLength' => array(
		        'rule' => array('minLength', 8),
		        'message' => 'Senha deve conter no mínimo 8 caracteres'
	        ),

	   		'validacaoSenha' => array(
	   			'rule' => array('validacaoSenha'),
	   			'message' => 'Senhas não combinam'
	   		)

	   	)

	);


	public function validacaoSenha($data){

        $senha = $this->data['User']['senha'];
        $confirm_senha = $this->data['User']['csenha'];

        if($senha===$confirm_senha){

            return true;

        }else{

            return false;

        }

    }


}
