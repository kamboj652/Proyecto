<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Usuario;

class UsuarioController extends Controller {

    public function actionIndex() {
        //recupera toda la información desde la tabla Usuario
        $query = Usuario::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        
        $usuarios = $query->orderBy('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        
        return $this->render('index',[
           'usuarios'=>$usuarios,
            'pagination' => $pagination,
        ]);
    }

}

?>
