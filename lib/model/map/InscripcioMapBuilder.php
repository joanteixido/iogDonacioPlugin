<?php


/**
 * This class adds structure of 'inscripcio' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Wed Feb 17 15:53:27 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    plugins.iogContactePlugin.lib.model.map
 */
class InscripcioMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.iogContactePlugin.lib.model.map.InscripcioMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(InscripcioPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(InscripcioPeer::TABLE_NAME);
		$tMap->setPhpName('Inscripcio');
		$tMap->setClassname('Inscripcio');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('NOM', 'Nom', 'VARCHAR', false, 255);

		$tMap->addColumn('COGNOMS', 'Cognoms', 'VARCHAR', false, 255);

		$tMap->addColumn('DNI', 'Dni', 'VARCHAR', false, 11);

		$tMap->addColumn('TELEFON', 'Telefon', 'VARCHAR', false, 11);

		$tMap->addColumn('ESCOLA', 'Escola', 'VARCHAR', false, 255);

		$tMap->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255);

		$tMap->addColumn('DATA_NAIXEMENT', 'DataNaixement', 'DATE', false, null);

	} // doBuild()

} // InscripcioMapBuilder
