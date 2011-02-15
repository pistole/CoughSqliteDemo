<?php

/**
 * This is the base class for sl_Artist.
 * 
 * @see sl_Artist, CoughObject
 **/
abstract class sl_Artist_Generated extends CoughObject {
	
	protected static $db = null;
	protected static $dbName = 'main';
	protected static $dbAlias = 'main';
	
	protected static $tableName = 'artist';
	protected static $pkFieldNames = array('artistid');
	
	protected $fields = array(
		'artistid' => null,
		'artistname' => "",
	);
	
	protected static $fieldDefinitions = array(
		'artistid' => array(
			'db_column_name' => 'artistid',
			'is_null_allowed' => false,
			'default_value' => null,
			'type' => 'INTEGER'
		),
		'artistname' => array(
			'db_column_name' => 'artistname',
			'is_null_allowed' => false,
			'default_value' => "",
			'type' => 'TEXT'
		),
	);
	
	protected $objectDefinitions = array();
	
	// Static Definition Methods
	
	public static function getDb() {
		if (is_null(sl_Artist::$db)) {
			sl_Artist::$db = CoughDatabaseFactory::getDatabase(sl_Artist::$dbAlias);
		}
		return sl_Artist::$db;
	}
	
	public static function getDbName() {
		return CoughDatabaseFactory::getDatabaseName(sl_Artist::$dbAlias);
	}
	
	public static function getTableName() {
		return sl_Artist::$tableName;
	}
	
	public static function getPkFieldNames() {
		return sl_Artist::$pkFieldNames;
	}
	
	protected static function getFieldDefinitions() {
		return sl_Artist::$fieldDefinitions;
	}
	
	// Static Construction (factory) Methods
	
	/**
	 * Constructs a new sl_Artist object from
	 * a single id (for single key PKs) or a hash of [field_name] => [field_value].
	 * 
	 * The key is used to pull data from the database, and, if no data is found,
	 * null is returned. You can use this function with any unique keys or the
	 * primary key as long as a hash is used. If the primary key is a single
	 * field, you may pass its value in directly without using a hash.
	 * 
	 * @param mixed $idOrHash - id or hash of [field_name] => [field_value]
	 * @return mixed - sl_Artist or null if no record found.
	 **/
	public static function constructByKey($idOrHash, $forPhp5Strict = '') {
		return CoughObject::constructByKey($idOrHash, 'sl_Artist');
	}
	
	/**
	 * Constructs a new sl_Artist object from custom SQL.
	 * 
	 * @param string $sql
	 * @return mixed - sl_Artist or null if exactly one record could not be found.
	 **/
	public static function constructBySql($sql, $forPhp5Strict = '') {
		return CoughObject::constructBySql($sql, 'sl_Artist');
	}
	
	/**
	 * Constructs a new sl_Artist object after
	 * checking the fields array to make sure the appropriate subclass is
	 * used.
	 * 
	 * No queries are run against the database.
	 * 
	 * @param array $hash - hash of [field_name] => [field_value] pairs
	 * @return sl_Artist
	 **/
	public static function constructByFields($hash) {
		return new sl_Artist($hash);
	}
	
	public function getDeletionStrategy() {
		return CoughDeletionStrategy::constructByType('Delete');
	}
	
	public static function getLoadSql() {
		$tableName = sl_Artist::getTableName();
		return '
			SELECT
				`' . $tableName . '`.*
			FROM
				`' . sl_Artist::getDbName() . '`.`' . $tableName . '`
		';
	}
	
	// Generated attribute accessors (getters and setters)
	
	public function getArtistid() {
		return $this->getField('artistid');
	}
	
	public function setArtistid($value) {
		$this->setField('artistid', $value);
	}
	
	public function getArtistname() {
		return $this->getField('artistname');
	}
	
	public function setArtistname($value) {
		$this->setField('artistname', $value);
	}
	
	// Generated one-to-one accessors (loaders, getters, and setters)
	
	// Generated one-to-many collection loaders, getters, setters, adders, and removers
	
}

?>