<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ApSystemsTable extends Table {

    public function initialize(array $config):void{
    
        $this->addBehavior('Timestamp'); 
        $this->belongsTo('Aps',[
            'className' => 'Aps',
            'foreignKey' => 'ap_id'
        ]);
     }
}
