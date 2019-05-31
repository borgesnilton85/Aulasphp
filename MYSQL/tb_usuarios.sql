/**
* O PROGRAMA INSTALADO FOI mysql-workbench-community-6.3.9-winx64.zip
*
**//

dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
CREATE TABLE tb_usuarios (
  idusuario int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  deslogin varchar(64) NOT NULL,
  dessenha varchar(256) NOT NULL,
  dtcadastro timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

