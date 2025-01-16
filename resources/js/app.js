import './bootstrap';
import Inputmask from "inputmask";

document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.querySelector("#phone");
    const im = new Inputmask("(99) 99999-9999");
    im.mask(phoneInput);
});


// JavaScript para alternar entre os modos claro e escuro
    document.getElementById('toggle-dark-mode').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    this.textContent = document.body.classList.contains('dark-mode') ? 'Modo Claro' : 'Modo Escuro';
});
        

document.addEventListener("DOMContentLoaded", function () {
    const element = document.getElementById("animated-title");
    const text = element.textContent.trim(); // Obtém o texto dinâmico do Blade
    element.textContent = ""; // Limpa o conteúdo antes de adicionar os spans

    function animateWords() {
        const words = text.split(" "); // Divide o texto em palavras
        words.forEach((word, index) => {
            const wordSpan = document.createElement("span");
            wordSpan.style.display = "inline-block"; // Mantém o espaço entre palavras
            wordSpan.style.marginRight = "10px"; // Espaçamento entre palavras
            wordSpan.style.animationDelay = `${index * 0.5}s`; // Controle de atraso para cada palavra

            // Adiciona as letras de cada palavra
            for (let i = 0; i < word.length; i++) {
                const letterSpan = document.createElement("span");
                letterSpan.textContent = word[i];
                letterSpan.style.display = "inline-block";
                letterSpan.style.opacity = "0";
                letterSpan.style.transform = "translateY(20px)";
                letterSpan.style.animation = "fadeIn 0.5s ease forwards";
                letterSpan.style.animationDelay = `${i * 0.1 + index * 0.5}s`; // Atraso para as letras dentro da palavra
                wordSpan.appendChild(letterSpan);
            }

            element.appendChild(wordSpan);
        });

        // Após a animação terminar, reinicia
        setTimeout(() => {
            element.textContent = ""; // Limpa o conteúdo para reiniciar
            animateWords(); // Chama novamente a função de animação
        }, (text.length * 0.1 + words.length * 0.5) * 1000); // Ajuste do tempo para aguardar o final da animação
    }

    animateWords();
});

