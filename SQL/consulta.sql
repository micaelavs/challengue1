select em.id as id_empleado, concat(em.apellido,' ',em.nombre) as apellido_nombre, fam.nombre as nombre_familiar
from empleado em
left join familiar fam on
em.id = fam.empleado_id