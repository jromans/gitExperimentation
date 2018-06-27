<?php

class Note
{
	public $ID;
	
	function __construct($ID = NULL)
	{
		if (isset($ID))
		{
			$this->ID = $ID;
		}
	}
}

?>
