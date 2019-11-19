# Practicas en PHP Mediante Ejemplos  www.leewayweb.com

Serie de ejercicios para mejorar y practicar código mendiante PHP


## Ejercicio Numero 1

El desafío es generar el archivo de salida utilizando un script de línea de comandos basado únicamente en php.

**Archivo Original.**

    [H1F_Comprobante]| 3.3| B| 2254| 2018-08-30T08:25:45| 99| | 47500.00| 0.00| MXN| 1| 55100.00| I| PPD| 02700| NO/NO| | | | | | | | | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H1C_Comprobante]| PPG-35| | | | 1564283| 2011| Original| | | 16.0000| 0.0| | 0.00| | | | | | | | | | | | | | | I| P| CINCUENTAYCINCOMILCIENPESOS00/100M.N.| | | | | | | | | | | | | | | | | | | | | | FACTURACOMERCIAL| | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | [H2F_CfdiRelacionados]| | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H2C_CfdiRelacionados]| | | | | | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H2-1F_CfdiRelacionado]| | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H2-1C_CfdiRelacionado]| | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H3F_Emisor]| IPE8908219D4| IndustriasPear,S.A.deC.V.| 601| | | | | | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H3C_Emisor]| | | | | 53593518| | | | | | | | | | | | | | | | | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H3-1C_EmisorDomFiscal]| Democracias| 61-C| | ColSanMiguelAmantla| Azcapotzalco| | Azcapotzalco| CiudaddeMexico| Mexico| 02700| | | | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H3-2C_EmisorDomExped]| IndustriasPear,S.A.deC.V.| IPE8908219D4| | Democracias| 61-C| | ColSanMiguelAmantla| Azcapotzalco| | Azcapotzalco| CiudaddeMexico| Mexico| 02700| | | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | [H4F_Receptor]| PAM781201CW0| ProductosAlimenticiosLaModernaSACV| | | G03| | | | | | | | | | | | | | | | | | | | Borrar| | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | | |

Se necesita llegar a otro archivo con este contenido:  
  

    [H1F_Comprobante]|3.3|B|2254|2018-08-30T08:25:45|99||47500.00|0.00|MXN|1|55100.00|I|PPD|02700|NO/NO||||||||||||||||||||  
    [H1C_Comprobante]|PPG-35||||1564283|2011|Original|||16.0000|0.0||0.00|||||||||||||||I|P|CINCUENTAYCINCOMILCIENPESOS00/100M.N.||||||||||||||||||||||FACTURACOMERCIAL|||||||||||||  
    [H2F_CfdiRelacionados]|||||  
    [H2C_CfdiRelacionados]|||||||||||||||||  
    [H2-1F_CfdiRelacionado]|||||  
    [H2-1C_CfdiRelacionado]|||||  
    [H3F_Emisor]|IPE8908219D4|IndustriasPear,S.A.deC.V.|601|||||||||||||||||  
    [H3C_Emisor]|||||53593518||||||||||||||||||||||||||||  
    [H3-1C_EmisorDomFiscal]|Democracias|61-C||ColSanMiguelAmantla|Azcapotzalco||Azcapotzalco|CiudaddeMexico|Mexico|02700|||||||||||||||  
    [H3-2C_EmisorDomExped]|IndustriasPear,S.A.deC.V.|IPE8908219D4||Democracias|61-C||ColSanMiguelAmantla|Azcapotzalco||Azcapotzalco|CiudaddeMexico|Mexico|02700||||||||||||||  
    [H4F_Receptor]|PAM781201CW0|ProductosAlimenticiosLaModernaSACV|||G03||||||||||||||||||||




