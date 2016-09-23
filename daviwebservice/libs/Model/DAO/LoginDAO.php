<?php
/** @package Daviwebservice::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("LoginMap.php");

/**
 * LoginDAO provides object-oriented access to the login table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Daviwebservice::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class LoginDAO extends Phreezable
{
	/** @var int */
	public $IdLogin;

	/** @var string */
	public $Login;

	/** @var string */
	public $Senha;

	/** @var int */
	public $IdLoginAluno;


	/**
	 * Returns the foreign object based on the value of IdLoginAluno
	 * @return Aluno
	 */
	public function GetIdLoginAluno()
	{
		return $this->_phreezer->GetManyToOne($this, "login_ibfk_1");
	}


}
?>