# Validador de CPF em PHP
Este script PHP realiza a validação de CPFs, verificando se ele segue a estrutura correta e se os dígitos verificadores são válidos. 
O CPF pode ser inserido com ou sem formatação (pontos e traços).

O código realiza as seguintes etapas para validar o CPF:

Limpeza do CPF: Remove todos os caracteres não numéricos, como pontos e traços.
Validação de estrutura: Verifica se o CPF possui exatamente 11 dígitos numéricos e se não é uma sequência repetitiva (exemplo: "111.111.111-11").
Cálculo dos dígitos verificadores:
	* Primeiro dígito: É calculado a partir dos 9 primeiros dígitos do CPF. A fórmula de cálculo leva em conta a multiplicação dos dígitos por um fator decrescente de 10 a 2, e a soma resultante é dividida por 11 para determinar o primeiro dígito verificador.
	* Segundo dígito: Similar ao primeiro, mas leva em conta os 10 primeiros dígitos e calcula o segundo dígito verificador.

Caso algum dos dígitos calculados não corresponda aos dígitos informados no CPF, o script retorna "CPF inválido".

## Como usar:
	* Abra o terminal e navegue até o diretório onde o arquivo PHP está localizado.
	*Execute o script PHP com o comando:
		- php validator.php
O script solicitará que você digite o CPF a ser validado. Insira o CPF com ou sem formatação (por exemplo: 123.456.789-10 ou 12345678910).

## Contribuindo
Sinta-se à vontade para fazer sugestões, melhorias ou abrir problemas (issues) caso encontre algum erro ou queira adicionar novas funcionalidades ao projeto.
