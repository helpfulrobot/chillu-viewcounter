<?php
class ViewCount extends DataObject {
	
	static $db = array(
		'Count' => 'Int',
		'RecordID' => 'Int',
		'RecordClass' => 'Varchar(255'
	);

	/**
	 * @return DataObject
	 */
	public function getRecord() {
		$class = $this->RecordClass;
		return $class::get()->byID($this->RecordID)->First();
	}
}