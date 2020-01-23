<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use Yii;
use app\models\Docsconfig;
use app\models\User;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if(!Yii::$app->user->isGuest){
            if(Yii::$app->user->identity->role === 'admin'){
                $fields = Docsconfig::findAll(['organization_type'=>'ООО']);
                $ip_fields = Docsconfig::findAll(['organization_type'=>'ИП']);
                $ao_fields = Docsconfig::findAll(['organization_type'=>'АО']);
                $pao_fields = Docsconfig::findAll(['organization_type'=>'ПАО']);
                $newDocConfig = new Docsconfig();
                if(Yii::$app->request->post() and !isset(Yii::$app->request->post("Docsconfig")["document"])){
                    $writable = Docsconfig::findOne(['id'=>Yii::$app->request->post("Docsconfig")["id"]]);
                    
                    $writable->mark_words = Yii::$app->request->post("Docsconfig")["mark_words"];
                    $writable->mark_fields = Yii::$app->request->post("Docsconfig")["mark_fields"];
                    if($writable->validate()){
                        $writable->save(false);
                        return $this->redirect('');
                    }
                }
                if($newDocConfig->load(Yii::$app->request->post())){
                  $newDocConfig->save();
                    return $this->redirect('');
                }
                return $this->render('index', ['newmodel'=>$newDocConfig,'models'=>$fields, 'ip_models'=>$ip_fields, 'ao_models'=>$ao_fields, 'pao_models'=>$pao_fields]);
        }   
        else{
            throw new ForbiddenHttpException('Недостаточно полномочий для входа в панель администратора');
        }
        }
        else{
            return $this->goHome();
        }
        
}
        public function actionUsers(){
            if(!Yii::$app->user->isGuest){
                if(Yii::$app->user->identity->role === 'admin'){
                    $users = User::find()->all();
                    if(Yii::$app->request->post()){
                        $writable = User::findOne(['id'=>Yii::$app->request->post("User")["id"]]);
                        $writable->role = Yii::$app->request->post("User")["role"];
                        $writable->save(false);
                        return $this->redirect('');
                    }
                    return $this->render('users', ['models'=>$users]);
                }
            }else{
                return $this->goHome();
            }
        }

}
