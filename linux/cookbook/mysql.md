---
layout:      grid12-article
title:       Instalando o MySql no Linux
description: Aprenda como instalar o banco de dados MySql no Linux
---

MySql é um banco de dados opensource.

Ao término de cada receita, você poderá checar se a instalação foi bem sucedido acessando o MySQL.:

	mysql -h localhost -u root -p

Alternativamente, você poderá digitar apenas `mysql -p`.

Ambos comando acima, pedirá a senha e mostrará o prompt do MySQL como abaixo:

	mysql>

Digite `exit` para sair.




CentOS
---

Instalar o software:

	# yum install mysql mysql-server -y 

Antes de tudo, inicie o serviço:

	# /etc/init.d/mysqld start

Habilite o serviço para que seja inicializado junto com o sistema operacional.
	
	# chkconfig mysqld on 

Setar uma senha para o root (do mysql):

	# /usr/bin/mysql_secure_installation



Fedora 17
---

	# yum install mysql mysql-server

Iniciar e habilitar o serviço:

	# systemctl start mysqld.service
	
	# systemctl enable mysqld.service

Setar uma senha para o root (do mysql):

	# mysqladmin -u root password sua_senha_aqui



Ubuntu
---

	# apt-get install mysql-server mysql-client

Setar uma senha para o root (do mysql):

	# mysqladmin -u root password sua_senha_aqui
