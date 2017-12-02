select * from correspondencia co 
JOIN contato c on co.contato_id = c.id 
JOIN empresa e on co.contato_id = c.id 
JOIN contato_empresa ce on ce.contato_id = c.id 
WHERE c.sobrenome LIKE '%Silva%' 
GROUP BY c.id ORDER BY c.nome