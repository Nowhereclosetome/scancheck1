<?php
 
namespace app\models;
 
use yii\base\Model;
use Yii;
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

    public $imageFiles;

    public function rules()
    {
        return [
          
            [['organization_name', 'organization_name_short', 'INN', 'director_fullname', 'parser_version', 'address', 'imageFiles'], 'required'],
            [['organization_name', 'organization_name_short', 'INN', 'director_fullname', 'parser_version', 'address'], 'safe'],
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'pdf, png, doc, docx', 'maxFiles' => 5]
        ];
    }

    
    public function upload()
    {
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
                $file->saveAs(Yii::$app->basePath . DIRECTORY_SEPARATOR . 'uploads'. DIRECTORY_SEPARATOR . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
   
}