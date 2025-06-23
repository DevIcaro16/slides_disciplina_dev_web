<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso ADS - Apresentação</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reveal.js@4.3.1/dist/reveal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reveal.js@4.3.1/dist/theme/white.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="reveal">
        <div class="slides">
            <!-- Slide 1: Boas Vindas -->
            <section>
                <h2>Trabalho - Desenvolvimento WEB</h2>
                <p>Olá, Cursos de Tecnologia da Estácio - Via Corpvs!</p>
            </section>

            <!-- Slide 2: Apresentação da Equipe -->
            <section>
                <h2>Integrantes da Equipe</h2>
                <div class="team-member">
                    <ul>
                        <li>Ícaro Rebouças - 202403663295</li>
                    </ul>
                </div>
            </section>

            <!-- Slide 3: Tópicos -->
            <section>
                <h2>TASKS</h2>
                <div class="tasks-container">
                    <div class="task-group">
                        <h4>USABILIDADE</h4>
                        <ul>
                            <li>Exibir alerta de confirmação ao tentar excluir um cliente</li>
                        </ul>
                    </div>

                    <div class="task-group">
                        <h4>CONSUMO DE API</h4>
                        <ul>
                            <li>Integração com serviços externos</li>
                        </ul>
                    </div>

                    <div class="task-group">
                        <h4>LÓGICA</h4>
                        <ul>
                            <li>Implementação de algoritmos e regras de negócio</li>
                        </ul>
                    </div>

                    <div class="task-group">
                        <h4>DESIGN</h4>
                        <ul>
                            <li>Criar dashboard inicial com indicadores visuais</li>
                        </ul>
                    </div>
                </div>
            </section>

            <?php
            include 'tasks/usabilidade/slides.php';
            include 'tasks/api/slides.php';
            include 'tasks/logica/slides.php';
            include 'tasks/design/slides.php';
            ?>

            <!-- Slide Final -->
            <section>
                <div class="team-member">
                    <h2>TASKS FINALIZADAS!</h2>
                    <h4>TRAGAM MAIS!</h4>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/reveal.js@4.3.1/dist/reveal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/reveal.js@4.3.1/plugin/highlight/highlight.js"></script>
    <script>
        Reveal.initialize({
            controls: true,
            progress: true,
            center: true,
            hash: true,
            transition: 'slide',
            plugins: [RevealHighlight]
        });
    </script>
</body>

</html>