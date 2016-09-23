<?php
/** @package    Daviwebservice::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Notas object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Daviwebservice::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class NotasReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `notas` table
	public $CustomFieldExample;

	public $IdNotas;
	public $AvaliacaoNome;
	public $Datas;
	public $Calculo;
	public $Nota;
	public $IdNotasAluno;
	public $IdNotasMateria;

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
			,`notas`.`id_notas` as IdNotas
			,`notas`.`avaliacao_nome` as AvaliacaoNome
			,`notas`.`datas` as Datas
			,`notas`.`calculo` as Calculo
			,`notas`.`nota` as Nota
			,`notas`.`id_notas_aluno` as IdNotasAluno
			,`notas`.`id_notas_materia` as IdNotasMateria
		from `notas`";

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
		$sql = "select count(1) as counter from `notas`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>