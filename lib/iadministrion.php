<?php
interface iadministracion{
    public  function select($query,$filtros);
    public  function update($query,$valores,$filtros);
    public  function delete($query,$filtros);
    public  function insert($query,$valores);


}
?>