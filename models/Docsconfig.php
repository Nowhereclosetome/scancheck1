<?php 

namespace app\models;

use yii\db\ActiveRecord;

class Docsconfig extends ActiveRecord{

    public function rules(){
        return [
            [['mark_words', 'mark_fields', 'document','organization_type'], 'safe']
        ];
    }

}