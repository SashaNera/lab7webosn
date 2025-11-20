<?php
// submit.php
// Встановлюємо код відповіді 200 (ОК)
http_response_code(200); 

// Відповідь клієнту
echo "Дані отримано. Дякуємо, " . htmlspecialchars($_POST['userName']) . "!";
?>