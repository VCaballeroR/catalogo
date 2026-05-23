# Catálogo Personal Interactivo

## Descripción del proyecto

Este proyecto consiste en una página web personal desarrollada con HTML, CSS, JavaScript, PHP y MySQL.

El sitio funciona como un catálogo interactivo donde se presentan diferentes categorías relacionadas con intereses personales como música, libros, películas y arte, utilizando una interfaz moderna, visual y responsive.

Además, incluye un formulario de contacto funcional conectado a una base de datos MySQL, permitiendo almacenar mensajes enviados por los usuarios.

El proyecto fue desplegado en un hosting gratuito utilizando InfinityFree.

---

# Tecnologías utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- InfinityFree

---

# Características principales

- Diseño moderno y responsive
- Uso de HTML5 semántico
- Modo oscuro y modo claro
- Catálogo visual por categorías
- Tarjetas interactivas
- Fondos temáticos según la categoría
- Formulario de contacto funcional
- Validación básica en cliente y servidor
- Registro de mensajes en base de datos MySQL
- Sitio desplegado en hosting gratuito

---

# Estructura del proyecto

```plaintext
/
├── index.php
├── contacto.php
├── sobre-mi.php
├── css/
│   └── styles.css
├── js/
│   └── main.js
├── img/
├── includes/
│   └── db.php
└── README.md
```

---

# Base de datos

La base de datos utilizada contiene una tabla llamada:

```sql
mensajes
```

La tabla almacena la siguiente información:

- id
- nombre
- correo
- mensaje
- fecha

---

# Funcionamiento del formulario

El usuario puede ingresar:

- Nombre
- Correo electrónico
- Mensaje

Al enviar el formulario:

1. Los datos son validados.
2. PHP procesa la información.
3. Los datos se almacenan en MySQL.
4. Se muestra un mensaje de confirmación.

---

# Hosting

Proyecto desplegado en InfinityFree.

## Enlace del proyecto

https://catalogovc.lovestoblog.com/ 

---



