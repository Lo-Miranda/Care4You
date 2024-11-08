<?php
session_start();
include('layout/header.php'); 
?>

</head>
<body>
    <h4>Gerenciar Consultas</h4>
    <div class="tabs_geren">
        <button class="tab active" onclick="showTab('realizadas')">Consultas Realizadas</button>
        <button class="tab" onclick="showTab('marcadas')">Consultas Marcadas</button>
    </div>
    <div class="container_geren">
        <div id="realizadas" class="tab-content active"></div>
        <div id="marcadas" class="tab-content"></div>
        <div class="pagination_geren" id="pagination"></div>
    </div>
    <div class="box1" style="padding-top:40px; padding-bottom: 30px;">             
        <a class="btn btn-dark" href="page_inicial_prestador.php" role="button" style="background-color: #524b4a">VOLTAR</a>
    </div>

    <script>
        const consultasRealizadas = [
            { paciente: 'João Silva Santos', data: '2024-10-28' },
            { paciente: 'Maria Stephanie Oliveira', data: '2024-10-30' },
            { paciente: 'Carlos Pereira Schwartz', data: '2024-10-31' },
            { paciente: 'Ana Carolina Santos', data: '2024-10-29' },
            { paciente: 'Fernando Gerson Lima', data: '2024-10-27' },
            { paciente: 'Madalena Pires Zuchini', data: '2024-10-27' },
        ];

        const consultasMarcadas = [
            { paciente: 'Roberto Rodrigo Costa ', data: '2024-11-05' },
            { paciente: 'Lucia Almeida Oliveira', data: '2024-11-12' },
            { paciente: 'Paulo Salvino Mendes', data: '2024-11-15' },
            { paciente: 'Mariana Josefa Silva', data: '2024-11-20' },
            { paciente: 'Claudio Falchioni', data: '2024-11-22' },
            { paciente: 'Gerson Alves Santos', data: '2024-11-22' },
        ];

        const itemsPerPage = 2; 
        let currentPage = 1;

        function renderConsultas(tab, consultas) {
            const container = document.getElementById(tab);
            container.innerHTML = ''; 

            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedConsultas = consultas.slice(start, end);

            paginatedConsultas.forEach(consulta => {
                const card = document.createElement('div');
                card.className = 'card';
                card.innerHTML = `
                    <h2>${consulta.paciente}</h2>
                    <p>Data: ${consulta.data}</p>
                `;
                container.appendChild(card);
            });
        }

        function updatePagination(tab, consultas) {
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            const totalPages = Math.ceil(consultas.length / itemsPerPage);

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.className = 'page-button' + (i === currentPage ? ' active' : '');
                button.innerText = i;
                button.onclick = () => {
                    currentPage = i;
                    renderConsultas(tab, consultas);
                    updatePagination(tab, consultas);
                };
                pagination.appendChild(button);
            }
        }

        function showTab(tabName) {
            const tabs = document.querySelectorAll('.tab-content');
            const tabButtons = document.querySelectorAll('.tab');

            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            tabButtons.forEach(button => {
                button.classList.remove('active');
            });

            document.getElementById(tabName).classList.add('active');
            document.querySelector(`.tab[onclick="showTab('${tabName}')"]`).classList.add('active');

            currentPage = 1; 
            renderConsultas(tabName, tabName === 'realizadas' ? consultasRealizadas : consultasMarcadas);
            updatePagination(tabName, tabName === 'realizadas' ? consultasRealizadas : consultasMarcadas);
        }

        window.onload = () => {
            renderConsultas('realizadas', consultasRealizadas);
            updatePagination('realizadas', consultasRealizadas);
        };
    </script>
  






<?php include('layout/footer.php'); ?>
