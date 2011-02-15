<?php

/**
 * This is the base class for sl_Track.
 * 
 * @see sl_Track, CoughObject
 **/
abstract class sl_Track_Generated extends CoughObject {
	
	protected static $db = null;
	protected static $dbName = 'main';
	protected static $dbAlias = 'main';
	
	protected static $tableName = 'track';
	protected static $pkFieldNames = array('trackid');
	
	protected $fields = array(
		'trackid' => null,
		'trackname' => "",
		'trackartist' => "",
	);
	
	protected static $fieldDefinitions = array(
		'trackid' => array(
			'db_column_name' => 'trackid',
			'is_null_allowed' => false,
			'default_value' => null,
			'type' => 'INTEGER'
		),
		'trackname' => array(
			'db_column_name' => 'trackname',
			'is_null_allowed' => false,
			'default_value' => "",
			'type' => 'TEXT'
		),
		'trackartist' => array(
			'db_column_name' => 'trackartist',
			'is_null_allowed' => false,
			'default_value' => "",
			'type' => 'INTEGER'
		),
	);
	
	protected $objectDefinitions = array(
		'Artist_Object' => array(
			'class_name' => 'sl_Artist'
		),
	);
	
	// Static Definition Methods
	
	public static function getDb() {
		if (is_null(sl_Track::$db)) {
			sl_Track::$db = CoughDatabaseFactory::getDatabase(sl_Track::$dbAlias);
		}
		return sl_Track::$db;
	}
	
	public static function getDbName() {
		return CoughDatabaseFactory::getDatabaseName(sl_Track::$dbAlias);
	}
	
	public static function getTableName() {
		return sl_Track::$tableName;
	}
	
	public static function getPkFieldNames() {
		return sl_Track::$pkFieldNames;
	}
	
	protected static function getFieldDefinitions() {
		return sl_Track::$fieldDefinitions;
	}
	
	// Static Construction (factory) Methods
	
	/**
	 * Constructs a new sl_Track object from
	 * a single id (for single key PKs) or a hash of [field_name] => [field_value].
	 * 
	 * The key is used to pull data from the database, and, if no data is found,
	 * null is returned. You can use this function with any unique keys or the
	 * primary key as long as a hash is used. If the primary key is a single
	 * field, you may pass its value in directly without using a hash.
	 * 
	 * @param mixed $idOrHash - id or hash of [field_name] => [field_value]
	 * @return mixed - sl_Track or null if no record found.
	 **/
	public static function constructByKey($idOrHash, $forPhp5Strict = '') {
		return CoughObject::constructByKey($idOrHash, 'sl_Track');
	}
	
	/**
	 * Constructs a new sl_Track object from custom SQL.
	 * 
	 * @param string $sql
	 * @return mixed - sl_Track or null if exactly one record could not be found.
	 **/
	public static function constructBySql($sql, $forPhp5Strict = '') {
		return CoughObject::constructBySql($sql, 'sl_Track');
	}
	
	/**
	 * Constructs a new sl_Track object after
	 * checking the fields array to make sure the appropriate subclass is
	 * used.
	 * 
	 * No queries are run against the database.
	 * 
	 * @param array $hash - hash of [field_name] => [field_value] pairs
	 * @return sl_Track
	 **/
	public static function constructByFields($hash) {
		return new sl_Track($hash);
	}
	
	public function getDeletionStrategy() {
		return CoughDeletionStrategy::constructByType('Delete');
	}
	
	public static function getLoadSql() {
		$tableName = sl_Track::getTableName();
		return '
			SELECT
				`' . $tableName . '`.*
			FROM
				`' . sl_Track::getDbName() . '`.`' . $tableName . '`
		';
	}
	
	// Generated attribute accessors (getters and setters)
	
	public function getTrackid() {
		return $this->getField('trackid');
	}
	
	public function setTrackid($value) {
		$this->setField('trackid', $value);
	}
	
	public function getTrackname() {
		return $this->getField('trackname');
	}
	
	public function setTrackname($value) {
		$this->setField('trackname', $value);
	}
	
	public function getTrackartist() {
		return $this->getField('trackartist');
	}
	
	public function setTrackartist($value) {
		$this->setField('trackartist', $value);
	}
	
	// Generated one-to-one accessors (loaders, getters, and setters)
	
	public function loadArtist_Object() {
		$this->setArtist_Object(sl_Artist::constructByKey($this->getTrackartist()));
	}
	
	public function getArtist_Object() {
		if (!isset($this->objects['Artist_Object'])) {
			$this->loadArtist_Object();
		}
		return $this->objects['Artist_Object'];
	}
	
	public function setArtist_Object($artist) {
		$this->objects['Artist_Object'] = $artist;
	}
	
	// Generated one-to-many collection loaders, getters, setters, adders, and removers
	
}

?>