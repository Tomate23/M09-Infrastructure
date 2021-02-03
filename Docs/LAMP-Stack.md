# M09-Infrastructure Grup -- 3
[![N|Solid](http://www.institutpedralbes.cat/wp-content/uploads/2020/05/logo-614x332.png)](http://www.institutpedralbes.cat/)

Treballarem amb una instancia a Oracle Cloud.
En aquesta instància hi afegirem, MySQL, Apache2, PHP.

# Abans de instal·lar qualsevol cosa:
```sh
$ sudo apt update
$ sudo apt upgrade
```


# Instal·lació Apache2

```sh
$ sudo apt install apache2 -y
$ sudo systemctl start apache2
$ sudo systemctl enable apache2
```

# Instal·lació PHP 7.4
```sh
$ sudo apt install wget php php-cli php-fpm php-mysql php-zip php-gd phpmbstring php-curl php-xml php-pear php-bcmath
$ sudo vim /etc/php/7.4/apache2/php.ini
```
Editem l'arxiu i assignem el upload_max_filesize a 50M
```sh
$ upload_max_filesize = 50M
```

# Instal·lem MySQL i ho deixem configurat
```sh
$ sudo apt install mysql-server
```
* Accedim al entorn MySQL.
```sh
$ mysql -u root -p
```
> La contrasenya serà la que haguem ficat a la instal·lació de MySQL quan ens ha preguntat.

* Creem una BD específica per al projecte de infraestructura.
```mysql
mysql> create database infra3;
```
* Creem un usuari específic per a l'administració de la BD:
```mysql
mysql> createuser infra3control@% identified by '***';
```
> Assignem al nou usuari tots els permisos de la nova BD infra3.
```mysql
mysql> grant all on infra3.* to infra3control@%;
mysql> flush privileges;
mysql> systemctl restart mysql
```
