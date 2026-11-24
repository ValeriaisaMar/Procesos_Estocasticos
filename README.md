#  InmoVIS – Sistema de Gestión Inmobiliaria VIS

**InmoVIS** es una aplicación web desarrollada para facilitar la administración y gestión de proyectos inmobiliarios de Vivienda de Interés Social (VIS). El sistema permite centralizar la información de proyectos, inmuebles, clientes, usuarios y ventas, proporcionando herramientas para organizar los procesos administrativos y realizar un seguimiento de la actividad comercial.

La plataforma cuenta con diferentes roles de usuario, cada uno con permisos y funcionalidades específicas, además de un módulo de reportes y estadísticas que permite visualizar información relevante para la toma de decisiones.

---

##  Tabla de contenido

1. [Descripción del proyecto](#-descripción-del-proyecto)
2. [Objetivos](#-objetivos)
3. [Funcionalidades principales](#-funcionalidades-principales)
4. [Roles de usuario](#-roles-de-usuario)
5. [Tecnologías utilizadas](#-tecnologías-utilizadas)
6. [Arquitectura general](#-arquitectura-general)
7. [Requisitos del sistema](#-requisitos-del-sistema)
8. [Instalación y configuración](#-instalación-y-configuración)
9. [Estructura del proyecto](#-estructura-del-proyecto)
10. [Base de datos](#-base-de-datos)
11. [Reglas de negocio](#-reglas-de-negocio)
12. [Ejecución del sistema](#-ejecución-del-sistema)
13. [Seguridad](#-seguridad)
14. [Autores](#-autores)

---

## 📖 Descripción del proyecto

InmoVIS surge como una solución tecnológica orientada a mejorar la gestión administrativa y comercial de proyectos inmobiliarios enfocados en Vivienda de Interés Social.

El sistema permite registrar y administrar proyectos inmobiliarios, controlar los inmuebles disponibles, gestionar la información de los clientes y registrar las ventas realizadas. Asimismo, incorpora un módulo de reportes que presenta indicadores y representaciones gráficas sobre el comportamiento de las ventas, los ingresos generados, el rendimiento de los asesores y el estado de los inmuebles.

La aplicación utiliza una arquitectura basada en Laravel y MySQL, permitiendo mantener organizada la información y facilitar el mantenimiento y crecimiento del sistema.

## Objetivos

### Objetivo general

Desarrollar una aplicación web para la gestión y administración de proyectos inmobiliarios VIS, facilitando el control de inmuebles, clientes, usuarios y ventas mediante una plataforma centralizada.

### Objetivos específicos

- Administrar proyectos inmobiliarios y controlar su estado.
- Registrar, consultar, actualizar y gestionar los inmuebles asociados a cada proyecto.
- Centralizar la información de los clientes.
- Gestionar los usuarios del sistema y sus respectivos roles.
- Registrar y controlar las operaciones de venta de inmuebles.
- Evitar inconsistencias en la información comercial mediante reglas de negocio.
- Generar reportes estadísticos que permitan analizar las ventas y el comportamiento del inventario inmobiliario.

## Funcionalidades principales

### 1. Gestión de proyectos

Permite administrar los proyectos inmobiliarios registrados en la plataforma.

- Registrar nuevos proyectos.
- Consultar los proyectos existentes.
- Editar la información de los proyectos.
- Activar o desactivar proyectos.
- Controlar la disponibilidad de los proyectos para los clientes.

### 2. Gestión de inmuebles

Permite administrar las viviendas pertenecientes a cada proyecto.

- Registrar inmuebles.
- Consultar el catálogo de viviendas.
- Editar las características de los inmuebles.
- Consultar información detallada.
- Administrar el estado de cada inmueble.
- Identificar viviendas disponibles y vendidas.

Entre los datos gestionados se encuentran el código del inmueble, proyecto asociado, tipo de vivienda, torre o manzana, piso, área, habitaciones, baños, precio y estado.

### 3. Gestión de clientes

Permite centralizar la información de las personas interesadas en adquirir una vivienda.

- Registrar clientes.
- Consultar clientes registrados.
- Actualizar información.
- Gestionar la información de los clientes vinculados a las ventas.

### 4. Gestión de usuarios

Permite administrar las cuentas que tienen acceso a la plataforma.

- Registrar usuarios.
- Consultar usuarios existentes.
- Editar información.
- Eliminar usuarios cuando corresponda.
- Asignar roles y controlar los permisos de acceso.

### 5. Gestión de ventas

Permite registrar y administrar las operaciones comerciales de los inmuebles.

- Registrar una venta.
- Asociar una venta con un inmueble.
- Asociar el cliente comprador.
- Identificar al asesor responsable.
- Registrar la fecha y el valor de la venta.
- Registrar el método de pago.
- Consultar las ventas realizadas.
- Editar y eliminar ventas según los permisos establecidos.

El sistema actualiza automáticamente el estado del inmueble cuando se registra una venta.

### 6. Reportes y estadísticas

El módulo de reportes permite consultar información consolidada sobre la actividad comercial y el inventario inmobiliario.

Incluye:

- Total de ventas realizadas.
- Ingresos totales.
- Promedio del valor de las ventas.
- Total de inmuebles registrados.
- Cantidad de inmuebles disponibles.
- Cantidad de inmuebles vendidos.
- Total de clientes registrados.
- Ventas agrupadas por mes.
- Rendimiento de los asesores.
- Distribución de inmuebles según su estado.

También incorpora gráficos estadísticos para facilitar la interpretación de los resultados.

El módulo permite filtrar la información comercial mediante un rango de fechas.

---

##  Roles de usuario

InmoVIS implementa un sistema de control de acceso basado en roles.

| Rol | Permisos y funcionalidades |
|---|---|
| Administrador | Acceso a la gestión de proyectos, inmuebles, clientes, usuarios, ventas y reportes. |
| Asesor | Consulta de inmuebles, gestión de clientes y administración de sus ventas. |
| Cliente | Consulta de proyectos e inmuebles disponibles para conocer la oferta inmobiliaria. |

Cada usuario accede únicamente a las funcionalidades correspondientes a su rol.

##  Tecnologías utilizadas

El proyecto fue desarrollado utilizando las siguientes tecnologías:

| Tecnología | Utilización |
|---|---|
| PHP 8.5 | Lenguaje de programación del backend. |
| Laravel 13 | Framework principal para el desarrollo de la aplicación. |
| MySQL | Sistema de gestión de bases de datos. |
| HTML5 | Estructura de las interfaces. |
| CSS3 | Diseño y presentación visual. |
| JavaScript | Funcionalidades e interactividad del frontend. |
| Chart.js | Representación gráfica de estadísticas. |
| Vite | Gestión y compilación de recursos frontend. |
| Composer | Administración de dependencias de PHP. |
| npm | Administración de dependencias de JavaScript. |
| Git y GitHub | Control de versiones y alojamiento del código fuente. |

## Arquitectura general

InmoVIS utiliza una arquitectura basada en el patrón MVC (Modelo-Vista-Controlador), proporcionado por Laravel.

Sus principales componentes son:

- **Modelos:** representan las entidades del sistema y permiten interactuar con la base de datos.
- **Vistas:** contienen las interfaces que utiliza cada usuario.
- **Controladores:** gestionan las solicitudes, ejecutan la lógica de negocio y coordinan la comunicación entre modelos y vistas.
- **Rutas:** definen los puntos de acceso y las operaciones disponibles en la aplicación.
- **Middleware:** controla el acceso a las funcionalidades según la autenticación y el rol del usuario.
- **Base de datos:** almacena la información de los proyectos, inmuebles, clientes, usuarios y ventas.

##  Requisitos del sistema

Para ejecutar el proyecto se necesitan los siguientes componentes:

- PHP 8.5 o una versión compatible con las dependencias del proyecto.
- Composer.
- MySQL.
- Servidor local como XAMPP o una instalación local de MySQL.
- Node.js y npm.
- Git.
- Visual Studio Code (recomendado).

##  Instalación y configuración

Sigue los siguientes pasos para instalar InmoVIS en un equipo local.

### 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

Ingresar a la carpeta:

```bash
cd Procesos_Estocasticos
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Instalar dependencias de JavaScript

```bash
npm install
```

### 4. Configurar el archivo de entorno

Crear el archivo `.env` a partir del archivo de ejemplo:

```bash
copy .env.example .env
```

En sistemas Windows con PowerShell también se puede utilizar:

```powershell
Copy-Item .env.example .env
```

### 5. Generar la clave de la aplicación

```bash
php artisan key:generate
```

### 6. Configurar la base de datos

Crear una base de datos MySQL con el nombre:

```text
inmovis
```

Configurar las credenciales en el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inmovis
DB_USERNAME=root
DB_PASSWORD=
```

**Importante:** si se proporciona un respaldo SQL del proyecto, importarlo desde phpMyAdmin en la base de datos `inmovis`. Si se utiliza una instalación basada en migraciones, ejecutar las migraciones correspondientes:

```bash
php artisan migrate
```

No se debe ejecutar `migrate:fresh` sobre una base de datos que contenga información que se quiera conservar.

### 7. Compilar los recursos frontend

```bash
npm run build
```

### 8. Iniciar el servidor

```bash
php artisan serve
```

La aplicación estará disponible en:

```text
http://127.0.0.1:8000
```

---

## Estructura del proyecto

La estructura principal de Laravel se organiza de la siguiente manera:

```text
Procesos_Estocasticos/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   │
│   └── Models/
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── public/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   ├── web.php
│   └── auth.php
│
├── storage/
│
├── tests/
│
├── .env.example
├── artisan
├── composer.json
├── package.json
├── vite.config.js
└── README.md
```

### Descripción de las carpetas principales

- `app/Models`: contiene los modelos que representan las entidades del sistema.
- `app/Http/Controllers`: contiene los controladores responsables de procesar las solicitudes.
- `app/Http/Middleware`: contiene los mecanismos de control de acceso.
- `database/migrations`: contiene las migraciones de la base de datos.
- `resources/views`: contiene las vistas Blade de la aplicación.
- `resources/css`: contiene los estilos visuales.
- `resources/js`: contiene los archivos JavaScript.
- `routes`: contiene las definiciones de las rutas.
- `public`: contiene los recursos públicos de la aplicación.
- `storage`: almacena archivos generados por Laravel.

## 🗄️ Base de datos

El sistema utiliza MySQL como motor de almacenamiento.

Las principales entidades administradas por la aplicación son:

| Entidad | Descripción |
|---|---|
| Usuarios | Almacena las cuentas de acceso y sus roles. |
| Proyectos | Almacena la información de los proyectos inmobiliarios. |
| Inmuebles | Registra las viviendas asociadas a los proyectos. |
| Clientes | Almacena la información de los compradores o interesados. |
| Ventas | Registra las operaciones comerciales realizadas. |

Las relaciones entre estas entidades permiten mantener la integridad de la información y vincular las ventas con los inmuebles, clientes y asesores correspondientes.

##  Reglas de negocio

Para mantener la consistencia de la información, InmoVIS implementa las siguientes reglas:

1. Un inmueble debe estar asociado a un proyecto inmobiliario.
2. Los proyectos pueden activarse o desactivarse.
3. Los proyectos desactivados no se muestran a los clientes y no permiten asignar nuevos inmuebles.
4. Un inmueble vendido no puede registrarse nuevamente en otra venta.
5. Al registrar una venta, el estado del inmueble cambia automáticamente a `Vendido`.
6. Los inmuebles asociados a ventas no pueden eliminarse directamente.
7. Los proyectos que tienen inmuebles asociados no pueden eliminarse permanentemente.
8. Al eliminar una venta, el inmueble asociado vuelve al estado `Disponible`.
9. Los asesores únicamente pueden consultar y administrar sus propias ventas.
10. El acceso a los reportes está restringido al administrador.

##  Seguridad

La aplicación incorpora mecanismos de seguridad proporcionados por Laravel y reglas propias del sistema:

- Autenticación de usuarios.
- Control de acceso basado en roles.
- Middleware para proteger rutas.
- Validación de información recibida en los formularios.
- Protección de operaciones según los permisos del usuario.
- Protección de las relaciones comerciales para evitar registros duplicados.
- Uso de variables de entorno para almacenar la configuración sensible.

**Importante:** el archivo `.env` contiene información privada y no debe subirse al repositorio de GitHub. Cada integrante debe configurar sus propias credenciales locales.

##  Ejecución del sistema

Para iniciar InmoVIS en un entorno local, ejecutar:

```bash
php artisan serve
```

Para compilar los recursos frontend durante el desarrollo:

```bash
npm run dev
```

Para generar la versión compilada:

```bash
npm run build
```

La aplicación se ejecuta localmente en:

```text
http://127.0.0.1:8000
```

##  Autores: Roberto Carlos Lopez Sanchez, Keimer David Mercado Perez, Isabel Martinez

**Proyecto:** InmoVIS – Sistema de Gestión Inmobiliaria VIS.

**Desarrollo:** Proyecto académico de desarrollo de software.

**Repositorio:** https://github.com/ValeriaisaMar/Procesos_Estocasticos.git.

---


