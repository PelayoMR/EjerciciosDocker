



# Trabajo Almacenamiento

> Tarea realizada por Pelayo y Gustavo



### Pantallazos de arrancar los contenedores c1 y c2

```bash
docker run -d --name c1 -v /home/pelayo/Escritorio/saludo:/var/www/html -p 8181:80 php:7.4-apache
docker run -d --name c2 -v /home/pelayo/Escritorio/saludo:/var/www/html -p 8282:80 php:7.4-apache
```

![image-20220131085943807](EjercicioAlmacenamiento/image-20220131085943807.png)

![image-20220131090105824](EjercicioAlmacenamiento/image-20220131090105824.png)



### Pantallazos accediendo a c1 y c2 por sus puertosa correspondientes

![image-20220131090148872](EjercicioAlmacenamiento/image-20220131090148872.png)

![image-20220131090209896](EjercicioAlmacenamiento/image-20220131090209896.png)



### Pantallazos de los ficheros index modificados

![image-20220131090453718](EjercicioAlmacenamiento/image-20220131090453718.png)

![image-20220131090530168](EjercicioAlmacenamiento/image-20220131090530168.png)

![image-20220131090543720](EjercicioAlmacenamiento/image-20220131090543720.png)

![image-20220131090712570](EjercicioAlmacenamiento/image-20220131090712570.png)