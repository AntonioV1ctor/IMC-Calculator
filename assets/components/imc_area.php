
<div class="box">
    <form class="form_area" action="" method="post">
        <!-- <label for="altura">Altura</label>
        <input class="input" id="altura_input" type="number" name="altura" id="altura_input" placeholder="160cm"> -->
        <h1>Calculadora de IMC</h1>
        <div class="coolinput">
            <label class="text" for="input">Altura:</label>
            <input required class="input" name="input" placeholder="1.60" type="text" id="altura" maxlength="4" minlength="4" />
        </div>

        <script src="assets/js/heigthMASK.js"></script>


        <!-- <label for="peso">Peso</label>
        <input class="input" id="peso_input" type="number" name="peso" id="peso_input" placeholder="65kg"> -->
        <!-- From Uiverse.io by aunis1616 -->
        <div class="coolinput">
            <label class="text" for="input">Peso:</label>
            <input required class="input" name="input" placeholder="65Kg" type="text" minlength="2" maxlength="3" />
        </div>

        <div id="submit_area">
            <button class="arc-btn-retro">
                Calcular
            </button>
        </div>
    </form>
</div>