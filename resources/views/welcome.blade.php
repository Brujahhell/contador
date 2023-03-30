<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>CONTADOR</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="screen" id="color">
</head>

<body class="page">
<div class="section1">
    <h1 class="titulo"> CONTADOR - <input class="titulo" type="text" id="nome" placeholder="NOME"> </h1>
</div>
    <div class="linha">
        <div class="coluna-33">
            <h1>FICHAS FEITAS MANHÃ </h1>
            <div class="linha">
            <button id="menosmanha" class="coluna-33 bt1">-</button><h1 id="displaymanha" class="coluna-33 boxdisplay">0</h1><button id="maismanha" class="coluna-33 bt2">+</button>
            </div>
        </div>
        <div class="coluna-33">
            <h1>FICHAS PULADAS MANHÃ</h1>
            <div class="linha">
                <button id="manhapular1" class="coluna-33 bt1">-</button><h1 id="displaypular" class="coluna-33 boxdisplay">0</h1><button id="manhapular" class="coluna-33 bt2">+</button>
            </div>
        </div>
        <div class="coluna-33">
            <h1>FICHAS ARQUIVADAS MANHÃ</h1>
            <div class="linha">
                <button id="manhaarquivar1" class="coluna-33 bt1">-</button><h1 id="displayarquivar" class="coluna-33 boxdisplay">0</h1><button id="manhaarquivar" class="coluna-33 bt2">+</button>
            </div>
        </div>
    </div>
<div class="section1">
</div>
    <div class="linha">
        <div class="coluna-33">
            <h1>FICHAS FEITAS TARDE </h1>
            <div class="linha">
                <button id="menostarde" class="coluna-33 bt1">-</button><h1 id="displaytarde" class="coluna-33 boxdisplay">0</h1><button id="maistarde" class="coluna-33 bt2">+</button>
            </div>
        </div>
        <div class="coluna-33">
            <h1>FICHAS PULADAS TARDE</h1>
            <div class="linha">
                <button id="tardepular1" class="coluna-33 bt1">-</button><h1 id="displaypulartarde" class="coluna-33 boxdisplay">0</h1><button id="tardepular" class="coluna-33 bt2">+</button>
            </div>
        </div>
        <div class="coluna-33">
            <h1>FICHAS ARQUIVADAS TARDE</h1>
            <div class="linha">
                <button id="tardearquivarmenos" class="coluna-33 bt1">-</button><h1 id="displayarquivartarde" class="coluna-33 boxdisplay">0</h1><button id="tardearquivarmais" class="coluna-33 bt2">+</button>
            </div>
        </div>
    </div>
    <div class="section1">
    </div>
    <div class="linha">
        <div class="coluna-33">
            <h1> TOTAL MANHÃ </h1>
            <h1 id="totalManha" class="coluna-33 boxdisplay" style="height: 100px;">0</h1>
        </div>
        <div class="coluna-33">
            <h1> TOTAL TARDE </h1>
            <h1 id="totalTarde" class="coluna-33 boxdisplay" style="height: 100px;">0</h1>
        </div>
        <div class="coluna-33">
            <h1> TOTAL DIA </h1>
            <h1 id="totalDia" class="coluna-33 boxdisplay" style="height: 100px;">0</h1>
            <button id="save-button">Salvar valor</button>
        </div>
    </div>
</body>
<script type="text/javascript">

    //CONTADOR MANHA//
    var contadorManha = 0;
    var maismanha = document.getElementById("maismanha");
    var menosmanha = document.getElementById("menosmanha");
    var displaymanha = document.getElementById("displaymanha");

    var contadorPuladasManha = 0;
    var manhapular = document.getElementById("manhapular");
    var manhapular1 = document.getElementById("manhapular1");
    var displaypular = document.getElementById("displaypular");

    var contadorArquivadasManha = 0;
    var manhaarquivar = document.getElementById("manhaarquivar");
    var manhaarquivar1 = document.getElementById("manhaarquivar1");
    var displayarquivar = document.getElementById("displayarquivar");

    var totalManha = document.getElementById("totalManha");


    //CONTADOR TARDE//
    var contadorTarde = 0;
    var maistarde = document.getElementById("maistarde");
    var menostarde = document.getElementById("menostarde");
    var displaytarde = document.getElementById("displaytarde");

    var contadorPuladasTarde = 0;
    var tardepular = document.getElementById("tardepular");
    var tardepular1 = document.getElementById("tardepular1");
    var displaypulartarde = document.getElementById("displaypulartarde");

    var contadorArquivadasTarde = 0;
    var tardearquivarmais = document.getElementById("tardearquivarmais");
    var tardearquivarmenos = document.getElementById("tardearquivarmenos");
    var displayarquivartarde = document.getElementById("displayarquivartarde");

    var totalTarde = document.getElementById("totalTarde");

    //CONTADOR MANHA//
    maismanha.onclick = function () {
        contadorManha++;
        atualizaItens();
    }
    menosmanha.onclick = function () {
        contadorManha--;
        atualizaItens();
    }

    manhapular.onclick = function () {
        contadorPuladasManha++;
        atualizaItens();
    }
    manhapular1.onclick = function () {
        contadorPuladasManha--;
        atualizaItens();
    }

    manhaarquivar.onclick = function () {
        contadorArquivadasManha++;
        atualizaItens();
    }
    manhaarquivar1.onclick = function () {
        contadorArquivadasManha--;
        atualizaItens();
    }


    //CONTADOR TARDE//
    maistarde.onclick = function () {
        contadorTarde++;
        atualizaItens();
    }
    menostarde.onclick = function () {
        contadorTarde--;
        atualizaItens();
    }

    tardepular.onclick = function () {
        contadorPuladasTarde++;
        atualizaItens();
    }
    tardepular1.onclick = function () {
        contadorPuladasTarde--;
        atualizaItens();
    }

    tardearquivarmais.onclick = function () {
        contadorArquivadasTarde++;
        atualizaItens();
    }
    tardearquivarmenos.onclick = function () {
        contadorArquivadasTarde--;
        atualizaItens();
    }

    function atualizaItens(){
        displaymanha.innerHTML = contadorManha;
        displaypular.innerHTML = contadorPuladasManha;
        displayarquivar.innerHTML = contadorArquivadasManha;
        displaytarde.innerHTML = contadorTarde;
        displaypulartarde.innerHTML = contadorPuladasTarde;
        displayarquivartarde.innerHTML = contadorArquivadasTarde;
        totalManha.innerHTML = (contadorManha*10) - contadorPuladasManha - contadorArquivadasManha;
        totalTarde.innerHTML = (contadorTarde*10) - contadorPuladasTarde - contadorArquivadasTarde;
        totalDia.innerHTML = (contadorManha*10) + (contadorTarde*10) - contadorPuladasManha - contadorArquivadasManha - contadorPuladasTarde - contadorArquivadasTarde
    }


    // código para salvar arquivo em txt
    const salvarBtn = document.getElementById('save-button');
    const display = document.getElementById('totalDia');
    const nome = document.getElementById('nome')

    salvarBtn.addEventListener('click', () => {
        const valor = display.textContent; // ou display.innerHTML, dependendo do caso

        var display1Valor = document.getElementById('totalManha').innerText;
        var display2Valor = document.getElementById('totalTarde').innerText;
        var display1 = document.getElementById('totalDia').innerText;

        // Criar a frase com os valores
        var frase = `Os valores dos displays são: ${display1Valor} pela Manhã e ${display2Valor} pela Tarde, totalizando ${display1}`;

        // Criar um objeto Blob com a frase
        const blob = new Blob([frase], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);

        // Obtém a data atual
        var data = new Date();
        var dia = data.getDate();
        var mes = data.getMonth() + 1; // Adiciona 1 ao mês, pois começa em 0
        var ano = data.getFullYear();

        var nomeArquivo = document.getElementById("nome").value;



        // Formata a data no formato DD/MM/AAAA
        var dataFormatada = dia + "/" + mes + "/" + ano;

        const a = document.createElement('a');
        a.href = url;
        a.download = nomeArquivo + "-" + dataFormatada + ".txt";
        a.click();
    });

</script>
</html>
