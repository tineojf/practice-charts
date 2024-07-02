# Gráfico Histórico del Índice de Pobreza en Perú

Este proyecto genera un gráfico histórico que muestra el índice de pobreza en Perú desde 1997 hasta 2022 utilizando PHP y la librería Highcharts. Los datos se obtienen de la API del Banco Mundial, centrándose en el campo 'headcount'.

## Tabla de Contenidos

- [Gráfico Histórico del Índice de Pobreza en Perú](#gráfico-histórico-del-índice-de-pobreza-en-perú)
  - [Tabla de Contenidos](#tabla-de-contenidos)
  - [Visión General](#visión-general)
  - [Instrucciones de Configuración](#instrucciones-de-configuración)
  - [Uso](#uso)
  - [Dependencias](#dependencias)
  - [Contribuciones](#contribuciones)
  - [Licencia](#licencia)

## Visión General

Esta aplicación web obtiene datos de pobreza de la API del Banco Mundial para Perú y los visualiza como un gráfico de líneas utilizando Highcharts. Proporciona información sobre las tendencias y cambios en el índice de pobreza a lo largo de los años.

## Instrucciones de Configuración

1. **Clonar el repositorio:**

   ```sh
   git clone <URL-del-repositorio>
   cd <directorio-del-repositorio>
   ```

2. **Configurar el entorno PHP:**
   Asegúrate de tener PHP instalado y configurado en tu servidor o máquina local.

3. **Dependencias:**

- PHP (versión 8.2 o superior)
- Biblioteca Highcharts para JavaScript

## Uso

1. **Ejecutar la aplicación:**

- Despliega la aplicación en un servidor web que soporte PHP.
- Abre el archivo `poverty.php` en un navegador web.

2. **Ver el gráfico del índice de pobreza:**

- El gráfico muestra el índice de pobreza (%) en Perú desde 1997 hasta 2022.
- Pasa el cursor sobre los puntos de datos para ver los valores específicos.

## Dependencias

- [Highcharts](https://www.highcharts.com) - Biblioteca Highcharts para gráficos.

## Contribuciones

Las contribuciones son bienvenidas. Si encuentras algún problema o tienes sugerencias de mejoras, por favor abre un issue o envía un pull request.

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](LICENSE).
