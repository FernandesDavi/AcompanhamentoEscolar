<?php
/** @package    Bancotccdavi::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Aluno object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Bancotccdavi::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class AlunoReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `aluno` table
	public $CustomFieldExample;

	public $IdAluno;
	public $Nome;
	public $Cpf;
	public $Rg;
	public $Logradouro;
	public $Cep;
	public $Numero;
	public $Complemento;
	public $Prontuario;
	public $IdRespAluno;

	/*
	* GetCustomQuery returns a fully formed SQL statement.  The result columns
	* must match with the properties of this reporter object.
	*
	* @see Reporter::GetCustomQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomQuery($criteria)
	{
		$sql = "select
			'custom value here...' as CustomFieldExample
			,`aluno`.`id_aluno` as IdAluno
			,`aluno`.`nome` as Nome
			,`aluno`.`cpf` as Cpf
			,`aluno`.`rg` as Rg
			,`aluno`.`logradouro` as Logradouro
			,`aluno`.`cep` as Cep
			,`aluno`.`numero` as Numero
			,`aluno`.`complemento` as Complemento
			,`aluno`.`prontuario` as Prontuario
			,`aluno`.`id_resp_aluno` as IdRespAluno
		from `aluno`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();
		$sql .= $criteria->GetOrder();

		return $sql;
	}
	
	/*
	* GetCustomCountQuery returns a fully formed SQL statement that will count
	* the results.  This query must return the correct number of results that
	* GetCustomQuery would, given the same criteria
	*
	* @see Reporter::GetCustomCountQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomCountQuery($criteria)
	{
		$sql = "select count(1) as counter from `aluno`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>