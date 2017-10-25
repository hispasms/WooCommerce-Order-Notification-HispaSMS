<?php

namespace hispaSMS\models;

use hispaSMS\Models;

class Country  extends AbstractObject {
    public $id;
    public $code;
    public $prefix;
    public $name;
    public $locale;
    
    public function __construct($array=null, $success=true) {
        parent::__construct($array, $success);
    }

}    
Models::register('hispaSMS\models\Country');


?>
