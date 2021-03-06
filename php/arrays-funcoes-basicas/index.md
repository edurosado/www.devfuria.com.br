---
layout:      grid12-article
title:       PHP - Funções básicas de arrays
description: Aprenda as funções básicas de array
---

### array_pop

Para remover um valor no final do array:

    array_pop($arr);

Veja mais em [PHP - Função array_pop()](/php/refs/array_pop/)



### array_shift

Para remover um elemento do início do array:

    array_shift($arr);

Fonte: [Manual do PHP - array-shift](http://www.php.net/manual/pt_BR/function.array-shift.php "link-externo")


### array_unshift

Adiciona um elemento no início do array:

    array_unshift($arr, "valor");

Fonte: [Manual do PHP - array-unshift](http://www.php.net/manual/pt_BR/function.array-unshift.php "link-externo")



### unset

Para remover determinado elemento do array:

    unset($arr[5]);

Para remover o array da memória:

    unset($arr);

Fonte: [Manual do PHP - unset](http://www.php.net/manual/pt_BR/function.unset.php "link-externo")



### in_array

Verifica se o array contém um determinado valor:

    in_array("valor", $arr);

Veja mais em [PHP - Função in_array()](/php/refs/in_array/)



### count

Retorna a quantidade de elementos de um array:

    count($arr);

Fonte: [Manual do PHP - count](http://www.php.net/manual/pt_BR/function.count.php "link-externo")


### explode

Transforma string em array.

```php
<?php
$arr = array();
$arr = explode("/", "20/01/2001");
var_dump($arr);
```

Resultado:

!["Imagem ilustrando o resulado da função explode()"](array06.png "Imagem ilustrando o resulado da função explode()")

Fonte: [Manual do PHP - explode](http://www.php.net/manual/pt_BR/function.explode.php "link-externo")



### implode

Tansforma array em string.


```php
<?php
$arr = array("Flavio", "Alexandre", "Micheletti");
$nomeCompleto = implode("-", $arr);
var_dump($nomeCompleto)
```

Resultado:

!["Imagem ilustrando o resulado da função implode()"](array07.png "Imagem ilustrando o resulado da função implode()")

Fonte: [Manual do PHP - implode](http://www.php.net/manual/pt_BR/function.implode.php "link-externo")
