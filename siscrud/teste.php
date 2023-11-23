<!DOCTYPE html>
<html>
<head>
    <title>home</title>
</head>
<body>
    
    <main class="home" id="restaurantes"></main>

    <script>
        // Função para carregar os restaurantes
        function carregarRestaurantes() {
            fetch('carregar_restaurantes.php')
                .then(response => response.json())
                .then(data => exibirRestaurantes(data))
                .catch(error => console.error('Erro ao carregar os restaurantes:', error));
        }

        // Função para exibir os restaurantes na página
        function exibirRestaurantes(restaurantes) {
            const mainRestaurantes = document.getElementById('restaurantes');

            restaurantes.forEach(restaurante => {
                const restauranteMain = document.createElement('main');
                restauranteMain.innerHTML = `
                    <h1 style="color: #005A09; font-weight: 900; left: 30px; margin-left: 2.2em; margin-bottom: 2em">Restaurantes Disponíveis</h1>
                    <div class="row home1">
                        <div class="col-md-4">
                            <h2>${restaurante.nome_res} <h3>${restaurante.nr_res}</h3></h2>
                            <p><strong>Cep:</strong> ${restaurante.cep}</p>
                        </div>
                    </div>
                `;
                mainRestaurantes.appendChild(restauranteMain);
            });
        }

        // Carregar os restaurantes ao carregar a página
        carregarRestaurantes();
    </script>
</body>
</html>
