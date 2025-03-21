# 🚀 Sistema de Empleados en Laravel

¡Bienvenido al **sistema de recursos humanos más eficiente y amigable** de todos los tiempos! 👩‍💼👨‍💼 Con este proyecto podrás crear, editar y eliminar empleados como todo un **pro**. Todo eso, mientras disfrutas de una interfaz limpia, simple y moderna que no te hará perder tiempo. 😎

## 🛠️ Herramientas utilizadas

- **XAMPP**: El servidor local que nunca te abandona. 😌
- **Composer**: El mejor amigo de cualquier proyecto PHP. 🔧
- **Node.js**: Para manejar las dependencias JavaScript y hacer magia con Bootstrap. 💻✨
- **Bootstrap**: Porque todos necesitamos algo bonito, rápido y responsivo. 💅

## 💼 Funcionalidades principales

- **Creación de empleados**: ¡Añadir nuevos miembros al equipo nunca fue tan fácil! 👥
- **Edición de empleados**: Cambia la información cuando sea necesario. No hay vuelta atrás... o sí. ✏️
- **Eliminación de empleados**: ¿Algún empleado en la lista ya no pertenece a la empresa? ¡Elimínalo sin piedad! 🧨
- **Validación de datos**: La calidad importa, por eso validamos todo antes de guardarlo. ✅
- **Mensajes de confirmación**: Porque todo gran esfuerzo merece un aplauso... o al menos un mensaje. 🎉

## 🗂️ Estructura del proyecto

- **Vistas**: Están organizadas como un equipo de trabajo bien disciplinado. ¡Todo tiene su lugar! 🗂️
- **Rutas**: Cada acción tiene su propia ruta. 🛣️
- **Formulario de entrada**: Los datos de los empleados entran y se validan con estilo. 🎯

## ⚡ Implementación

1. **Creación de vistas**: Organizadas y elegantes, como cualquier oficina moderna. 💼
2. **Recepción y validación de datos**: Validamos cada entrada como si fuéramos un jefe que no perdona detalles. 🧐
3. **Interacción con la base de datos**: Guardamos, editamos y eliminamos datos como si tuviéramos un asistente superrápido. 🖥️
4. **Mensajes de texto**: Usamos sesiones para mostrarte mensajes que te harán sentir como un superhéroe. 💬🦸‍♀️

## 📸 Capturas de pantalla

Acá tenés una muestra visual de todo lo que este sistema puede hacer:

- **Registro**

![Captura de pantalla de register](images/register.png)  
*Antes de gestionar empleados, tenés que demostrar que sos el/la que manda. ¡Regístrate!* 💼😎

- **Login**

![Captura de pantalla de login](images/login.png)  
*¡Bienvenido! La puerta de la oficina está abierta.* 🔑

- **Creación de empleado**

![Captura de pantalla de la creación de empleado](images/creacion.png)  
*¡Agregar a un nuevo miembro al equipo es fácil!* 🙌

![Captura de pantalla del mensaje exitoso sobre la creación de empleado](images/mensaje-creacion.png)  
*Confirmación de que la incorporación fue todo un éxito.* 🏆

- **Edición de empleado**

![Captura de pantalla de la edición de empleado, cambiando el email y la foto](images/edicion-empleado.png)  
*Editar un empleado, porque hasta los mejores pueden necesitar ajustes.* ✏️

![Captura de pantalla del mensaje exitoso sobre la edición de empleado](images/mensaje-edicion.png)  
*¡Todo actualizado con éxito!* ✅

- **Lista de empleados**

![Captura de pantalla de la lista de empleados con paginación](images/paginacion-empleados.png)  
*La lista de empleados organizada, como un buen archivo. 📑*

![Captura de pantalla de la lista de empleados en la segunda página](images/paginacion-empleados2.png)  
*Y si hay más empleados, siempre hay una segunda página.* 📄

- **Eliminación de empleado**

![Captura de pantalla de la consulta para eliminar empleado](images/eliminacion.png)  
*¿Seguro de eliminar? Siempre hay que confirmar.* ⚠️

![Captura de pantalla del mensaje exitoso sobre la eliminación de empleado](images/mensaje-eliminacion.png)  
*¡Eliminado con éxito! Esos empleados no sabían lo que les esperaba.* 🔥

![Captura de pantalla de la lista de empleados actualizada después de la eliminación](images/lista-eliminacion.png)  
*Y la lista se actualiza instantáneamente.* ✨

- **Validación de datos**

![Captura de pantalla de la validación de datos durante la creación de empleado](images/validacion-creacion.png)  
*Si algo no está bien, ¡te lo avisamos! No hay lugar para errores.* ⚡

![Captura de pantalla de la validación de datos durante la edición de empleado](images/validacion-edicion.png)  
*La validación nunca descansa, como un buen jefe.* 🧐

## ⚙️ Cómo instalar y activar el sistema  

Para que todo funcione como un reloj suizo, asegúrate de tener instalado lo siguiente:  

- **XAMPP** 
- **Composer**   
- **Node.js**   
- **Bootstrap**  
- **Un navegador web**  

### 🔥 Pasos para activar el sistema  

1️⃣ **Clona el repositorio**  
```bash
git clone https://github.com/JosefinaOller/CRUDLaravel
cd CRUDLaravel
```

2️⃣ **Instala las dependencias**  
```bash
composer install
npm install
```

3️⃣ **Configura la base de datos en phpMyAdmin**  
   - Abre XAMPP como Administrador y enciende **Apache** y **MySQL**.  
   - Entra a **phpMyAdmin** (`http://localhost/phpmyadmin`).  
   - Crea una nueva base de datos llamada **sistema**.  

4️⃣ **Configura el archivo `.env`** 
   - Asegúrate de completar los datos de la base de datos así:  

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sistema
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5️⃣ **Migra la base de datos y genera las tablas**  
```bash
php artisan migrate
```

6️⃣ **Levanta el servidor**  
```bash
php artisan serve
```
Luego, abre en tu navegador: [`http://localhost:8000`](http://localhost:8000)  

7️⃣ **Regístrate como usuario**

- Ingresa al sistema y regístrate con tus datos. 
- Una vez registrado, ya podes acceder y comenzar a gestionar empleados. 

¡Listo!