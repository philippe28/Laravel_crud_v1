SELECT * FROM correspondencia co 
	LEFT JOIN contato c ON co.contato_id = c.id 
	LEFT JOIN correspondencia cr ON cr.contato_id = c.id 
	LEFT JOIN contato_empresa ce ON ce.contato_id = c.id 
	LEFT JOIN empresa ON ce.empresa_id = empresa.id 
WHERE c.sobrenome 
LIKE ‘%Silva%’ 
GROUP BY c.id 
ORDER BY c.nome