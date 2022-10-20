SELECT * FROM cus_loc; --CUSTOMER = CADASTRO DE CLIENTE (ONDE FOI COMPRADO)

SELECT customer, sales_rep FROM cus_buy; --ONDE FOI ENTREGUE

SELECT name, sls_rep.sales_rep FROM sls_rep; --

SELECT * FROM so_hdr WHERE SO = ' 064324_248376760001'; -- pedidos vendas

SELECT * FROM nfscl_hd WHERE NF_CGC_CPF = '10333162000103'; -- NF_CGC_CPF(CNPJ), NF_END(ENDERECO), NF_BAIRRO, ND_MUNICIPIO, NF_NOME(NOME), NF_ESTADUAL(INSCRIÇÃO ESTADUAL)

SELECT NF_CGC_CPF, NF_END, NF_BAIRRO, NF_MUNICIPIO, NF_NOME, NF_ESTADUAL FROM nfscl_hd;

select nf_cgc_cpf, nf_valor from nfscl_hd;

SELECT r.name, b.sales_rep FROM sls_rep r
inner join cus_buy b on (r.sales_rep = b.sales_rep)
; 

select * from d_dtglor;--nfscl_hd

select nf.nf_data_emissao, d.data_oracle

from nfscl_hd nf

inner join d_dtglor d on (d.data_oracle = nf.nf_data_emissao)
;
--order by nfscl_hd.nf_data_emissao desc;


select sum(nf_valor) from nfscl_hd where nf_cgc_cpf = '15235035000187';

