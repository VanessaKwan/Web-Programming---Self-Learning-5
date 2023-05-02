<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vanessa's Profile</title>
  <link rel="shortcut icon" href="Assets/Logo.png" type="image/x-icon">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

</head>
<body>
  <div class="flex flex-col bg-zinc-100">
    <div id="navbar" class="dark:bg-lime-950 flex flex-row items-center fixed w-full mb-[10.75vw] z-50">
      <a href="#landingPage"><img class="mx-[0.5vw] h-[6.5vw] w-[6.5vw]"src="Assets/Logo.png" alt=""></a>
      <p class="text-white font-fasthand text-[2.1vw]">Vanessa's Profile</p>
      <div class="text-white flex flex-row text-[1.7vw] justify-items-end">
        <a href="#aboutMe" class="cursor-pointer ml-[43vw] hover:underline underline-offset-4 hover:scale-125">About Me</a>
        <a href="#skills" class="cursor-pointer ml-[7vw] hover:underline underline-offset-4 hover:scale-125">Skills</a>
        <a href="#reachMe" class="cursor-pointer ml-[7vw] hover:underline underline-offset-4 hover:scale-125">Reach Me</a>
      </div>
    </div>

    <div class="w-full h-[39vw]">
      <section id="landingPage" class="pt-[6.5vw] relative">
        <div class="bg-cover h-[38.5vw] w-[68vw]" style="background-image: url('Assets/Landing-Page.jpg');">
          <div class="bg-no-repeat z-10"></div>
            <div class="h-[2vw]"></div>
            <img class=" w-[8vw] h-[8vw] ml-[90vw] hover:animate-bounce duration-100 cursor-pointer" src="Assets/Mafu.png" alt="">
            <div class="h-[29vw] w-[38vw] bg-white absolute place-items-end ml-[59.7vw] z-20">
              <p class="font-wibu text-[3.5vw] ml-[1.2vw] mt-[1.5vw]">こんにちは</p>
              <p class="font-roboto text-[3.2vw] ml-[1.6vw]">I'm Vanessa Kwandinata</p>
              <p class="text-[1.2vw] ml-[2.5vw] mt-[5.5vw] w-[33vw] text-justify">
                I'm a 5th semester student at BINUS University x PPTI BCA majoring in Computer Science.
                I love to explore and learn new things, i have a lot of hobbies.
                Besides studying, I also active in running extra and other organizations.
              </p>
            </div>
          </div>
      </section>
    </div>
    
    <div id="aboutMe" class="z-0">
      <div id="bgAbout" class="bg-cover  bg-no-repeat z-0 w-full h-[45vw]" style="background-image: url('Assets/Background-AboutMe.png');">
        <section class="pt-[6.5vw] w-full h-[50vw]">
          <p class="ml-[5vw] w-[30vw] text-[6vw] z-0 font-another">About Me</p>
  
          <div class="flex flex-row">
            <div class="flex flex-row">
              <div class="w-[33vw] h-[50vw] flex flex-col ml-[1.5vw] text-indigo-800">
                <h1 class="text-[2vw] mt-[3vw] ml-[3vw] font-dosis font-semibold">Education</h1>
                <div class="flex flex-row">
                  <img class="w-[1.65vw] h-[20.63vw] mt-[1.6vw] ml-[4vw]" src="Assets/Timeline.png" alt="">
                  <div class="mt-[0.8vw]">
                    <p class="text-[1.3vw] ml-[1vw] mt-[0.6vw]">TK Setia Bhakti</p>
                    <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2007 - 2009</p>
                    <p class="text-[1.3vw] ml-[1vw] mt-[0.4vw]">SD Setia Bhakti</p>
                    <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2009 - 2015</p>
                    <p class="text-[1.3vw] ml-[1vw] mt-[0.6vw]">SMP Setia Bhakti</p>
                    <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2015 - 2018</p>
                    <p class="text-[1.3vw] ml-[1vw] mt-[0.6vw]">SMA Setia Bhakti</p>
                    <p class="text-[1.1vw] ml-[2.8vw]">Tangerang, 2018 - 2021</p>
                    <p class="text-[1.3vw] ml-[1vw] mt-[0.6vw]">BINUS University x PPTI BCA</p>
                    <p class="text-[1.1vw] ml-[2.8vw]">Jakarta + Sentul, 2021 - now</p>
                  </div>
                </div>
              </div>
    
              <div class="w-[23vw] h-[28vw] text-[1.1vw] mt-[6vw] ml-[-3vw] text-indigo-800">
                <h1 class="text-[2vw] font-dosis font-semibold">Mini Details</h1>
                <div class="mt-[0.8vw] flex flex-row items-center">
                  <svg class="mr-[0.5vw]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 0 1 0-5a2.5 2.5 0 0 1 0 5z"/></svg>
                  <p>Born in Jakarta </p>
                </div>
                <div class="mt-[0.3vw] flex flex-row items-center ml-[0.1vw]">
                  <svg class="mr-[0.5vw]" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="currentColor" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.3 14.71L11 12.41V7h2v4.59l3.71 3.71l-1.42 1.41z"/></svg>
                    <div class=" flex flex-row ml-[0.1vw]">
                      <p>Born at Tanabata Matsuri</p>
                      <p class="text-transparent">..</p>
                      <p>'</p>
                      <p class="font-wibu">星祭</p>
                      <p>'</p>
                      <p class="text-transparent">..</p>
                      <p>(July 7th)</p>
                    </div>
                </div>
  
                <div class="mt-[0.3vw] flex flex-row items-center ml-[0.1vw]">
                  <svg class="mr-[0.5vw]" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="currentColor" d="M12 5.5A3.5 3.5 0 0 1 15.5 9a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8.5 9A3.5 3.5 0 0 1 12 5.5M5 8c.56 0 1.08.15 1.53.42c-.15 1.43.27 2.85 1.13 3.96C7.16 13.34 6.16 14 5 14a3 3 0 0 1-3-3a3 3 0 0 1 3-3m14 0a3 3 0 0 1 3 3a3 3 0 0 1-3 3c-1.16 0-2.16-.66-2.66-1.62a5.536 5.536 0 0 0 1.13-3.96c.45-.27.97-.42 1.53-.42M5.5 18.25c0-2.07 2.91-3.75 6.5-3.75s6.5 1.68 6.5 3.75V20h-13v-1.75M0 20v-1.5c0-1.39 1.89-2.56 4.45-2.9c-.59.68-.95 1.62-.95 2.65V20H0m24 0h-3.5v-1.75c0-1.03-.36-1.97-.95-2.65c2.56.34 4.45 1.51 4.45 2.9V20Z"/></svg>
                  <p class="ml-[0.1vw]">Family of 5</p>
                </div>
                <div class="mt-[0.3vw] flex flex-row items-center">
                  <svg class="mr-[0.5vw]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="currentColor" d="M11.9 8.4c1.3 0 2.1-1.9 2.1-3.1c0-1-.5-2.2-1.5-2.2c-1.3 0-2.1 1.9-2.1 3.1c0 1 .5 2.2 1.5 2.2zm-3.8 0c1 0 1.5-1.2 1.5-2.2C9.6 4.9 8.8 3 7.5 3C6.5 3 6 4.2 6 5.2c-.1 1.3.7 3.2 2.1 3.2zm7.4-1c-1.3 0-2.2 1.8-2.2 3.1c0 .9.4 1.8 1.3 1.8c1.3 0 2.2-1.8 2.2-3.1c0-.9-.5-1.8-1.3-1.8zm-8.7 3.1c0-1.3-1-3.1-2.2-3.1c-.9 0-1.3.9-1.3 1.8c0 1.3 1 3.1 2.2 3.1c.9 0 1.3-.9 1.3-1.8zm3.2-.2c-2 0-4.7 3.2-4.7 5.4c0 1 .7 1.3 1.5 1.3c1.2 0 2.1-.8 3.2-.8c1 0 1.9.8 3 .8c.8 0 1.7-.2 1.7-1.3c0-2.2-2.7-5.4-4.7-5.4z"/></svg>
                  <p>Not owning any pet :(</p>
                </div>
                <div class="mt-[0.3vw] flex flex-row items-center">
                  <svg class="mr-[0.5vw]" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="currentColor" d="M19 9.3V5c0-.55-.45-1-1-1h-1c-.55 0-1 .45-1 1v1.6l-3.33-3c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L19 9.3zm-9 .7c0-1.1.9-2 2-2s2 .9 2 2h-4z"/></svg>
                  <p>Currently live in South Jakarta</p>
                </div>
              </div>
            </div>

            
            <div class="flex flex-col z-0">
              <div class="flex flex-row">
                <div class="w-[27vw] h-[17vw] mt-[-6vw] text-[1.1vw] ml-[7vw] mr-[-22vw]">
                  <p class="text-[2vw] font-dosis font-semibold">Hobbies</p>
                  <p class="leading-[1.8vw] mt-[0.3vw] mt-[1vw]">
                    • Read novels <br>
                    • Sleep a lot, like seriously a lot<br>
                    • Eat chocolates and strawberries <br>
                    • Read mangas <br>
                  • Watch animes <br>
                  • Running <br>
                  • Painting
                </p>
              </div>
              
              <div class="w-[21vw] h-[17vw] text-[1.1vw] text-right ml-[9vw] mt-[-6vw]">
                <h1 class="text-[2vw] font-dosis font-semibold">Experiences</h1>
                <p class="text-[1.2vw] font-semibold mt-[0.8vw]">2016 - 2019</p>
                <p class="text-[1.1vw]">Wan shao • A committee in my Vihara</p>
                <p class="text-[1.2vw] font-semibold mt-[0.5vw]">2016 - 2017 and 2020 - 2021</p>
                <p class="text-[1.1vw]">OSIS Committee</p>
                <p class="text-[1.2vw] font-semibold mt-[0.5vw]">2020 - 2021</p>
                <p class="text-[1.1vw]">All courses tutor for junior schooler</p>
              </div>
            </div>
            <img class="cursor-pointer w-[8vw] h-[8vw] mt-[-4vw] z-10 rotate--60 hover:animate-pulse" src="Assets/Miku.png" alt="">
            
            <div class="flex flex-col ml-[-7vw] mt-[-1.3vw] text-white">
              <h1 class="text-[2vw] mt-[4.8vw] w-[48vw] text-center font-dosis font-semibold">Achievements</h1>
                <div class="flex flex-row mt-[2vw]">
                  <div class="w-[24vw] h-[5vw] text-[1.1vw] text-white">
                    <p class="text-center">• 3rd place - women's 200m PORKOT [2019] •</p>
                    <p class="mt-[0.5vw] text-center">• 2nd place - women's 4 x 400m PORKOT [2019] •</p>
                  </div>
                  <div class="w-[24vw] h-[5vw] text-[1.1vw] text-white text-center">
                    <p>• 2nd place - women's 4 x 100m PORKOT [2019] •</p>
                    <p class="mt-[0.5vw]">• 3rd place - women's 100m O2SN [2020] •</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="w-full h-[48vw] bg-gradient-to-l from-[#97DEFF] to-[#AA77FF] text-white">
      <section id="skills" class="pt-[6.5vw]">
        <h1 class="text-[6vw] mt-[1vw] ml-[2vw] font-another">Skills</h1>
        <div class="flex flex-row">
          <div class="text-[1.3vw] w-1/2">
            <h1 class="text-[2vw] ml-[3vw] font-dosis font-semibold">Programming Languages</h1>
            <p class="mt-[0.3vw] ml-[3.5vw] leading-[2.8vw]">
              > HTML <br>
              > CSS <br>
              > MySQL <br>
              > C <br>
              > C++ <br>
              > JavaScript <br>
              > Python <br>
              > PHP <br>
              > Java <br>
              > R <br>
            </p>
          </div>
          <div class="w-[16vw] h-[11vw] flex-row ml-[-16vw]">
            <img class="cursor-pointer hover:animate-bounce w-[8.5vw] h-[9vw]" src="Assets/Gin.png" alt="">
            <img class="cursor-pointer hover:animate-spin w-[8vw] h-[10.6vw] ml-[7vw] mt-[-8.47vw]" src="Assets/Nagi.png" alt="">
          </div>
          <div class="flex justify-center w-[0.2vw] h-[48vw] mt-[2vw]">
            <img class="w-[0.2vw] h-[30vw]" src="Assets/Line.png" alt="">
          </div>
          <div class="w-1/2 text-[1.3vw]">
            <h1 class="text-[2vw] ml-[3vw] font-dosis font-semibold">Languages</h1>
            <p class="mt-[0.3vw] ml-[3.5vw] leading-[2.8vw]">
              > Indonesian <br>
              > English <br>
              > Japanese <br>
              > Mandarin <br>
            </p>
            <div class="flex flex-row w-[26vw] h-[18vw] ml-[2vw]">
              <img class="cursor-pointer w-[16vw] h-[16vw] z-10" src="Assets/tanabata.png" alt="">
              <img class="cursor-pointer w-[3.5vw] h-[4.2vw] mt-[12vw] z-20 ml-[-12vw] hover:scale-[3]" src="Assets/Asuna.png" alt="">
            </div>
          </div>
        </div>
        
      </section>
    </div>
    

    <div class="w-full h-[28vw] bg-gradient-to-br from-[#AA77FF] via-[#97DEFF] text-[1.3vw]">
      <section id="reachMe" class="pt-[6.5vw]">
        <h1 class="text-[6vw] ml-[2vw] mt-[2vw] font-another">Reach Me</h1>
        <div class="flex flex-row mt-[3vw]">
          <div class="flex flex-row items-center">
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=CllgCJZWzBSHrXRphccBtjQBgBnhfDKMXGKnfzklVBVJjjJfDvjlmXbCzknNNzmdFSdPQKWsWqq">
              <svg class="mr-[0.5vw] ml-[4vw]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6m-2 0l-8 5l-8-5h16m0 12H4V8l8 5l8-5v10Z"/></svg>
            </a>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=CllgCJZWzBSHrXRphccBtjQBgBnhfDKMXGKnfzklVBVJjjJfDvjlmXbCzknNNzmdFSdPQKWsWqq">vanessa.kwandinata@binus.ac.id</a>
          </div>
          <div class="flex flex-row items-center">
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=CllgCJZWzBSHrXRphccBtjQBgBnhfDKMXGKnfzklVBVJjjJfDvjlmXbCzknNNzmdFSdPQKWsWqq">
              <svg class="mr-[0.5vw] ml-[12vw]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6m-2 0l-8 5l-8-5h16m0 12H4V8l8 5l8-5v10Z"/></svg>
            </a>
            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=CllgCJZWzBSHrXRphccBtjQBgBnhfDKMXGKnfzklVBVJjjJfDvjlmXbCzknNNzmdFSdPQKWsWqq">vanessakwan17@gmail.com</a>
          </div>
          <div class="flex flex-row items-center">
            <a href="https://github.com/VanessaKwan">
              <svg class="mr-[0.5vw] ml-[12vw]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476c0-.237-.013-1.024-.013-1.862c-2.512.463-3.162-.612-3.362-1.175c-.113-.288-.6-1.175-1.025-1.413c-.35-.187-.85-.65-.013-.662c.788-.013 1.35.725 1.538 1.025c.9 1.512 2.338 1.087 2.912.825c.088-.65.35-1.087.638-1.337c-2.225-.25-4.55-1.113-4.55-4.938c0-1.088.387-1.987 1.025-2.688c-.1-.25-.45-1.275.1-2.65c0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337c1.912-1.3 2.75-1.024 2.75-1.024c.55 1.375.2 2.4.1 2.65c.637.7 1.025 1.587 1.025 2.687c0 3.838-2.337 4.688-4.562 4.938c.362.312.675.912.675 1.85c0 1.337-.013 2.412-.013 2.75c0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10z"/></svg>
            </a>
            <a href="https://github.com/VanessaKwan">GitHub</a>
          </div>
          <div class="flex flex-row items-center">
            <a href="https://www.instagram.com/vnsakwn_/">
              <svg class="mr-[0.5vw] ml-[12vw]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z"/></svg>
            </a>
            <a href="https://www.instagram.com/vnsakwn_/">vnsakwn_</a>
          </div>
        </div>
        <img class="cursor-pointer w-[9vw] h-[9vw] mt-[-17vw] ml-[15vw] hover:-translate-y-1/2 hover:transition duration-1000" src="Assets/Mafu-2.png" alt="">
      </section>
    </div>
    
  </div>
  
  
</body>
</html>