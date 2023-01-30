
/*query for create procedure sales*//*query for create procedure sales*/
/*query for create procedure sales*//*query for create procedure sales*/
/*query for create procedure sales*/

DELIMITER //
CREATE PROCEDURE productSale(IN codProduct INT ,IN cantPro INT, IN pagoTotal INT, IN idVendedor INT  )
BEGIN
  # CODIGO EN SQL A EJECUTAR 
  	SET @codP = codProduct;
  	SET @cantP = cantPro;
  	SET @precioT = pagoTotal;
  	SET @idV = idVendedor;
  	
  	#Actualizamos los datos de la tabla product con la cantidad de cadad menos el producto de venta
	UPDATE producto SET producto.amount =  producto.amount  - @cantP where producto.codBarra = @codP;
	
	#insertamos datos a la tabla ventas
	INSERT INTO venta values( 0, @codP, @cantP, @precioT, now(), @idV);
	
END //



/*query procedure for add user product*//*query procedure for add user product*/
/*query procedure for add user product*//*query procedure for add user product*/
/*query procedure for add user product*/
/*PROCEDURE FOR SEARCH USER*/

drop procedure if exists searchUser;
DELIMITER //
CREATE PROCEDURE searchUser(IN numOption INT, IN words VARCHAR(50) )
BEGIN
  /* CODIGO EN SQL A EJECUTAR */
 	SET @opt = numOption;
  	SET @dat = words;
  	SET @val = 'dff';
  	
  	
	  if @opt = 1  then
	    	@val = 'tx_nombre';
	  	elseif @opt = 2 then
	    	@val = 'tx_apellidoPaterno';
	  else
	    	@val = 'tx_username';
  		
		end if;
  	
  	
  	SELECT * FROM tbl_users WHERE tbl_users.@val LIKE '+ '''%'+RTRIM(@dat)+'%'';
	
	
END //
#select * from venta;









DELIMITER //
CREATE PROCEDURE setProductUser( IN idUser INT, IN idProducto INT, IN cantProducto INT  )
BEGIN
  /* CODIGO EN SQL A EJECUTAR */
 	SET @idU = idUser;
  	SET @idP = idProducto;
  	SET @TotalP = cantProducto;
  	
  	/*Actualizamos los datos de la tabla product con la cantidad de cadad menos el producto de venta*/
	#UPDATE productos SET productos.cantidad =  productos.cantidad  - @totalP where productos.idProduct = @idP;
	
	/*insertamos datos a la tabla ventas*/
	INSERT INTO userProduct values( 0, @idU, @idP, @totalP);
	
END //
#select * from venta;


/*query procedure for select user product*//*query procedure for select user product*/
/*query procedure for select user product*/

/*query procedure for select user product*/
DELIMITER //
CREATE PROCEDURE selectProduct( IN idUser INT)
BEGIN
	/*declaracion de variables*/
	SET @idU = idUser;
  /* CODIGO EN SQL A EJECUTAR */

	select  producto.codBarra, producto.nameProduct, producto.image,
	producto.amount, producto.price, producto.descrip, userproduct.users_idUser,userproduct.idUserProduct ,userproduct.id, userproduct.cantidad,
	users.userName from producto join userproduct 
	ON producto.codBarra = userproduct.producto_codBarra 
	join users on users.idUser = userproduct.users_idUser
	where  users.idUser = @idU;
	
END //



/*Query for search product*/
select * from productos where productos.nombreProduct  like  '%ar%';


/*respaldo de base de datos guaradado en el lugar incado*/
C:\xampp\mysql\bin>mysqldump -u root -p prueba2 > C:/Users/shalv/Documents/resprueba2.sql

$ mysqldump -u user -p exampledb > respaldo_exampledb.sql

/*query for add previleges*/
mysql> GRANT ALL PRIVILEGES ON exampledb.* TO 'usuario'@'localhost' IDENTIFIED BY 'clave';