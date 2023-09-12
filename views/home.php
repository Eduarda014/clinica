<?=
    $this->layout('base', $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="row header" style="display: flex;">
            <h1 class="titulos" style="margin: 0;">Clínica Shark's</h1>
            <!-- </div> -->
        </div>
    </header>
    <main>
        <section>
            <h2>Sobre</h2>
            <p>Bem-vindo à nossa clínica veterinária! Estamos comprometidos em fornecer cuidados de saúde de qualidade para
                todos os nossos pacientes. Aqui você encontrará uma equipe de profissionais altamente qualificados e
                experientes, prontos para atender às necessidades de saúde do seu animal.</p>
        </section>

        <section id="services">
            <h2>Nossos serviços</h2>
            <div class="cards-container">
                <div class="card">
                    <img src="/clinica/views/assets/images/banho.jpg"
                        alt="limpeza">
                    <div class="card-info">
                        <h3>Banho e limpeza</h3>
                        <p> Esses serviços incluem banho, tosa, limpeza de ouvidos, corte de unhas, limpeza dental e outros cuidados que visam manter a higiene e o bem-estar dos animais.
                            Os profissionais que realizam esses serviços são treinados para lidar com diferentes espécies e raças de animais, e utilizam produtos específicos e equipamentos adequados para cada tipo de pelo e pele. </p>
                       
                    </div>
                </div>
                <div class="card">
                    <img src="/clinica/views/assets/images/sangue01.jpg"
                        alt="cardiologico">
                    <div class="card-info">
                        <h3>Exames gerais</h3>
                        <p>Visamos avaliar a saúde do animal, identificar possíveis problemas e prevenir doenças.
                            Os exames gerais podem incluir uma avaliação física completa do animal.
                            Além disso, exames laboratoriais podem ser realizados para avaliar a saúde do animal de forma mais precisa.
                
                    </div>
                </div>
                <div class="card">
                    <img src="/clinica/views/assets/images/cirurgia.jpg" alt="cirurgia">
                    <div class="card-info">
                        <h3>Cirurgia</h3>
                        <p>Os serviços de cirurgias em animais são importantes para tratar doenças e lesões, melhorar a qualidade de vida e prolongar a vida do animal. Esses serviços podem incluir cirurgias eletivas e cirurgias de emergência.</p>
                      
                    </div>
                </div>
                <div class="card">
                    <img src="/clinica/views/assets/images/ava.jpg"
                        alt="ultrassom">
                    <div class="card-info">
                        <h3>Avaliação</h3>
                        <p>Esses serviços incluem avaliação da saúde e do comportamento do animal, avaliação nutricional e avaliação de condições de vida.</p>
                      
                    </div>
                </div>
                <div class="card">
                    <img src="/clinica/views/assets/images/adocao.png"
                        alt="visao">
                    <div class="card-info">
                        <h3>Adoção e cuidado</h3>
                        <p>Os serviços de adoção de animais são importantes para ajudar a reduzir o número de animais abandonados e proporcionar uma vida melhor para os animais que não têm um lar. Além disso, a adoção de um animal pode trazer muitos benefícios para o adotante, como a companhia, o amor e a responsabilidade de cuidar de um animal.</p>
                    
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.guarapuava.pr.gov.br/wp-content/uploads/2022/08/VACINA%C3%87%C3%83O2.jpg"
                        alt="vacina">
                    <div class="card-info">
                        <h3>Vacinas</h3>
                        <p> Esses serviços incluem a aplicação de vacinas para prevenir doenças comuns em animais, como a raiva, cinomose, parvovirose, hepatite canina, entre outras.</p>
                      
                    </div>
                </div>
            </div>

        </section>

        <section>
            <h2>Contato</h2>
            <p>Entre em contato conosco para marcar uma consulta ou para obter mais informações sobre nossos serviços:
            </p>
            <ul>
                <li>Telefone: (11) 3452-8922</li>
                <li>Email: Sharks's vet@clinica.com.br</li>
                <li>Endereço: Rua Alvarez, 366 - São Paulo/SP</li>
            </ul>
        </section>
    
    <footer>
        <p>&copy; 2023 Clínica Veterinária. Todos os direitos reservados.</p>
    </footer>
</body>
</html>