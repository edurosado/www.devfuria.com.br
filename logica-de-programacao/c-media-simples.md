---
layout:      grid93-article
title:       "Média simples de 3 números "
description: Exercício de lógica de programação resolvido onde o objetivo é calcular a média simples.
menu:        logica-exerc-nivel-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa que calcule a média simples (aritmética) de 3 valores quaisquer.

Utilize as variáveis `valor1`, `valor2` e `valor3`.


Linguagem C
---

Abaixo nosso código inicial escrito em C, utilize ele para resolver o problema.

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int valor1, valor2, valor3, media;

    //
    // Sua lógica
    //



    //
    // Seu teste
    //
    assert(7 == media);

    return 0;
}
```



### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

int main (){

    int valor1, valor2, valor3, media;

    //
    // Sua lógica
    //
    valor1 = 6;
    valor2 = 7;
    valor3 = 8;
    media = (valor1 + valor2 + valor3) / 3;

    //
    // Seu teste
    //
    assert(7 == media);

    return 0;
}
```


Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#





#
# Sua lógica
#
media = (valor1 + valor2 + valor3) / 3

#
# Seu teste
#
assert 7 == media
```


### Solução na linguagem Python

```python
# -*- coding: utf-8 -*-

#
# Variáveis
#
valor1 = 6
valor2 = 7
valor3 = 8


#
# Sua lógica
#
media = (valor1 + valor2 + valor3) / 3

#
# Seu teste
#
assert 7 == media
```