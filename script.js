document.querySelectorAll('.copy-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        const contractAddress = '7bamnUSVNGj1XNece32BiFb12FmhW5AWdBz9qc34pump';
        navigator.clipboard.writeText(contractAddress)
            .then(() => {
                const span = this.querySelector('span');
                span.innerText = 'COPIED';
                setTimeout(() => {
                    span.innerText = 'COPY CA';
                }, 2000);
            })
            .catch(err => {
                console.error('Failed to copy: ', err);
            });
    });
});


//BUY & PHANTOM BUTTONS 
document.querySelectorAll('.buy-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        window.open('https://dexscreener.com/solana/64v6nebcsnlckjfvafqpui9g4gbmsyeoquklwrqo7wzx', '_blank');
    });
});

document.getElementById('phantom-btn').addEventListener('click', function(event) {
    event.preventDefault(); // Evita que cualquier comportamiento predeterminado del botón ocurra
    window.open('https://phantom.app/', '_blank'); // Abre el enlace de Phantom en una nueva pestaña
});

//MARQUEE
const marqueeContent = document.querySelector('.marquee-content');

const originalContent = marqueeContent.innerHTML;

while (marqueeContent.scrollWidth < window.innerWidth * 2) {
    marqueeContent.innerHTML += originalContent;
}

document.addEventListener("DOMContentLoaded", function () {
    const playButton = document.getElementById("play-button");
    const playIcon = document.getElementById("play-icon");
    const pauseIcon = document.getElementById("pause-icon");
    const anthemAudio = document.getElementById("anthem-audio");

    anthemAudio.loop = true;

    playButton.addEventListener("click", function () {
        if (anthemAudio.paused) {
            anthemAudio.play().catch(function (error) {
                console.error("No se pudo iniciar la reproducción:", error);
            });
            playIcon.style.display = "none";
            pauseIcon.style.display = "block";
            playButton.setAttribute("aria-label", "Pause Anthem");
        } else {
            anthemAudio.pause();
            playIcon.style.display = "block";
            pauseIcon.style.display = "none";
            playButton.setAttribute("aria-label", "Play Anthem");
        }
    });
    anthemAudio.addEventListener("ended", function () {
        playIcon.style.display = "block";
        pauseIcon.style.display = "none";
        playButton.setAttribute("aria-label", "Play Anthem");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const meetRonaldBtn = document.getElementById("meet-ronald-btn");
    if (meetRonaldBtn) {
        meetRonaldBtn.onclick = function () {
            window.open('https://x.com/aiRonaldOrpe', '_blank');
        };
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    const isWebView =
        userAgent.includes("WebView") || // iOS WebView
        userAgent.includes("wv") || // Android WebView
        (userAgent.includes("Android") && !userAgent.includes("Chrome")); // Android stock browser

    if (isWebView) {
        document.body.classList.add("webview-mode");
    }
});

function reloadWithoutCache() {
    const url = window.location.href.split('?')[0]; 
    window.location.href = `${url}?nocache=${new Date().getTime()}`;
}

document.getElementById('azbit-btn').addEventListener('click', function() {
    window.open('https://azbit.com/exchange/ORPE_USDT', '_blank');
});

document.querySelector(".whitepaper-btn").addEventListener("click", function() {
    window.open("https://orange-pepe.gitbook.io/orange-pepe-whitepaper", "_blank", "noopener,noreferrer");
});
