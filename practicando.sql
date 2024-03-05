/*1. Mostrar los usuarios inactivos*/;
/*2. Mostrar la cantidad usuarios.*/;
/*3. Mostrar todas las columnas de la tabla usuario y la tabla grupo usuario*/;
/*4. Mostrar la tabla grupo usuario y otra columna que me diga cantidad de usuario por cada grupo. (Opcional)*/;
/*1*/;
alter table usuario  add CONSTRAINT fk_usuario_grupo_usuario FOREIGN key (id_grupo_usu) REFERENCES usuario_grupo(id)
/*FK*/;
select * from usuario  a inner join usuario_grupo  b
ON a.id_grupo_usu = b.id where a.user_activo = '0'
/*2*/;
SELECT * FROM `usuario` WHERE 1;
/*2*/;
SELECT count(id) from usuario
/*3*/;
select a.user,a.pass,a.id,a.estado,a.nombre,a.id_grupo_usu,a.user_activo,b.nombre
from usuario a inner join usuario_grupo b
on a.id_grupo_usu = b.id
/*4*/;
SELECT b.id,b.nombre,b.estado,a.nombre, count(b.id_grupo_usu),b.id_grupo_usu as 'Cantidad Usuario Por Grupo'
 FROM usuario_grupo  a inner join usuario  b
on a.id =  b.id_grupo_usu
where  a.id = '1'




