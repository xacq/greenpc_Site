# GREENPC Site

Este es un sistema PHP que debe ser configurado en un entorno local utilizando XAMPP.

## Requisitos
- XAMPP instalado en tu máquina.
- PHP y MySQL configurados correctamente.

## Instrucciones de instalación

1. **Colocar la carpeta en `htdocs`:**
   - Copia la carpeta del proyecto (`greenpc`) en la carpeta `htdocs` de tu instalación de XAMPP.
   - Por defecto, la ruta suele ser:  
     `C:\xampp\htdocs\greenpc`

2. **Configurar la base de datos:**
   - Abre **phpMyAdmin** desde el panel de control de XAMPP.
   - Crea una nueva base de datos llamada `greenpc` (o el nombre que prefieras).
   - Importa el archivo `db_gpc.sql` que se encuentra en la carpeta del proyecto:
     1. Ve a la pestaña **Importar** en phpMyAdmin.
     2. Selecciona el archivo `db_gpc.sql`.
     3. Haz clic en **Continuar** para completar la importación.

3. **Configurar el archivo de conexión a la base de datos (si es necesario):**
   - Si tu archivo de conexión a la base de datos requiere ajustes, edítalo para que coincida con tus credenciales de MySQL.  
     Por ejemplo:
     ```php
     // Archivo de ejemplo: config.php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $database = 'greenpc';
     ```

4. **Iniciar el servidor:**
   - Abre el panel de control de XAMPP.
   - Inicia los servicios de **Apache** y **MySQL**.
   - Accede al sistema desde tu navegador en:  
     `http://localhost/greenpc`

## Notas
- Asegúrate de que el archivo `db_gpc.sql` esté actualizado y contenga todas las tablas necesarias para el sistema.
- Si encuentras algún problema, verifica los logs de Apache y MySQL en el panel de control de XAMPP.

## Autor
- **Nombre del autor o equipo**  
  *(Opcional: información de contacto o enlace al repositorio)*
