---
title = EjercicioInicial
author = Pelayo Mayorga Gustavo Sanchez
---

# Ejercicio Inicial

> Tarea realizada por Gustavo Sanchez y Pelayo Mayorga



1- Pantallazo donde se vea la creación del contenedor y podamos comprobar que el contenedor está funcionando

```bash
docker run -d --name servidor_web -p 8181:80 nginx
```

![imagenes/image-20220124094336654](image-20220124094336654.png)

2- Pantallazo donde se vea el acceso al servidor web utilizando un navegador web 

![image-20220124094731482](image-20220124094731482.png)

3- Pantallazo donde se vean las imágenes que tienes en tu registro local.

```bash
docker ps	
```

![image-20220124094932150](image-20220124094932150.png)![image-20220124094958166](image-20220124094958166.png)

4-  Pantallazo donde se vea cómo se elimina el contenedor

```bash
docker stop servidor_web
docker rm servidor_web
```

![image-20220124095144775](image-20220124095144775.png)

