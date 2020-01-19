<?php
 
namespace app\models;
 
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * Signup form
 */
class Check extends ActiveRecord
{
    /**
     * @inheritdoc
     * 
     * 'id' => $this->primaryKey(),
        'organization_name' => $this->string(),
        'organization_name_short'=>$this->string(),
        'INN'=>$this->string(12),
        'director_fullname'=>$this->string(),
        'parser_version' => $this->string(),
        'status'=>$this->string()
     */
    public function rules()
    {
        return [
          
            [['organization_name', 'organization_name_short', 'INN', 'director_fullname', 'parser_version', 'address'], 'required'],
            [['organization_name', 'organization_name_short', 'INN', 'director_fullname', 'parser_version', 'address'], 'safe'],
        ];
    }
 
   
}