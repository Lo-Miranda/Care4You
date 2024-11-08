<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ícones com Tooltip</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .icon {
            width: 40px; 
            height: 40px;
            margin: 0 15px;
            transition: transform 0.2s;
        }

        .icon:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="col-md-12" style="padding-top: 30px;">    
        <div class="d-flex justify-content-center" style="padding-top: 20px;">
            <a href="index.php" data-toggle="tooltip" title="Home"><img src="assets/home.png" alt="Icon 1" class="icon"></a>
            <a href="#" data-toggle="tooltip" title="Calendário"><img src="assets/calendar.png" alt="Icon 2" class="icon"></a>
            <a href="#" data-toggle="tooltip" title="Ajuda"><img src="assets/interrogation-mark.png" alt="Icon 3" class="icon"></a>
            <a href="#" data-toggle="tooltip" title="Perfil"><img src="assets/user.png" alt="Icon 4" class="icon"></a>
            <a href="#" data-toggle="tooltip" title="Configurações"><img src="assets/settings.png" alt="Icon 5" class="icon"></a>
        </div>
    </div>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>
