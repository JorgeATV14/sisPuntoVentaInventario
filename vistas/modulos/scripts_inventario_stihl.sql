ALTER TABLE inventario.usuarios MODIFY COLUMN nombre text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL;
ALTER TABLE inventario.usuarios MODIFY COLUMN usuario text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL;
ALTER TABLE inventario.usuarios MODIFY COLUMN password text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL;
ALTER TABLE inventario.usuarios MODIFY COLUMN perfil text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL;
ALTER TABLE inventario.usuarios MODIFY COLUMN foto text CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL;
ALTER TABLE inventario.usuarios MODIFY COLUMN estado int(11) NULL;
ALTER TABLE inventario.usuarios MODIFY COLUMN ultimo_login datetime NULL;
ALTER TABLE inventario.usuarios MODIFY COLUMN fecha timestamp DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP NULL;
