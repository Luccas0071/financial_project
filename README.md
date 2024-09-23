## Codigo Laravel Make

- Criar novo Controller
php artisan make:controller <NomeDaController>
Ex: php artisan make:controller TransactionController

- Criar nova model
php artisan make:model <NomeDaModel>
Ex: php artisan make:model BankAccount

- Criar nova migration
php artisan make:migration <NomeDaMigration>
php artisan make:migration create_card_bank_account_table


## Melhorias
Unir as função de cartões e contas bancarias;
Arrumar os campos que não são obrigatorios;

Adicionar proximas contas a pagar na Home;
Tirar data de conclusão da conta bancaria;

Transação quando for parcela deve gerar quantidade de parcelas definidas pelo usuario;

Adicionar usuarios para visualizar as contas;
Saber a porcentagem que cada pessoa é responsavel para pagar conta dependendo do salario;




