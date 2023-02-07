# Formulario de registro de nuevos usuarios 👈

Formulario sencillo en PHP de registro de usuarios

Ejemplo básico que permite a los usuarios registrarse a través de un formulario web. 
Es importante tener en cuenta que este código **no está protegido contra ataques** como inyección SQL, 
por lo que es necesario agregar medidas adicionales de seguridad.

## Formulario de registro de nuevos usuarios realizado con Laravel 👈

En este ejemplo se utiliza la clase User para crear un nuevo usuario en la base de datos 
y el método validate de la clase Request para validar los datos del formulario. Además, 
**se utiliza el método bcrypt para hashear la contraseña** antes de guardarla en la base de datos,
otorga un enfoque más seguro y mantenible para construir un formulario de registro
de usuarios en Laravel, en comparación con el ejemplo básico de PHP.
