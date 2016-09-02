<?php

use lib\controller\Controller;
use lib\dao\query\Query;
use lib\dao\query\QueryAnd;
use lib\dao\query\QueryMatchAgainst;
use lib\dao\query\QueryIn;
use lib\dao\query\QueryLimit;
use lib\dao\query\QueryOrder;
use lib\dao\query\QueryLike;
use lib\factory\Factory;
use lib\factory\FactoryModel;
use lib\helpers\Validator;
use lib\comunication\Comunication;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ConsultaController extends Controller{
    
    public function crear(){
    
        try{

            $this->View->layout = 'backend';

            // Para saber si el usr hizo un click.
            // Si el submit es true ya recibo el formular.
            $do_submit = $this->getParam('do_submit');

            /* ALE, que hace el do_submit??? */
            if($do_submit){

                // Creo un contacto
                $contacto = Factory::create(FactoryModel::getInstance(), 'contacto');

                $Q = new Query($contacto);

                $Q->add(new QueryAnd('email',$this->getParam('email')));

                //echo $contacto->email;
                //echo $this->getParam('email');

                // ESTO ES BIEN BASICO,  Prepara SOLO la SQL, no ejecuta.
                //$Q->prepare();

                // Valido este modelo y el modelo contacto ()
                $validator = new Validator();

                // carga el modelo consulta
                $this->params2Model($this->Model);

                // Defino los campos obligatorios para consulta.
                $this->required($this->Model, array('texto'));
                $validator->validoModel($this->Model);
                $this->Model->create();

                // Si no existe el contacto seteo el modelo y lo guardo
                // !$contacto->load($Q) (Prepara la consulta sql la ejecuta )
                if(!$contacto->load($Q)){

                    // Obtengo los parametros del modelo de este modelo???
                    $this->params2Model($contacto);

                    // Defino los campos obligatorios para contacto.
                    //1
                    $this->required($contacto, array('nombre','apellido','email'));
                    //2
                    $validator->validoModel($contacto);
                    //3
                    $contacto->create();

                    /* Resumen
                     * 1-Defino los campos obligatorios
                     * 2-Valido contra la BD los datos
                     * 3-Persisto en BD.
                     */
                }

                //Creo un consulta contacto
                $consultacontacto = Factory::create(FactoryModel::getInstance(), 'consultacontacto');
                $consultacontacto->consultaId=$this->Model->id;
                $consultacontacto->contactoId=$contacto->id;
                $consultacontacto->create();            


                //echo $Q->query;die;
                
                // Muestro mensaje de confirmación.
                $this->View->assign('msg', array('success', 'El registro se ha guardado correctamente'));
            }

        } catch (Exception $ex) {
            $this->View->assign('msg', array('error',$ex->getMessage()));
        }
        
        $this->View->display();
    }
}
