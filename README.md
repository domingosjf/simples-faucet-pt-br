TRADUÇÃO PT-BR

# Script de torneira simples
Bitcoin Faucet integrado com banlist e VPN / Proxy Shield. Ele usa o serviço do Google reCaptcha (v2; box) e IPHub. Quaisquer reclamações serão salvas no saldo da conta e podem ser retiradas para ExpressCrypto, FaucetPay ou diretamente usando Block.io

# Requisitos mínimos

* PHP> = 5.4 (testado em 5.6), não use PHP 7.0 ou superior
* Extensões PHP: cURL e GMP
* MySQL

# Instalação

1. Baixe os arquivos

2. Faça upload para o seu servidor FTP

3. Carregue o sql.sql usando PHPMyAdmin

4. A alteração inclui / config.php a conexão MySQL e o URL do site (por exemplo, http://example.org/faucet)

5. Abra http://yourdomain.de/admin.php e insira os seguintes dados de login:

Admin Username: admin

Admin Password: admin

Agora você está no site do administrador e altere a configuração para executar sua torneira!


# Demo

A demo is avaible: http://salmen.website/Faucet/


# Free

Livre. Sem taxas ocultas são aplicadas.

# Termos e Condições

Você tem o direito de modificar o código, desde que não remova a licença.