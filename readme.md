# sgAdmin

Inicio de projeto de um sistema, que a principio contempla as funcionalidades de Listar, Criar, Editar, Visualizar e Deletar Borderôs.

Aluno: João Dutra Cristoforu

## Instalação

Clonar o repositório:

```sh
https://github.com/CristoforuJD/trabalho-pos.git sgAdmin
cd sgAdmin
```

Instalar dependências do composer:

```sh
composer install
```

Instalar dependências do npm:

```sh
npm install ou yarn install
```

Compilar assets:

```sh
npm run dev ou yarn dev
```

Configuração do env:

```sh
cp .env.example .env
```

Gerar chave da aplicação:

```sh
php artisan key:generate
```

Crie um banco de dados SQLite. 

```sh
touch database/database.sqlite
```

Rodar migrations:

```sh
php artisan migrate
```

Rodar seeders:

```sh
php artisan db:seed
```

Iniciar aplicação:

```sh
php artisan serve
```

No navegador pode ser feito o login com o usuario:

- **Email:** joao@safegold.com
- **Senha:** admin

## Rotas API



Usar o access_token para realizar as operacoes CRUD nas demais rotas com o header Bearer Token, exemplo:
```
Authorization: Bearer token_exemplo
```

Posts:
- GET /api/borderos
- GET /api/borderos/{id}
- POST /api/borderos
- PUT/PATCH /api/borderos/{id}
- DELETE /api/borderos/{id}

Corpo das requisicoes POST, PUT/PATCH:
```
{
  {
      "pro_id": "1",
      "bor_dataope": "2019-08-15",
      "bco_id": "1",
      "car_id": "1",
      "tir_id": "2",
      "url_id": null,
      "bor_numero": "0",
      "bor_qtd_tit": "0",
      "bor_vlr_bruto": "0",
      "bor_qt_recusada": "0",
      "bor_vlr_bruto_recusado": "0",
      "bor_vlr_bruto_final": "0",
      "bor_qtd_final": null,
      "bor_pz_med_emp": "0",
      "bor_pz_med_bco": "0",
      "bor_float_calc": "0",
      "bor_float_acordado": "0",
      "bor_vlr_liquido": "0",
      "bor_dtsis": "2019-08-18 17:34:30",
      "bor_float_dif": "0",
      "bor_vlr_tot_tarifas": "0",
      "bor_chk_iof": "0",
      "bor_taxa_acordado": null,
      "bor_vlr_liq_correto": "0",
      "bor_chk_liq": "0",
      "bor_status": null,
      "bor_recompra": "0",
      "bor_per_recompra": "0",
      "bor_retencao": "0",
      "bor_per_retencao": "0",
      "bor_fomento": "0",
      "bor_per_fomento": "0",
      "bor_liq_recebido": "0",
      "bor_dt_cred": null,
      "bor_contato": null,
      "bor_tx_banco": "0",
      "bor_tx_empresa": "0",
      "bor_obs": null,
      "bor_mutl_pm": "0",
      "bor_mutl_pm_float": "0",
      "bor_cst_sem_iof": "0",
      "bor_cst_com_iof": "0",
      "bor_dtupdate": "2019-08-18 17:34:30"
  }
}
```


