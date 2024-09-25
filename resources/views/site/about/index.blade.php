@extends('layout.site')
@section('content')
    <div class="bg-primary  ">
        <div class="bg-base-200 flex justify-center px-4 py-16 ">
            <div class="card bg-base-100 w-96 shadow-xl join">
                <figure>
                    <canvas id="matrix" class="h-32 w-96 bg-cover bg-center join-item"></canvas>
                </figure>
                <div class="card-body join-item">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
                <div class="divider m-0"></div>

                <div class="card-body join-item">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Pegando o elemento do Canvas
        const c = document.getElementById("matrix");

        // Definindo o seu contexto
        const ctx = c.getContext("2d");

        // definindo o canvas com tamanho máximo da tela
        c.height = window.innerHeight;
        c.width = window.innerWidth;

        // letras do Matrix Rain
        // ver mais em: https://bit.ly/3yFJoU3
        const letters = ["日", "ﾊ", "ﾐ", "ﾋ", "ｰ", "ｳ", "ｼ", "ﾅ", "ﾓ", "ﾆ", "ｻ", "ﾜ", "ﾂ", "ｵ", "ﾘ", "ｱ", "ﾎ", "ﾃ", "ﾏ", "ｹ",
            "ﾒ", "ｴ", "ｶ", "ｷ", "ﾑ", "ﾕ", "ﾗ", "ｾ", "ﾈ", "ｽ", "ﾀ", "ﾇ", "ﾍ", ":", "・", ".", "=", "*", "+", "-", "<",
            ">", "¦", "｜", "ﾘ"
        ];

        const fontSize = 12;

        // definindo quantas colunas serão necessárias pelo tamanho da tela e fonte
        const columns = c.width / fontSize;

        // criando um array para cada gota, sempre iniciando na posição do y=1
        const drops = new Array(Math.floor(columns)).fill(1);

        function draw() {
            // preenchendo a tela toda de preto com opacidade
            // esse truque da opacidade será útil para o efeito 
            // das letras sumindo aos poucos
            ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
            ctx.fillRect(0, 0, c.width, c.height);

            // definindo a cor e estilo da fonte
            ctx.fillStyle = "#0F0";
            ctx.font = `${fontSize}px arial`;

            for (let i = 0; i < drops.length; i++) {
                // pegando uma letra randomicamente no nosso array
                const text = letters[Math.floor(Math.random() * letters.length)];

                // escrevendo na tela
                ctx.fillText(text, i * fontSize, drops[i] * fontSize);

                // resetando a posição da gota ao chegar no fim
                if (drops[i] * fontSize > c.height && Math.random() > 0.95) {
                    drops[i] = 0;
                }

                // movendo as gotas no eixo y
                drops[i]++;
            }

            // chamada recursiva para animar quadro a quadro
            window.requestAnimationFrame(draw);
        }

        // chamando a função criada
        draw()
    </script>
@endsection
