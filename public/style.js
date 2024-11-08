window.addEventListener("load", function() {
    var element = document.getElementById("blinking-element");
    if (element) {
        element.classList.add("blink");
        element.style.backgroundColor = 'rgba(255, 0, 0, 0.5)'; // Cor vermelha com 50% de opacidade
    } else {
        console.error("Elemento com ID 'blinking-element' não encontrado.");
    }
});
