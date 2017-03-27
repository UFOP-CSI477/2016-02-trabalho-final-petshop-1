<?php

class Adoption extends AppModel{

	public $belongsTo = array('Animal', 'User');

}
