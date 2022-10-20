    CREATE VIEW VW_SUM_NFVALOR AS
    
    SELECT 
    CL.NAME,
    NF.NF_CGC_CPF,
    SUM(NF.NF_VALOR) AS TOTAL
    
    FROM NFSCL_HD NF
    
    LEFT JOIN cus_loc CL ON (NF.NF_CUS = CL.CUSTOMER AND NF.NF_CUS_LOC = CL.CUS_LOC)
    
    WHERE NF.CCN = 'SPL'
    AND NF.MAS_LOC = 'SPL'
    AND NF.NF_SER = '1'
    and NF.NF_CUS = CL.CUSTOMER
    AND NF.nf_cus_loc = CL.CUS_LOC
    AND NF.NF_FINAL = 'S'
    
    GROUP BY CL.NAME, NF.NF_CGC_CPF 
    ;
    
    SELECT * FROM VW_SUM_NFVALOR
    ORDER BY NAME;
    
    
    
    
    
    
    
    SELECT * FROM cus_loc;
    SELECT  NF_FINAL FROM NFSCL_HD;