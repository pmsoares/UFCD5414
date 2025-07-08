const banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
let bannerAtual = 0;
let timer = setInterval(trocaBanner, 4000);
const img = document.querySelector(".destaques img");
const controlo = document.querySelector(".pause, .play");

function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % banners.length;
    img.src = banners[bannerAtual];
}

controlo.addEventListener("click", (e) => {
    e.preventDefault();

    if (controlo.classList.contains("pause")) {
        clearInterval(timer);
        controlo.classList.replace("pause", "play");
    } else {
        timer = setInterval(trocaBanner, 4000);
        controlo.classList.replace("play", "pause");
    }
});

$(".novidades, .mais-vendidos").addClass("painel-compacto");

$(".novidades button").click(function () {
    $(".novidades").removeClass("painel-compacto");
});

$(".mais-vendidos button").click(function () {
    $(".mais-vendidos").removeClass("painel-compacto");
});