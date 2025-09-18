# Projeto Laravel: FORNECEDORES

Este projeto foi desenvolvido para praticar a criação e alteração de tabelas usando **migrations** no Laravel, além de exportar o banco de dados e publicar o código no GitHub.

---

## 1. Deploy da Migration - Criação da tabela CADASTRO e ESTOQUE
- **Procedimento realizado:**  
  Foram criadas duas migrations:  
  1. `create_cadastro_table` → Campos: `id` (chave primária), `nome`, `endereco`, `telefone`, `cnpj`.  
  2. `create_estoque_table` → Campos: `id`, `quantidade`, `valor_unitario`, `cadastro_id` (chave estrangeira para `cadastro`).  

- **Comando para rodar as migrations:**  
```bash
php artisan migrate
```
- **Print das migrations:**  
<img width="1422" height="420" alt="image" src="https://github.com/user-attachments/assets/1f8ea66c-9e56-45c1-b685-493cee5df8b6" />
