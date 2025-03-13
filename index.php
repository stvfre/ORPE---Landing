<?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: 0");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ORPE - The First Orange PEPE</title>
    <meta property="og:title" content="$ORPE - ORANGE PEPE" />
    <meta property="og:description" content="The First Orange Pepe - Community Takeover." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,800..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/resources/favicon.ico">
    
</head>
<body>
    <?php // get_header(); ?> 
<header>
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="#about-us">ABOUT ORPE</a></li>
            <li><a href="#how-to-buy">HOW TO BUY</a></li>
            <!-- <li><a href="#social-section">SOCIALS</a></li> -->
            <li><a href="#orpenomics-section">ORPENOMICS</a></li>
            <li><a href="#ai-agent-section">AI AGENT 🤖</a></li>
            <li><a href="#ongoing-projects">PROJECTS 🚀</a></li>
            <li><a href="https://orange-pepe.gitbook.io/orange-pepe-whitepaper" target="_blank" rel="noopener noreferrer">ORANGE-PAPER 📄</a></li>
            <li><a href="https://orange-pepe.gitbook.io/orange-pepe-whitepaper/orpe-roadmap" target="_blank" rel="noopener noreferrer">ROADMAP 🛣️</a></li>
        </ul>
    </nav>
</header>

<main>
<section id="main-section">
    <div class="main-content">
        <img src="/resources/pepepng-1.png" alt="" id="orpe-main-logo">
        <div id="orpe-text" class="orpe-text">
            <h1><span id="dolar-span">$</span>ORPE</h1>
            <h2>THE ORANGE PEPE.</h2>
            <button class="btn buy-btn">BUY $ORPE</button>
            <div class="socials">
                <a href="https://x.com/OrangePepeCTO" target="_blank" rel="noopener noreferrer">
                    <img src="/resources/x-logo-2.png" alt="Twitter">Twitter
                </a>
                <a href="https://t.me/OrangePepeCTO" target="_blank" rel="noopener noreferrer">
                    <img src="/resources/tg-logo.webp" alt="Telegram">Telegram
                </a>
                <a href="https://dexscreener.com/solana/64v6nebcsnlckjfvafqpui9g4gbmsyeoquklwrqo7wzx" target="_blank" rel="noopener noreferrer">
                    <img src="/resources/dex-logo.png" alt="Dexscreener">Dexscreener
                </a>
                <a href="https://www.geckoterminal.com/es/solana/pools/64v6nebcsnLcKJFvafqpui9g4gBmSYEoQukLWrqo7wzx" target="_blank" rel="noopener noreferrer">
                    <img src="/resources/geckoterminal_icon-2.png" alt="Gecko Terminal">GeckoTerminal
                </a>
            </div>
            <div class="copy-btn-div">
                <p>CA: 7bamnUSVNGj1XNece32BiFb12FmhW5AWdBz9qc34pump</p>
                <button class="copy-btn">
                    <img src="/resources/copy-icon-2.png" alt="">
                    <span>COPY CA</span>
                </button>
            </div>
        </div>
    </div>
    <div class="orpe-anthem-audio">
        <h6>ORPE NATIONAL ANTHEM</h6>
        <button id="play-button" aria-label="Play Anthem">
            <!-- Play Icon -->
            <svg id="play-icon" width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.25 7.025C18.25 4.5992 15.4002 3.29512 13.5645 4.8809L8.84783 8.95536C8.33317 9.39995 7.67576 9.64459 6.99567 9.64459L4.79164 9.64461C2.83564 9.64462 1.25 11.2303 1.25 13.1863V17.8513C1.25 19.8073 2.83566 21.393 4.79166 21.393H6.99571C7.67582 21.393 8.33323 21.6376 8.8479 22.0822L13.5645 26.1566C15.4002 27.7424 18.25 26.4383 18.25 24.0125V15.5188V7.025Z" fill="currentColor" stroke="currentColor" stroke-width="2.125"></path>
            </svg>
            <!-- Mute Icon -->
            <svg id="pause-icon" width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:none;">
                <path d="M18.25 7.025C18.25 4.5992 15.4002 3.29512 13.5645 4.8809L8.84783 8.95536C8.33317 9.39995 7.67576 9.64459 6.99567 9.64459L4.79164 9.64461C2.83564 9.64462 1.25 11.2303 1.25 13.1863V17.8513C1.25 19.8073 2.83566 21.393 4.79166 21.393H6.99571C7.67582 21.393 8.33323 21.6376 8.8479 22.0822L13.5645 26.1566C15.4002 27.7424 18.25 26.4383 18.25 24.0125V15.5188V7.025Z" fill="currentColor" stroke="currentColor" stroke-width="2.125"></path>
                <line x1="4" y1="27" x2="26" y2="5" stroke="currentColor" stroke-width="2.125" stroke-linecap="round"></line>
            </svg>
        </button>
        <audio id="anthem-audio" src="/resources/LANDR-Orange-Jeet-Slayer-intro-Open-High.mp3"></audio>
    </div>
    <div class="marquee">
        <div class="marquee-content" data-text="$ORPE #TheOrangeRevolution">
            $ORPE #TheOrangeRevolution&nbsp;&nbsp;&nbsp;$ORPE #MakeMemesGreatAgain
        </div>
    </div>
</section>

<section class="about-us" id="about-us">
    <div class="about-us-image">
        <img src="/resources/pepespodium.jpg" alt="About ORPE Image">
    </div>
    <div class="about-us-content">
        <h3>We are the orange revolution 🔥</h3>
        <p>Orange Pepe (<strong>$ORPE</strong>), the Orange version of <strong>PEPE</strong>, launched in <strong>November 2024</strong>. Inspired by <strong>Bitcoin</strong>, our project embraces the color <strong>Orange</strong> as a symbol of <strong>creativity</strong>, <strong>success</strong>, <strong>freedom</strong>, and <strong>change</strong>—values that define our mission and drive our community. <strong>$ORPE</strong> is more than just a memecoin; it’s a movement to revolutionize the space with <strong>real-world utility</strong>.</p>
        <p>
            Join <strong>$ORPE</strong> in revolutionizing meme coins and <strong>making memes great again</strong>.  
            Together, we’ll write the next chapter of the <strong>Orange Pepe saga</strong>.
        </p>
        <button class="btn whitepaper-btn">CHECK ORANGE-PAPER 📄</button>
    </div>
</section>

<section class="ai-agent-section about-us" id="ai-agent-section">
    <div class="ai-agent-content about-us-content">
        <h3>Our A.I Agent:<br>Ronald J. Orpe 🤖 🐸</h3>
        <p>
            <strong>AI Agents are reshaping the crypto market</strong>, delivering a decisive <strong>competitive edge</strong> with  
            <strong>real-time insights</strong> and strategic predictions. As the next bull run looms, embracing this technology is key to staying ahead.  
        </p>
        <p>
            <strong>Ronald J. Orpe</strong>, our visionary AI Agent, is more than just a tool—he’s the <strong>first AI Agent in the Pepeverse</strong>.
        </p>
        <p>
            Inspired by a Donald Trump alter-ego, Ronald J. Orpe combines charisma and analytical prowess to champion our mission:  
            <strong>draining the swamp of shitcoins</strong> and establishing <strong>$ORPE as the Bitcoin of meme coins</strong>  
            through the groundbreaking principles of <strong>#Orpenomics</strong>.
        </p>
        <button class="btn" id="meet-ronald-btn">MEET RONALD</button>
    </div>
    <div class="about-us-image">
        <img src="/resources/IMG_20250113_103459_717-1-2.png" alt="Ronald J. Orpe Image - Our AI Agent">
    </div>
</section>

<section class="first-cex-section" id="first-cex-section">
    <div class="first-cex-image">
        <img src="/resources/GgSxSk2WwAAcBQq.jpeg" alt="Azbit ORPE Listing - Orange Pepe">
    </div>
    <div class="first-cex-content">
        <h3>Our First CEX:<br>AZBIT</h3>
        <p>We are excited to announce that on <strong>January 2nd</strong>, we were listed on our first <strong>CEX</strong>: <strong>AZBIT</strong>, ranked in the top <strong>#50</strong> by trading volume on <strong>CoinMarketCap</strong> and <strong>#28</strong> on <strong>CoinGecko</strong>, with a daily trading volume of <strong>$744 million</strong> and a trust score of <strong>8/10</strong>. This listing marks an important milestone, and as part of our strategic advisory and support partnership with AZBIT, we’ve secured their expertise to guide <strong>$ORPE</strong> in its next steps, further strengthening the trust in its potential.</p>
        <button class="btn" id="azbit-btn">TRADE ON AZBIT</button>
    </div>
</section>

<section class="how-to-buy" id="how-to-buy">
    <h2>HOW TO BUY $ORPE</h2>
    <div class="how-to-buy-content">
        <div class="cards">
            <div class="card">
                <h4>DOWNLOAD PHANTOM WALLET</h4>
                <img src="/resources/phantom-2.png" alt="" id="phantom-logo">
                <p>Download and install the Phantom Wallet either from the app store on your phone or as a browser extension for desktop.</p>
                <button class="btn" id="phantom-btn">GET PHANTOM WALLET</button>
            </div>
            <div class="card">
                <h4>BUY SOME SOLANA</h4>
                <img src="/resources/solana.png" alt="">
                <p>Purchase $SOL from an exchange or bridge $SOL and send it to your Phantom wallet.</p>
            </div>
            <div class="card">
                <h4>BUY $ORPE</h4>
                <img src="/resources/pepepng-1.png" alt="">
                <p>In Phantom Wallet or Azbit CEX, paste the $ORPE contract address directly into the search bar. Once $ORPE appears, select it and swap your $SOL for $ORPE.</p>    
                <button class="copy-btn">
                    <img src="/resources/copy-icon-2.png" alt="">
                    <span>COPY CA</span>
                </button>            
                <button class="btn buy-btn">BUY ORPE</button>
            </div>
            <div class="card">
                <h4>ADD $ORPE TO YOUR WALLET</h4>
                <img src="/resources/wallet.png" alt="">
                <p>Add $ORPE contract address to your Phantom Wallet for your $ORPE tokens to show.</p>
            </div>
        </div>
    </div>
</section>

<section id="ongoing-projects" class="projects-section">
    <h2>ONGOING PROJECTS 🚀</h2>
    <p class="projects-intro" id="projects-intro">At ORPE, we’re constantly innovating and pushing the boundaries of what’s possible. Here’s a sneak peek at some of our exciting ongoing projects:</p>
    <div class="project-item">
        <h3>1️⃣ ORPE Podcast: Connecting Communities 🎙️</h3>
        <p>Our upcoming podcast, hosted by Orange Pepe, aims to bring the community closer together. It will serve as a platform to share updates, engage with holders, and feature fun and chill sessions with industry experts—other meme coins—through engaging interviews. This unique approach further establishes ORPE’s presence in the crypto world and strengthens its connection with the broader meme and crypto communities.</p>
    </div>

    <div class="project-item">
        <h3>2️⃣ Play-to-Win Games Development 🎮</h3>
        <p>The Pepeverse fun is leveling up! We’re developing AMAZING play-to-win ORPE games where you can play, compete, and win. Hit the weekly high-scores to earn exciting rewards in ORPE, all while enjoying immersive gameplay and community competition.</p>
    </div>

    <div class="project-item">
        <h3>3️⃣ Exclusive E-commerce for ORPE Holders 🛒</h3>
        <p>We’re building a unique e-commerce platform where you can purchase ORPE-themed wallpapers, exclusive merchandise on demand (T-shirts, iPhone cases, mugs), and much more. This marketplace will be exclusively accessible to ORPE holders, with all transactions made using ORPE as the sole payment method. This initiative opens new avenues for potential growth and market adoption, positioning ORPE as a utility token with real-world applications.</p>
    </div>
</section>

<section id="social-section" class="social-section">
    <h2>JOIN THE ORANGE REVOLUTION</h2>
    <p>Join $ORPE in revolutionizing meme coins and making meme great again. Together, we’ll write the next chapter of the Orange Pepe saga.</p>
    <p> Follow for exclusive updates, memes, and market insights that’ll keep you ahead of the game!</p>
    <div class="socials">
        <a href="https://x.com/OrangePepeCTO" target="_blank" rel="noopener noreferrer">
            <img src="/resources/x-logo-2.png" alt="Twitter">Twitter
        </a>
        <a href="https://t.me/OrangePepeCTO" target="_blank" rel="noopener noreferrer">
            <img src="/resources/tg-logo.webp" alt="Telegram">Telegram
        </a>
        <a href="https://dexscreener.com/solana/64v6nebcsnlckjfvafqpui9g4gbmsyeoquklwrqo7wzx" target="_blank" rel="noopener noreferrer">
            <img src="/resources/dex-logo.png" alt="Dexscreener">Dexscreener
        </a>
        <a href="https://www.geckoterminal.com/es/solana/pools/64v6nebcsnLcKJFvafqpui9g4gBmSYEoQukLWrqo7wzx" target="_blank" rel="noopener noreferrer">
            <img src="/resources/geckoterminal_icon-2.png" alt="Gecko Terminal">GeckoTerminal
        </a>
    </div>
</section>
<section id="orpenomics-section">
    <h2>ORPENOMICS</h2>
    <div class="orpenomics-content">
        <div class="orpenomics-image">
            <img src="/resources/god-pepe.jpg" alt="ORPENOMICS Image">
        </div>
        <div class="orpenomics-details">
            <div class="orpenomics-cards">
                <div class="card">
                    <h4>COMMUNITY TAKEOVER</h4>
                    <p>OWNERSHIP REVOKED</p>
                </div>
                <div class="card">
                    <h4>BUY/SELL TAX: 0%</h4>
                    <p>SUPPLY: 986,112,169</p>
                </div>
                <div class="card">
                    <h4>CONTRACT ADDRESS</h4>
                    <p id="ca">7bamnUSVNGj1XNece32BiFb12FmhW5AWdBz9qc34pump</p>
                    <button class="copy-btn">
                        <img src="/resources/copy-icon-2.png" alt="">
                        <span>COPY</span>
                    </button>
                </div>
            </div>
            <button class="btn buy-btn" id="buy-btn">BUY $ORPE</button>
        </div>
    </div>
    <div class="token-container">
        <h2>$ORPE Chart</h2>
        <!--
        <div class="token-info">
            <p>Market Cap: <span id="token-market-cap">Loading...</span></p>
            <p>Price: <span id="token-price">Loading...</span></p>
            <p>24h Change: <span id="token-change">Loading...</span></p>
        </div>
        -->
        <iframe height="100%" width="100%" id="geckoterminal-embed" title="GeckoTerminal Embed" src="https://www.geckoterminal.com/solana/pools/64v6nebcsnLcKJFvafqpui9g4gBmSYEoQukLWrqo7wzx?embed=1&info=1&swaps=0&grayscale=0&light_chart=0" frameborder="0" allow="clipboard-write" allowfullscreen></iframe>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</section>

<section id="gallery-section" class="gallery-section">
    <h2>#MakeMemesGreatAgain</h2>
    <div class="gallery-container">
        <div class="gallery-row">
            <img src="/resources/king-orpe.jpg" alt="Gallery Image 1">
            <img src="/resources/maga-orpe.jpg" alt="Gallery Image 2">
            <img src="/resources/metal-pepe.jpg" alt="Gallery Image 3">
            <img src="/resources/pepespodium.jpg" alt="Gallery Image 4">
            <img src="/resources/purpe-and-orpe.jpg" alt="Gallery Image 5">
        </div>
        <div class="gallery-row">
            <img src="/resources/orpe-president.jpg" alt="Gallery Image 6">
            <img src="/resources/trader-orpe.jpg" alt="Gallery Image 7">
            <img src="/resources/santa-orpe.jpg" alt="Gallery Image 8">
            <img src="/resources/hodl-orpe.jpg" alt="Gallery Image 9">
            <img src="/resources/orpe-to-the-moon.jpg" alt="Gallery Image 10">
        </div>
    </div>
</section>

<section class="footer-section">
    <div class="footer-content">
        <p class="disclaimer">
            DISCLAIMER: $ORPE IS A MEME COIN CREATED FOR ENTERTAINMENT PURPOSES ONLY. IT HAS NO INTRINSIC VALUE, AND THERE ARE NO EXPECTATIONS OF FINANCIAL RETURN. THE VALUE OF THIS TOKEN IS NOT GUARANTEED, AND WE ACCEPT NO RESPONSIBILITY FOR IT. 
        </p>
        <p>
            $ORPE IS IN NO WAY AFFILIATED WITH MATT FURIE OR HIS CREATION, PEPE THE FROG. THIS TOKEN HONORS THE MEME LEGACY AND REPRESENTS AN ORANGE VERSION OF THE ICONIC GREEN FROG.
        </p>
        <p class="copyright">
            © 2024 Orange Pepe CTO.<br>Web Developer Tg: @StvfreBTC. <br>All rights reserved.
        </p>
    </div>
</section>
</main>

<script src="script.js?v=1.1"></script>
    <?php // get_footer(); ?> 
</body>
</html>