<?php
	include_once("config.php");
	include_once("conection.php");
	//$logged = $_SESSION['logged'] ?? NULL;

	//if(!logged) die('Não está logado, realize o login caso não esteja cadastrado se cadastre.');
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Saude e Alimentação</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<div color="green">
				<h2>Saude e Alimentação</h2>
				</div>
				<ul id="navigation">
					<li class="selected">
						<a href="index.php">Home</a>
					</li>
					<li class="menu">
						<a href="about.php">Sobre</a>
					</li>
					<li class="menu">
						<a href="imc.php">Calculo imc</a>
					</li>
					<li class="selected">
						<a href="relatorio.php">Relatorio imc</a>
					</li>
			</div>
		</div>
		<div id="body" class="home">
			<div class="header">
				<img src="images/telainicio.jfif" alt="">
				<div>
					<a href="imc.php">Calcular imc</a>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<h1>Dicas de Alimentação</h1>
						<p>Para que o ser humano cresça de forma saudável, é necessária uma alimentação nutritiva e variada.
							Os alimentos que são considerados excelentes fontes de energia, auxiliam em certas ações que nosso corpo realiza como: estudar, trabalhar, brincar e, principalmente, praticar exercícios físicos, sem essa energia o corpo não teria disposição para realizar ações como essas que foram citadas..</p><br>

							<p>Para adquirir uma boa saúde é fundamental:</p><br>

							<p>
							• Alimentar-se em períodos curtos de 3 em 3 horas,
							• Comer alimentos frescos, naturais e variados,
							• Ao ingerir alimentos crus, lavá-los muito bem,
							• Conservar os alimentos em local fresco e limpo,
							• Mastigar bem os alimentos.
							</p><br>

							<p>Ressalta-se que cada alimento tem o seu valor nutritivo, as frutas, por exemplo, acumulam grande quantidade de água e sais minerais, principalmente ferro, cálcio, sódio e potássio. O ferro auxilia na oxigenação do organismo ajudando entre outros, o desempenho das funções cerebrais com exatidão. As frutas também fornecem calorias, fibras e vários outros nutrientes que regulam outros mecanismos e previnem doenças degenerativas, tais como: câncer de estômago, esôfago, intestino e pulmão, além de doenças cardiovasculares.
							Os nutricionistas recomendam a ingestão diária de pelo menos cinco porções de frutas, para compor uma dieta balanceada, paralelo a alimentos como hortaliças, carnes, e derivados do leite.
							</p><br>
								
							<p>• Doenças degenerativas: são enfermidades (doenças) que causam transformações negativas e progressivas em quem é afetado por elas.
							</p><br>

							<p>• Doenças cardiovasculares: são doenças referentes ao coração e circulação do sangue.</p>
					</div>
					<div>
						<h1>Obesidade: Uma doença causada pela má alimentação</h1>
						<p>A obesidade é facilmente percebida quando uma pessoa come mais do que precisa e este excesso é armazenado em forma de gordura. Para ficar mais claro, quando as calorias que entram no corpo da pessoa forem maiores do que as calorias que saem, ela, consequentemente, engorda.<br>

						Nas múltiplas etapas de desenvolvimento, o organismo é resultado de diversas interações entre a genética da pessoa e o ambiente em que ela está inserida.</p>
						<br>

						<p>Dessa maneira, uma criança cujos pais são obesos tem forte tendência de se tornar obesa, se não tomar os devidos cuidados. Ou quando a pessoa se torna sedentária, ou seja, deixa de praticar exercícios físicos, também entra para o grupo de pessoas com alto risco de doenças ocasionadas pela má nutrição.

						A obesidade é causada por uma série de fatores que estimulam a ingestão de alimentos que contribuem para o aparecimento de doenças como diabetes, cálculos biliares, hipertensão, arteriosclerose, problemas nos rins, coluna, articulações e também alguns tipos de câncer.

						Portanto, para aquelas pessoas que se alimentam com comidas congeladas, pré-fabricadas, muitos refrigerantes e fast food, é necessário uma dieta balanceada e cheia de nutrientes que façam com que o corpo funcione bem. Além disso, o acompanhamento médico é essencial para que a dieta seja bem executada e tenha resultados positivos.</p>
					</div>
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<h1>Home</h1>
						</li>
						<li>
							<h1>Sobre</h1>
						</li>
						<li>
							<h1>IMC</h1>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<p>Saude e Alimentação.</p>
			</div>
		</div>
	</div>
</body>
</html>
