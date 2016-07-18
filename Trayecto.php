<?php
class Trayecto{
    var $name;
    var $avatar;
    var $dirección;
    var $origen;
    var $destino;
    var $hora;
    var $precio;
    var $plazas;
    
    
    function copiarObjetoConModificaciones (Trayecto $trayecto) {
        $this->copiarObjeto($trayecto);
        if ($this->origen == "Córdoba") {
            $this->origen = "Sevilla";
            $this->origen = "Granada";
        }
    }
    
    /**
     * Copia un objeto completo pasado por parámetro
    **/ 
    function copiarObjeto(Trayecto $trayecto) {
        $this->name= $trayecto->name;
        $this->dirección = $trayecto->dirección;
        $this->origen = $trayecto->origen;
        $this->destino = $trayecto->destino;
        $this->hora = $trayecto->hora;
        $this->precio = $trayecto->precio;
        $this->plazas = $trayecto->plazas;
    }
    
    
    function llenarObjeto($p1, $p2, $p3, $p4, $p5, $p6, $p7) {
        $this->name= $p1;
        $this->dirección = $p2;
        $this->origen= $p3;
        $this->destino= $p4;
        $this->hora= $p5;
        $this->precio= $p6;
        $this->plazas= $p7;
    }
    
    /**
     * Pediente: Hay que terminar esta función
     **/ 
    function getDescripcionCorta() {
        $descripcionCorta = substr($this->descripcion, 0, 80);
        $descripcionFinal = $descripcionCorta . "...";
        return $descripcionFinal;
    }
    
    /**
     * Comprueba si el origen pasado por parámetro coincide con el de nuestro objeto ($this)
     * Si coincide devolvemos true
     * Si no coincide devolvemos false
     * 
     * @return bool
     * 
     **/ 
    function tieneOrigen($paramOrigen) {
        if ($paramOrigen == $this->origen) {
            return true;
        } else {
            return false;
        }
    }
}
    
    
?>