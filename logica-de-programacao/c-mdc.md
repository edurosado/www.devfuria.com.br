---
layout:      grid93-article
title:       "MDC máximo divisor comum "
description: Exercício de lógica de programação ara descubrir o MDC (máximo divisor comum).
menu:        logica-exerc-nivel-03
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Faça um programa para calcular o MDC (máximo divisor comum) entre dois números.

Utilize o método de divisões sucessivas.




Linguagem C
---

```c
#include <stdio.h>
#include <assert.h>

//
// Função mdc
//
int mdc(int num1, int num2) {

    // Aqui entra a lógica do programa.

}

//
// Testes
//
int main() {

    assert(3 == mdc(24, 9));
    assert(10 == mdc(30, 20));

    return 0;
}
```


### Solução na linguagem C

```c
#include <stdio.h>
#include <assert.h>

//
// Função mdc
//
int mdc(int num1, int num2) {

    int resto;

    do {
        resto = num1 % num2;

        num1 = num2;
        num2 = resto;

    } while (resto != 0);

    return num1;
}

//
// Testes
//
int main() {

    assert(3 == mdc(24, 9));
    assert(10 == mdc(30, 20));

    return 0;
}
```