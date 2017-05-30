<?php

class Campeonato{
    var $codigo;
    var $nombre;
    var $fechainicio;
    var $fechatermino;
    var $cantidadpartidos;
    


    public function ListaCampeonatos(){
        
        $oCampeonato=new Campeonato();
        
         return $oCampeonato;
    }
}



