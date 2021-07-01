<?php
class EP{
    private $salario;
    private $CHDiaria;

    public funtion setSalario($s){
        $this -> salario = $s;
    }
    public function setCHDiaria($s){
    $this -> cHDIARIA = $s;
    }
    public function getCHDiaria(){
        return $this ->cargahorariadiaria;
    } public function getSalario(){
        return $this ->salario;
    }
    public function getCHMensal(){
        if($this->cargahorariadiaria==4){
            return 100;
        }else if($this->cargahorariadiaria==6){
            return 150;
        }else if($this->cargahorariadiaria==8){
            return 220;
        }else{
            return 0;
        }

        public function getCHMensalG(){
            if($this->cargahorariadiar<8){
            return $this->cargahorariadiaria * 25;
            }else{
                return $this->cargahorariadiaria *25+20;
            }
        }
    }
}
?>