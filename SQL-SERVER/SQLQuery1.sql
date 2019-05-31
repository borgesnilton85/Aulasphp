
create table tb_usuarios (
idUsuario int NOT NULL IDENTITY PRIMARY KEY,
desLogin VARCHAR(64) NOT NULL,
desSenha VARCHAR(256) NOT NULL,
dtCadastro DATETIME NOT NULL DEFAULT GETDATE()
);

SELECT * FROM tb_usuarios;



INSERT INTO tb_usuarios(desLogin,desSenha) VALUES(
'sqlserver','123456789');