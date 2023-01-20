    SELECT DISTINCT
        nf.nf_cgc_cpf as "CNPJ",
        CL.NAME as "NOME",
        nf.nf_estadual as "INSCRIÇÃO ESTADUAL",
        CL.ADDR1 as "ENDEREÇO",
        CL.ADDR4 as "BAIRRO",
        CL.CITY as "MUNICIPIO",
        (SELECT  MAX(DATA_ORACLE)
          FROM NFSCL_HD 
          INNER JOIN D_DTGLOR ON (NF_DATA_EMISSAO = DATA_GLOVIA)
            WHERE NF_CUS = CL.CUSTOMER
            AND NF_CUS_LOC = CL.CUS_LOC
            AND NF_FINAL = 'S') as DATA_DO_ULTIMO_FATURAMENTO,
        max(h.order_date) as "DATA ULTIMO PEDIDO",
        (SELECT  MAX(nfscl_hd.NF_NO)
              FROM NFSCL_HD 
              WHERE nfscl_hd.NF_CUS = CL.CUSTOMER
                AND nfscl_hd.nf_cus_loc = CL.CUS_LOC
                AND nfscl_hd.NF_FINAL = 'S') as "ULTIMO NÚMERO DE NOTA",
            (SELECT SUM(NFSCL_HD.NF_VALOR)
            FROM NFSCL_HD
            WHERE to_char(TO_DATE('31/12/1799','DD/MM/YYYY') + NF_DATA_EMISSAO, 'DD/MM/YYYY') >= (SYSDATE - 365)
            AND nfscl_hd.CCN = 'SPL'
            AND nfscl_hd.MAS_LOC = 'SPL'
            AND nfscl_hd.NF_SER = '1'
            and nfscl_hd.NF_CUS = CL.CUSTOMER
            AND nfscl_hd.nf_cus_loc = CL.CUS_LOC
            AND NFSCL_HD.NF_FINAL = 'S' ) AS "TOTAL",
        (case when MAX(h.order_date) > (sysdate - 365) then 'Cliente ativo' else 'Cliente inativo' end) as status
    
    FROM
        cus_loc cl
        inner join cus_buy cb on (cl.customer = cb.customer and cb.cus_buy_loc = cl.cus_loc) 
        inner join sls_rep sr on (sr.sales_rep = cb.sales_rep and sr.ccn = cb.ccn)
        left join nfscl_hd nf on (NF.NF_CUS = CL.CUSTOMER AND NF.NF_CUS_LOC = CL.CUS_LOC)
        left join so_hdr h on (cl.customer = H.customer and cl.cus_loc = h.cus_buy_loc)
        WHERE H.ORDER_DATE >= '05/05/22'
        group by nf.nf_cgc_cpf,
        CL.NAME,
        nf.nf_estadual,
        CL.ADDR1,
        CL.ADDR4,
        CL.CITY,
        cl.customer,
        cl.cus_loc
        ;
    
    
    /*SELECT * FROM ALL_CONS_COLUMNS WHERE TABLE_NAME IN ( 'CUS_BUY' , 'CUS_LOC' ) 
    AND  POSITION > 0 
    ORDER BY TABLE_NAME , POSITION ;
    
    select * from so_hdr;*/
    
    
    
