---
layout:      grid93-article
title:       "Simples exemplo de TDD - Maior que 10"
description: Neste exemplo de TDD (com linguagem C) iremos criar uma função que descubra se um valor é maior ou menor que 10
menu:        tdd-exemplos-simples-c
---

{% include /menus/tdd-exemplos-simples-paraquedas.html %}

Neste exemplo de TDD (com linguagem C) iremos criar uma função que descubra se um valor é maior ou menor que 10. 

Vamos utilizar funções e como manda o TDD devemos começar pelos testes.

O Primeiro teste me pareceu simples.

	assert(1 == ehMaiorQue10(17));

Eu utilizei o `17` como parâmetro mas você poderia utilizar qualquer outro.

Façamos o código compilar.

    int ehMaiorQue10(int valorQualquer) {
    }

O teste falha, vamos codificar o mínimo para fazê-lo passar.

E pensei em retorna `1` caso `valorQualquer` seja maior que `10` e retornar `0` caso seja menor.

    int ehMaiorQue10(int valorQualquer) {
        return 1;
    }

Agora, escreveremos outro teste.

	assert(0 == ehMaiorQue10(9));

O teste falha, OK, vamos trabalhar. Neste ponto, entra a sua lógica.

Como fazer para a função distinguir entre o que é maior e o que é menor que 10?

Que tal isso...

    int ehMaiorQue10(int valorQualquer) {
        if (valorQualquer > 10) {
            return 1;
        } else {
            return 0;
        }
    }


Meus testes passaram, espero que o seus também.


### Código completo

```c
#include <stdio.h>
#include <assert.h>

//
// Função que descobre se um número é ou não maior que 10
//
// retornará 1 caso seja maior
// retornará 0 caso seja menor
int ehMaiorQue10(int valorQualquer) {
    if (valorQualquer > 10) {
        return 1;
    } else {
        return 0;
}
}

int main (){
    assert(1 == ehMaiorQue10(17));
    assert(0 == ehMaiorQue10(9));
    return 0;
}
```        


Próximo exemplo
---

- [Simples exemplo de TDD - Funções para as 4 operações artiméticas](/tdd/exemplo-tdd-operacoes-mat/)
