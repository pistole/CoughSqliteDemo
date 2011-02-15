<?php

/**
 * This is the base class for sl_T1.
 * 
 * @see sl_T1, CoughObject
 **/
abstract class sl_T1_Generated extends CoughObject {
	
	protected static $db = null;
	protected static $dbName = 'main';
	protected static $dbAlias = 'main';
	
	protected static $tableName = 't1';
	protected static $pkFieldNames = array('a');
	
	protected $fields = array(
		'a' => null,
		'b' => "",
	);
	
	protected static $fieldDefinitions = array(
		'a' => array(
			'db_column_name' => 'a',
			'is_null_allowed' => false,
			'default_value' => null,
			'type' => 'INTEGER'
		),
		'b' => array(
			'db_column_name' => 'b',
			'is_null_allowed' => false,
			'default_value' => "",
			'type' => 'INTEGER'
		),
	);
	
	protected $objectDefinitions = array();
	
	// Static Definition Methods
	
	public static function getDb() {
		if (is_null(sl_T1::$db)) {
			sl_T1::$db = CoughDatabaseFactory::getDatabase(sl_T1::$dbAlias);
		}
		return sl_T1::$db;
	}
	
	public static function getDbName() {
		return CoughDatabaseFactory::getDatabaseName(sl_T1::$dbAlias);
	}
	
	public static function getTableName() {
		return sl_T1::$tableName;
	}
	
	public static function getPkFieldNames() {
		return sl_T1::$pkFieldNames;
	}
	
	protected static function getFieldDefinitions() {
		return sl_T1::$fieldDefinitions;
	}
	
	// Static Construction (factory) Methods
	
	/**
	 * Constructs a new sl_T1 object from
	 * a single id (for single key PKs) or a hash of [field_name] => [field_value].
	 * 
	 * The key is used to pull data from the database, and, if no data is found,
	 * null is returned. You can use this function with any unique keys or the
	 * primary key as long as a hash is used. If the primary key is a single
	 * field, you may pass its value in directly without using a hash.
	 * 
	 * @param mixed $idOrHash - id or hash of [field_name] => [field_value]
	 * @return mixed - sl_T1 or null if no record found.
	 **/
	public static function constructByKey($idOrHash, $forPhp5Strict = '') {
		return CoughObject::constructByKey($idOrHash, 'sl_T1');
	}
	
	/**
	 * Constructs a new sl_T1 object from custom SQL.
	 * 
	 * @param string $sql
	 * @return mixed - sl_T1 or null if exactly one record could not be found.
	 **/
	public static function constructBySql($sql, $forPhp5Strict = '') {
		return CoughObject::constructBySql($sql, 'sl_T1');
	}
	
	/**
	 * Constructs a new sl_T1 object after
	 * checking the fields array to make sure the appropriate subclass is
	 * used.
	 * 
	 * No queries are run against the database.
	 * 
	 * @param array $hash - hash of [field_name] => [field_value] pairs
	 * @return sl_T1
	 **/
	public static function constructByFields($hash) {
		return new sl_T1($hash);
	}
	
	public function getDeletionStrategy() {
		return CoughDeletionStrategy::constructByType('Delete');
	}
	
	public static function getLoadSql() {
		$tableName = sl_T1::getTableName();
		return '
			SELECT
				`' . $tableName . '`.*
			FROM
				`' . sl_T1::getDbName() . '`.`' . $tableName . '`
		';
	}
	
	// Generated attribute accessors (getters and setters)
	
	public function getA() {
		return $this->getField('a');
	}
	
	public function setA($value) {
		$this->setField('a', $value);
	}
	
	public function getB() {
		return $this->getField('b');
	}
	
	public function setB($value) {
		$this->setField('b', $value);
	}
	
	// Generated one-to-one accessors (loaders, getters, and setters)
	
	// Generated one-to-many collection loaders, getters, setters, adders, and removers
	
}

?>