<?php require_once __DIR__ . '/includes/conexao.php'; ?>

<?php
try {
    $stmt = $con->query("SELECT nomedosite, autor FROM dadosdosite LIMIT 1");
    $siteData = $stmt->fetch(PDO::FETCH_ASSOC);

    // Define valores padrão caso a tabela esteja vazia
    $nomeSite = $siteData['nomedosite'] ?? 'Meu Site';
    $autorSite = $siteData['autor'] ?? 'Administrador';
} catch (PDOException $e) {
    $nomeSite = 'Erro ao carregar site';
    $autorSite = 'Desconhecido';
}
?>

<!doctype html>
<html lang="en">

<head>
    <title> <?= $nomeSite?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
       <div class="container">
          <?php require_once __DIR__ . '/includes/header.php'; ?>
<?php require_once __DIR__ . '/includes/body-login.php'; ?>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
       </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>