<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 05/12/15
 * Time: 10:34 AM
 */

class Datossecciones {
    static public function Nombreseccion($id){
        $secciones=array(
            1=>'Antecedentes',
            2=>'Justificación',
            3=>'Aspecto Legal',
            4=>'Objetivos',
            5=>'Alcance',
            6=>'Difusión',
            7=>'Procedimiento del programa',
            8=>'Participación',
            9=>'Métricas/Ahorros',
            10=>'Vinculación con los elementos que conforman la estrategia de la empresa',
            11=>'Anexos');
        return $secciones[$id];
    }

    static public function Formularioseccion($id){
        $formularios=array(
            1=>'ProgramaSeccion',
            2=>'ProgramaSeccion',
            3=>'ProgramaSeccion',
            4=>'ProgramaSeccion',
            5=>'Seccion5',
            6=>'Seccion6',
            7=>'ProgramaSeccion',
            8=>'Seccion8',
            9=>'Seccion9',
            10=>'ProgramaSeccion',
            11=>'Anexos');
        return $formularios[$id];
    }
    static public function todos(){
        $formularios=array(
            1=>'secciontxt',
            2=>'secciontxt',
            3=>'secciontxt',
            4=>'secciontxt',
            5=>'Seccion5',
            6=>'Seccion6',
            7=>'secciontxt',
            8=>'Seccion8',
            9=>'Seccion9',
            10=>'secciontxt',
            11=>'seccionanexos');
        return $formularios;
    }
}