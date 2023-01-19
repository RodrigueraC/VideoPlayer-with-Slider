// --------------------------------------------------- Script Video --------------------------------------------

const container = document.querySelector(".Vcontainer"),
mainVideo = container.querySelector(".main-video"),
videoTimeline = container.querySelector(".video-timeline"),
progressBar = container.querySelector(".progress-bar"),
volumeBtn = container.querySelector(".volume i"),
volumeSlider = container.querySelector(".left input")
currentVidTime = container.querySelector(".current-time"),
videoDuration = container.querySelector(".video-duration"),
skipBackwards = container.querySelector(".skip-backwards i"),
skipForward = container.querySelector(".skip-forward i"),
playPauseBtn = container.querySelector(".play-pause i"),
speedBtn = container.querySelector(".playback-speed span"),
speedOptions = container.querySelector(".speed-options"),
fullscreenBtn = container.querySelector(".fullscreen i"),
picInPicBtn = container.querySelector(".pic-in-pic span");
let timer;

const hideControls = () => {
    if(mainVideo.paused) return; // se o video for pausado, retorna controles
    timer = setTimeout(() => { // seta o timer
        container.classList.remove("show-controls"); // remove o os controles
    }, 3000); // define o tempo pro controle sumir
}
hideControls(); // chama a função

const formatTime = time => {

    //pega segundos, minutos e horas
    let seconds = Math.floor(time % 60),
    minutes = Math.floor(time / 60) % 60,
    hours = Math.floor(time / 3600);

    // adiciona 0 na frente se o valor for menor que 10
    seconds = seconds < 10 ? `0${seconds}` : seconds;
    minutes = minutes < 10 ? `0${minutes}` : minutes;
    hours = hours < 10 ? `0${hours}` : hours;

    if(hours == 0){ // se hora for 0, retorna minutos e segundos, else, volta tudo
        return `${minutes}:${seconds}`;
    }
    return `${hours}:${minutes}:${seconds}`;
}

const draggableProgressBar = e => { 
    let timelineWidth = e.target.clientWidth; // pega o comprimento da timeline
    progressBar.style.width = `${e.offsetX}px`; // passa o offsetx como valor do comprimento da progress bar
    mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration; // da update no tempo atual do video
    currentVidTime.innerText = formatTime(mainVideo.currentTime); // passa o valor do tempo para o texto currentvidtime
}

container.addEventListener("mousemove", () => {
    container.classList.add("show-controls"); // adiciona show controls quando mexe no mouse
    clearTimeout(timer); // reseta timer
    hideControls(); // chama a função hide controls
});

skipBackwards.addEventListener("click", () => {
    mainVideo.currentTime -= 5; // tira 5 segundos do tempo atual de video
});

skipForward.addEventListener("click", () => {
    mainVideo.currentTime += 5; // adiciona 5 segundos do tempo atual de video
});

speedBtn.addEventListener("click", () => {
    speedOptions.classList.toggle("show") // mostra as opções de velocidade ao clicar no icone
});

speedOptions.querySelectorAll("li").forEach(option => {
    option.addEventListener("click", () => { // adiciona evento de click em todas as opções de velocidade
        mainVideo.playbackRate = option.dataset.speed; // passa o valor da opção dataset como valor de velocidade
        speedOptions.querySelector(".active").classList.remove("active"); // remove a classe active
        option.classList.add("active"); // adiciona a classe active na opção selecionada
    });
});

document.addEventListener("click", e => { // esconde a opção de velocidades ao clicar fora da caixa de velocidade
    if(e.target.tagName !== "SPAN" || e.target.className !== "material-symbols-rounded") {
        speedOptions.classList.remove("show")
    }
});

picInPicBtn.addEventListener("click", () => {
    mainVideo.requestPictureInPicture(); // muda o modo de video para pic in pic
});

fullscreenBtn.addEventListener("click", () => {
    container.classList.toggle("fullscreen"); // fica removendo e colocando a classe fullscreen caso clicado o icone
    if(document.fullscreenElement) { // se o video ja estiver em fullscreen
        fullscreenBtn.classList.replace("fa-compress", "fa-expand"); // troca os icones
        return document.exitFullscreen(); // sai do modo fullscreen e retorna ao normal
    }
    container.requestFullscreen(); // vai para o modo fullscreen
    fullscreenBtn.classList.replace("fa-expand", "fa-compress"); // troca os icones
});

volumeBtn.addEventListener("click", () => {
    if(volumeBtn.classList.contains("fa-volume-high")) { // se o icone do volume não for volume alto
        mainVideo.volume = 0.5; // passa 0.5 como valor do volume do video
        volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark"); // troca os icones
    } else {
        mainVideo.volume = 0.0; // passa o valor como 0.0 "mute"
        volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high"); // troca os icones
    }
});

volumeSlider.addEventListener("input", e => {
    mainVideo.volume = e.target.value;
    if(e.target.value == 0) {
        volumeBtn.classList.replace("fa-volume-high", "fa-volume-xmark"); // troca os icones
    } else {
        volumeBtn.classList.replace("fa-volume-xmark", "fa-volume-high"); // troca os icones
    }
    volumeSlider.value = mainVideo.volume; // da update no slider com base no volume do video
});

playPauseBtn.addEventListener("click", () => {
    mainVideo.paused ? mainVideo.play() : mainVideo.pause(); // se o video for pausado, play no video, else, pausa video
});

mainVideo.addEventListener("play", () => {
    playPauseBtn.classList.replace("fa-play", "fa-pause") // se o video estiver rodando, troca o icone para pause
});

mainVideo.addEventListener("pause", () => {
    playPauseBtn.classList.replace("fa-pause", "fa-play") // se o video estiver pausado, troca o icone para play
});

mainVideo.addEventListener("timeupdate", e => {
    let { currentTime, duration } = e.target; // pega o valor de currentTime e duration do video
    let percent = (currentTime / duration) * 100; // pega a porcentagem
    progressBar.style.width = `${percent}%`; // passa porcentagem como comprimento da progressBar
    currentVidTime.innerText = formatTime(currentTime); // passa o currentTime formatado para o texto de currentVidTime
});

mainVideo.addEventListener("loadeddata", e => {
    videoDuration.innerText = formatTime(e.target.duration); // passa o valor de duração do video como texto de videoDuration
});

videoTimeline.addEventListener("mousedown", () => { // chama a função draggableProgress em movimento do mouse
    videoTimeline.addEventListener("mousemove", draggableProgressBar);
});

container.addEventListener("mouseup", () => { // remove a função acionada quando ocorre o evento mouseup
    videoTimeline.removeEventListener("mousemove", draggableProgressBar);
});

videoTimeline.addEventListener("mousemove", e => {
    const progressTime = videoTimeline.querySelector("span");
    let offsetX = e.offsetX; // pega a posição do mouse no eixo X
    progressTime.style.left = `${offsetX}px`; // passa o valor offsetx como valor da esquerda da progresstime
    let timelineWidth = videoTimeline.clientWidth; // pega o comprimento da videoTimeline
    let percent = (e.offsetX / timelineWidth) * mainVideo.duration; // pega a porcentagem
    progressTime.innerText = formatTime(percent); // passa porcentagem como o texto de progressTime
});

videoTimeline.addEventListener("click", e => {
    let timelineWidth = e.target.clientWidth; // pega o comprimento da timeline do video
    mainVideo.currentTime = (e.offsetX / timelineWidth) * mainVideo.duration; // da update no tempo atual do video
});

// -------------------------------------------------------- Quebra de linha --------------------------------------------

// Tranding Product Slider-start
var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
});
// Tranding Product Slider-end