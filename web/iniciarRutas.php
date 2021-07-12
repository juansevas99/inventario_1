<?php


$ruta=explode("/",$_SERVER['REQUEST_URI']);
$clase=!empty($ruta[2])?$ruta[2]:"";
$metodo=!empty($ruta[3])?$ruta[3]:"";
$_GET["id"]=!empty($ruta[4])?$ruta[4]:"";
unset($_GET["var"]);

    $ruta=$clase."/".$metodo;
    

// Cree ls rurutas/admtas aqui debajo
web::registrarRutas("/","rutas","apps");
web::registrarRutas("routes/admin","rutas","administracion");
web::registrarRutas("routes/management","rutas","ordenCompra");
web::registrarRutas("routes/products","rutas","productos");
web::registrarRutas("routes/planOrder","rutas","planeacion");
web::registrarRutas("routes/reports","rutas","reportes");
web::registrarRutas("routes/error","rutas","error");
web::registrarRutas("routes/errorSQL","rutas","errorSQL");
web::registrarRutas("routes/errorSQL","rutas","errorSQL");
web::registrarRutas("routes/test","rutas","test");






// usuario
web::registrarRutas("user/login","usuario","login");
web::registrarRutas("user/create","usuario","signUp");
web::registrarRutas("user/list","usuario","visualizar");
web::registrarRutas("user/close","usuario","cerrarSesion");
web::registrarRutas("user/delete","usuario","delete");
web::registrarRutas("user/update","usuario","actualizar");
web::registrarRutas("user/showCreate","usuario","prepararCreacion");
web::registrarRutas("user/confirmUpdate","usuario","confirmarActualizar");




//product

web::registrarRutas("product/list","producto","visualizar");
web::registrarRutas("product/listActives","producto","visualizarEstadoActivo");
web::registrarRutas("product/create","producto","insertar");
web::registrarRutas("product/update","producto","actualizar");
web::registrarRutas("product/delete","producto","delete");
web::registrarRutas("product/showCreate","producto","prepararCreacion");
web::registrarRutas("product/confirmUpdate","producto","confirmarActualizar");

#proveedor

web::registrarRutas("supplier/list","proveedor","visualizar");
web::registrarRutas("supplier/create","proveedor","insertar");
web::registrarRutas("supplier/update","proveedor","actualizar");
web::registrarRutas("supplier/delete","proveedor","delete");
web::registrarRutas("supplier/showCreate","proveedor","prepararCreacion");
web::registrarRutas("supplier/confirmUpdate","proveedor","confirmarActualizar");

#brand
web::registrarRutas("brand/list","marca","visualizar");
web::registrarRutas("brand/create","marca","insertar");
web::registrarRutas("brand/update","marca","actualizar");
web::registrarRutas("brand/delete","marca","delete");
web::registrarRutas("brand/showCreate","marca","prepararCreacion");
web::registrarRutas("brand/confirmUpdate","marca","confirmarActualizar");



#features
web::registrarRutas("features/list","atributo","visualizar");
web::registrarRutas("features/create","atributo","insertar");
web::registrarRutas("features/update","atributo","actualizar");
web::registrarRutas("features/delete","atributo","delete");
web::registrarRutas("features/showCreate","atributo","prepararCreacion");
web::registrarRutas("features/confirmUpdate","atributo","confirmarActualizar");


#measures
web::registrarRutas("measure/list","medida","visualizar");
web::registrarRutas("measure/create","medida","insertar");
web::registrarRutas("measure/update","medida","actualizar");
web::registrarRutas("measure/delete","medida","delete");
web::registrarRutas("measure/showCreate","medida","prepararCreacion");
web::registrarRutas("measure/confirmUpdate","medida","confirmarActualizar");

#type_outputs
web::registrarRutas("type_outputs/list","tipo_salida","visualizar");
web::registrarRutas("type_outputs/create","tipo_salida","insertar");
web::registrarRutas("type_outputs/update","tipo_salida","actualizar");
web::registrarRutas("type_outputs/delete","tipo_salida","delete");
web::registrarRutas("type_outputs/showCreate","tipo_salida","prepararCreacion");
web::registrarRutas("type_outputs/confirmUpdate","tipo_salida","confirmarActualizar");


#type_entries
web::registrarRutas("type_entries/list","tipo_entrada","visualizar");
web::registrarRutas("type_entries/create","tipo_entrada","insertar");
web::registrarRutas("type_entries/update","tipo_entrada","actualizar");
web::registrarRutas("type_entries/delete","tipo_entrada","delete");
web::registrarRutas("type_entries/showCreate","tipo_entrada","prepararCreacion");
web::registrarRutas("type_entries/confirmUpdate","tipo_entrada","confirmarActualizar");


#purchaseOrder
web::registrarRutas("purchaseOrder/list","ordenCompra","visualizar");
web::registrarRutas("purchaseOrder/create","ordenCompra","insertar");
web::registrarRutas("purchaseOrder/update","ordenCompra","actualizar");
web::registrarRutas("purchaseOrder/delete","ordenCompra","delete");
web::registrarRutas("purchaseOrder/showCreate","ordenCompra","prepararCreacion");
web::registrarRutas("purchaseOrder/confirmUpdate","ordenCompra","confirmarActualizar");


#category
web::registrarRutas("category/list","categoria","visualizar");
web::registrarRutas("category/create","categoria","insertar");
web::registrarRutas("category/update","categoria","actualizar");
web::registrarRutas("category/delete","categoria","delete");
web::registrarRutas("category/showCreate","categoria","prepararCreacion");
web::registrarRutas("category/confirmUpdate","categoria","confirmarActualizar");


#rol
web::registrarRutas("rol/list","rol","visualizar");
web::registrarRutas("rol/create","rol","insertar");
web::registrarRutas("rol/update","rol","actualizar");
web::registrarRutas("rol/delete","rol","delete");
web::registrarRutas("rol/showCreate","rol","prepararCreacion");
web::registrarRutas("rol/confirmUpdate","rol","confirmarActualizar");




#reports

web::registrarRutas("reports/kardex","reportes","kardex");
web::registrarRutas("reports/purchaseOrders","reportes","ordenes");
web::registrarRutas("reports/bestsellers","reportes","masVendidos");
web::registrarRutas("reports/entries","reportes","entradas");
web::registrarRutas("reports/outputs","reportes","salidas");



#estado

web::registrarRutas("state/list","estado","visualizar");
web::registrarRutas("state/create","estado","insertar");
web::registrarRutas("state/update","estado","actualizar");
web::registrarRutas("state/delete","estado","delete");
web::registrarRutas("state/showCreate","estado","prepararCreacion");
web::registrarRutas("state/confirmUpdate","estado","confirmarActualizar");





//entries
// web::registrarRutas("entries/list","entradas","visualizar");
web::registrarRutas("entries/create","entradas","insertar");
web::registrarRutas("entries/update","entradas","actualizar");
web::registrarRutas("entries/delete","entradas","delete");
web::registrarRutas("entries/showCreate","entradas","prepararCreacion");
web::registrarRutas("entries/confirmUpdate","entradas","confirmarActualizar");




//outputs
// web::registrarRutas("outputs/list","salidas","visualizar");
web::registrarRutas("outputs/create","salidas","insertar");
web::registrarRutas("outputs/update","salidas","actualizar");
web::registrarRutas("outputs/delete","salidas","delete");
web::registrarRutas("outputs/showCreate","salidas","prepararCreacion");
web::registrarRutas("outputs/confirmUpdate","salidas","confirmarActualizar");



#test


web::registrarRutas("test/list","test","visualizar");