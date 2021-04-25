<?php

/**
* Verifica si el formato de una direccion de correo es correcta.
*
* Esta funcion comprueba que la direccion de correo porporcionada
* cumple con la estructura xxxxxx@xxxxxxxx.xx
* Devuelve true si la estructura es correcta
*
* @author Francisco Jose Luna Barsotti
* @version 1.0.0
* @param string $email direccion de correo
* @return boolean true si la direccion es correcta
*/
function verifica_email ($email)
{
	$retorno = true;

	/* Aqui estaria el codigo para verificar 
	la direccion de correo */

	return $retorno;
}


/**
* Genera el token para operaciones permitidas.
*
* Esta funcion a partir del usuario logado y el perfil
* seleccionado, genera un token para poder realizar
* las operaciones donde el usuario tiene permisos.
* Devuelve el token asociado.
*
* @internal
* @author Francisco Jose Luna Barsotti
* @version 2.1.1
* @param string $user usuario logado en el sistema
* @param string $profile perfil seleccionado
* @return string token
*/
function genera_token ($user, $profile)
{
	$token = "";

	/* Aqui estaria el algoritmo para la generacion
	del token */

	return $token;
}

/**
*Nueva funcion para probar git.
*
* Esta funcion es para probar que sincroniza git
*
* @author Francisco Jose Luna Barsotti
* @version 1.0.0
*/
function prueba_git ()
{
	/* Aqui estaria el codigo de la funcion */

}

?>
