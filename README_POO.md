# Práctica de Programación Orientada a Objetos (POO) en PHP

## 📋 Descripción de la práctica

Este repositorio contiene el desarrollo de la actividad **«Realizar las siguientes Prácticas»**, enfocada en aplicar conceptos de **programación orientada a objetos (POO) utilizando PHP**.

La práctica está dividida en cinco problemas. Se trabaja con herencia de clases, sobrescritura de métodos, llamadas estáticas mediante `static::` y `self::`, clases `final`, operaciones matemáticas dentro de una clase y una jerarquía de clases para representar personas, estudiantes y docentes.

Los archivos contienen ejemplos de uso y resultados mostrados en pantalla. En el ejercicio de la clase `final` se presenta un error intencional, ya que el objetivo es demostrar que PHP impide heredar de una clase declarada como `final`.

## 🎯 Objetivos

- Comprender la creación de clases, atributos, métodos y objetos en PHP.
- Aplicar herencia mediante `extends` y reutilizar atributos y métodos de una clase padre.
- Observar la sobrescritura de métodos en una clase hija.
- Diferenciar el comportamiento de `static::` y `self::` en llamadas a métodos estáticos.
- Comprobar el funcionamiento de una clase declarada como `final`.
- Utilizar constructores y métodos para realizar cálculos matemáticos.
- Implementar una clase base `Persona` y clases derivadas `Estudiante` y `Docente`.

## 🛠️ Tecnologías y herramientas utilizadas

| Tecnología o herramienta | Uso |
| --- | --- |
| PHP 8.5.0 | Desarrollo y ejecución de los ejercicios de POO. |
| WampServer y Apache | Ejecución local de los archivos PHP. |
| Visual Studio Code | Edición del código fuente. |
| Navegador web | Visualización de los resultados. |

## 📁 Estructura del proyecto

```text
PracticaPOO/
├── imagenes/
│   ├── 01-coche-herencia.png
│   ├── 02-late-static-binding.png
│   ├── 03-clase-final.png
│   ├── 04-circulo.png
│   ├── 05-estudiante.png
│   └── 06-docente.png
├── coche.php
├── EjemploLateStatic.php
├── ImpedirHerencia.php
├── circulo.php
├── Persona.php
├── Estudiante.php
├── Docente.php
└── README.md
```

## 💻 Desarrollo de los ejercicios y resultados

### Problema #1: Herencia de clases (`coche.php`)

En este ejercicio se crea la clase `Coche`, con un atributo para el color y métodos para asignarlo, consultarlo y mostrar sus características. Después se crea la clase `CocheDeLujo`, que **hereda de `Coche`** y agrega un atributo para los extras del vehículo.

La clase hija redefine el método `printCaracteristicas()` para mostrar tanto el color como el extra configurado.

**Resultado obtenido:**

```text
Color: negro
Extras: TV
```

![Resultado de la herencia entre Coche y CocheDeLujo](imagenes/01-coche-herencia.png)

### Problema #2: Métodos estáticos y enlace estático tardío (`EjemploLateStatic.php`)

Se utilizan las clases `A` y `B`, donde `B` hereda de `A` y redefine el método estático `miFuncion()`. Desde `B` se llama al método heredado `otraFuncion()`.

El archivo entregado utiliza `static::miFuncion()`, por lo que la llamada toma en cuenta la clase desde la cual se invocó el método y muestra `B`.

**Resultado obtenido con `static::`:**

```text
B
```

![Resultado del ejemplo con static](imagenes/02-late-static-binding.png)

**Comparación solicitada por la guía:** si se sustituye temporalmente `static::miFuncion()` por `self::miFuncion()` dentro de `otraFuncion()`, se hace referencia al método definido en `A`, por lo que el resultado esperado es `A`. La captura adjunta corresponde únicamente a la ejecución con `static::`.

### Problema #3: Impedir la herencia (`ImpedirHerencia.php`)

Se declara `Coche` como una clase `final` y luego se intenta crear `cocheDeLujo` mediante `extends Coche`.

PHP impide que una clase `final` sea heredada. Por ello, el programa muestra un **error fatal esperado**, que constituye la evidencia del comportamiento solicitado en este ejercicio.

**Resultado obtenido:**

```text
Fatal error: Class cocheDeLujo cannot extend final class Coche
```

![Error esperado al intentar heredar de una clase final](imagenes/03-clase-final.png)

> **Nota:** Este archivo se utiliza para demostrar el error y, por tanto, no termina su ejecución de manera normal. Debe probarse de forma independiente de los demás ejercicios.

### Problema #4: Área y perímetro de un círculo (`circulo.php`)

Se define la clase `Circulo`, que recibe el radio mediante su constructor. Los métodos `calcularArea()` y `calcularPerimetro()` utilizan la constante `M_PI` para realizar los cálculos.

Se crea un objeto con radio `4` y se muestran ambos resultados con dos decimales utilizando `number_format()`.

**Resultado obtenido:**

```text
Área del círculo: 50.27
Perímetro del círculo: 25.13
```

![Área y perímetro de un círculo de radio cuatro](imagenes/04-circulo.png)

### Problema #5: Herencia entre Persona, Estudiante y Docente

En este ejercicio se crea una clase principal llamada `Persona` y dos clases que heredan de ella: `Estudiante` y `Docente`. Se utiliza `parent::__construct()` para inicializar los datos comunes y se agregan atributos propios a cada clase derivada.

**Archivo `Persona.php`:** contiene los atributos `nombre`, `apellido` y `fechaNacimiento`, así como el constructor y los métodos para obtener sus valores. Es utilizado por las otras dos clases mediante `include`.

**Archivo `Estudiante.php`:** hereda de `Persona` y agrega `indiceAcademico`, `cohorte`, `estadoAcademico` y `modalidadEstudio`. En la ejecución de ejemplo se muestran los datos de Juan Perez, con índice académico `3.5` y cohorte `2023`.

![Resultado de la clase Estudiante](imagenes/05-estudiante.png)

**Archivo `Docente.php`:** también hereda de `Persona` y agrega `codigoDocente`, `departamento`, `categoriaDocente`, `tituloAcademico` y `tipoContratacion`. En la ejecución de ejemplo se muestran los datos de Carlos Rodriguez, con código `DOC001`.

![Resultado de la clase Docente](imagenes/06-docente.png)

## ▶️ Cómo ejecutar la práctica

1. Tener WampServer instalado y con los servicios de Apache y PHP iniciados.
2. Colocar la carpeta `PracticaPOO` dentro de `C:\wamp64\www\`.
3. Abrir el navegador e ingresar a los archivos PHP mediante `localhost`, por ejemplo:

   ```text
   http://localhost/PracticaPOO/coche.php
   http://localhost/PracticaPOO/EjemploLateStatic.php
   http://localhost/PracticaPOO/ImpedirHerencia.php
   http://localhost/PracticaPOO/circulo.php
   http://localhost/PracticaPOO/Estudiante.php
   http://localhost/PracticaPOO/Docente.php
   ```

4. Revisar los resultados de cada ejercicio y compararlos con las capturas incluidas.
5. Para el problema #2, cambiar temporalmente `static::miFuncion()` por `self::miFuncion()` y comparar los resultados, como indica la guía.

**Importante:** `Persona.php`, `Estudiante.php` y `Docente.php` deben mantenerse juntos en la misma carpeta para que las instrucciones `include("Persona.php")` funcionen según el código entregado. `ImpedirHerencia.php` genera intencionalmente un error fatal.

## 📝 Observaciones

- La clase `CocheDeLujo` del problema #1 muestra cómo una clase hija puede agregar atributos y redefinir métodos.
- En el problema #2, el código y la captura corresponden a la ejecución con `static::`; la prueba con `self::` queda descrita como comparación propuesta por la guía.
- El error del problema #3 es intencional y demuestra el uso de `final`.
- En el problema #5, los valores de estado académico y modalidad de estudio se imprimen numéricamente, como se encuentran en el código proporcionado.
- Los ejemplos de esta práctica no necesitan una base de datos ni formularios HTML para mostrar sus resultados.

## 👤 Autor

**Andrés Dommar**  
Universidad Tecnológica de Panamá (UTP)

## 📚 Material de apoyo

- *Realizar la Práctica de POO*: documento de instrucciones y ejemplos proporcionado para la actividad.
