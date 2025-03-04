<?php
include_once __DIR__ . '/assets/components/head.php';
?>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">IMC</a></li>
                <li><a href="#">Sobre</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="who_is_imc">
                <h1>Cálculo IMC</h1>
                <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.

                    O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.

                    Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</p>
            </div>
            <div class="box">
                <form class="form_area" action="">
                    <label for="altura">Altura</label>
                    <input class="input" id="altura_input" type="number" name="altura"  placeholder="1.60cm">
                    <label for="peso">Peso</label>
                    <input class="input" id="peso_input" type="number" name="peso"  placeholder="65kg">
                    <div id="submit_area">
                    <button id="calc_button" onclick="calcIMC()">Calcular</button> 
                    </div>
                    <div id="Area_Resultado">
                    <span id="Calc_resultado"></span>
                    </div>
                </form>
            </div>
            <div class="imc_informations">
                <table>
                    <thead>

                        <th>IMC</th>
                        <th>Classificação</th>
                        <th>Obesidade (grau)</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Menor que 18,5</td>
                            <td>Magreza</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Entre 18,5 e 24,9</td>
                            <td>Normal</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Entre 25,0 e 29,9</td>
                            <td>Sobrepeso</td>
                            <td>I</td>
                        </tr>
                        <tr>
                            <td>Entre 30,0 e 39,9</td>
                            <td>Obesidade</td>
                            <td>II</td>
                        </tr>
                        <tr>
                            <td>Maior que 40,0</td>
                            <td>Obesidade Grave</td>
                            <td>III</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </main>
    <footer>

    </footer>
</body>
<script src="assets/Script/Calc_IMC.js"></script>
</html>