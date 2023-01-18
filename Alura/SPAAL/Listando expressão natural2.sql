SELECT 
        'O cliente ' || TC.NOME || ', faturou ' ||
            SUM(INF.QUANTIDADE * PRECO) || ' no ano de ' || TO_CHAR(DATA_VENDA, 'YYYY')
    FROM
    
        TABELA_DE_CLIENTES TC
        
        INNER JOIN NOTAS_FISCAIS NF ON (TC.CPF = NF.CPF)
        INNER JOIN ITENS_NOTAS_FISCAIS INF ON (INF.NUMERO = NF.NUMERO)
        WHERE TO_CHAR(DATA_VENDA, 'YYYY') = '2016'
        GROUP BY TC.CPF, TC.NOME, DATA_VENDA 
        ;