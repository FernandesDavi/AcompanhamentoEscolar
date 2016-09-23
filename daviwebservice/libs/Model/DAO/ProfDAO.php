<?php
/** @package Daviwebservice::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("ProfMap.php");

/**
 * ProfDAO provides object-oriented access to the prof table.  This
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
class ProfDAO extends Phreezable
{
	/** @var int */
	public $IdProf;

	/** @var string */
	public $NomeProf;


	/**
	 * Returns a dataset of Materia objects with matching IdMateriaProf
	 * @param Criteria
	 * @return DataSet
	 */
	public function GetIdMateriaMaterias($criteria = null)
	{
		return $this->_phreezer->GetOneToMany($this, "materia_ibfk_1", $criteria);
	}


}
?>