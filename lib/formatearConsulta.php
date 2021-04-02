<?php
class formatearConsulta{
    function select ($table,$estructura,$filtros){
        $show=[];
        if($estructura){
            
            // foreach ($estructura as $key => $value) {
            //     $show.=$key.' as "'.$value.'" ';
            // }
            
            $show=array_map(function($keys,$valores){
                return $keys." as '".$valores."'";
            },array_keys($estructura),array_values($estructura));
            
            $show=implode(',',$show);
            
        }
        
        
        $where="";
        if ($filtros){
            $i=0;
            foreach ($filtros as $key => $value) {
                if(!empty($value)){
                    if($i==0){
                        $where.=' where '.$key."= :".$key;
                    }
                    else{
                        $where.=" and ".$key."= :".$key;
                    }
                    $i++;
                }
            }
        }

        // echo $query;
        // exit();
        return "SELECT ".$show." from ".$table." ".$where;
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