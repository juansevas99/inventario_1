<?php
class formatearConsulta{
    function select ($filtros){
        $query="";
        if ($filtros){
            $i=0;
            foreach ($filtros as $key => $value) {
                if(!empty($value)){
                    if($i==0){
                        $query.=' where '.$key."= :".$key;
                    }
                    else{
                        $query.=" and ".$key."= :".$key;
                    }
                    $i++;
                }
            }
        }
        // echo $query;
        // exit();
       return $query;
    }
    function update($valores,$filtros){
        $query="";
        $i=0;
        foreach ($valores as $key => $value) {
         if(!empty($value)){
             if ($i==0){
                $query.=" ".$key."= :".$key."_ ";
             }
            else{
                $query.=",".$key."= :".$key."_ ";
            }
         }
         $i++;
         }   
        $i=0;
        foreach ($filtros as $key => $value) {
            if(!empty($value) && isset($value)){
                if ($i==0){
                   $query.=" where ".$key."= :".$key."__ ";
                }
               else{
                   $query.="and ".$key."= :".$key."__ ";
               }
            }
            $i++;
        } 
        
        return $query;
    }
    function delete ($filtros){
        $query="";
        if ($filtros){
            $i=0;
            foreach ($filtros as $key => $value) {
                if(!empty($value)){
                    if($i==0){
                        $query.=' where '.$key."= :".$key;
                    }
                    else{
                        $query.=" and ".$key."= :".$key;
                    }
                    $i++;
                }
            }
        }
        // echo $query;
        // exit();
       return $query;
    }
    function insert($valores){
        $i=0;
        $query="";
        foreach ($valores as $key => $value) {
            if ($i==0){
                $query.=":".$key;
            }
            else{
                $query.=" ,:".$key;
            }
            $i++;
            
        }
        return $query;

    }
}
?>