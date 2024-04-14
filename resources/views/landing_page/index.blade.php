<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Jasa website, aplikasi, dan design dengan harga terjangkau. Konsultasikan sekarang juga">
    <meta name="description" content="Optimalkan potensi digital bisnis Anda dengan layanan terbaik dalam pengembangan website, aplikasi, dan desain kreatif. Kami adalah mitra terpercaya yang menawarkan solusi kustom yang menghadirkan pengalaman digital yang luar biasa. Dari konsep hingga peluncuran, kami memadukan keahlian teknis dengan kreativitas yang inovatif. Hubungi kami hari ini untuk mewujudkan visi digital Anda!">
    <title>Manifestasi</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- box icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/chatstyle.css') }}" />
  </head>

  <body>
    <!-- header design -->
    <header class="header">
      {{-- <a href="#" class="logo">Manifestasi</a> --}}
      <img class="logo" src="{{ asset('images/manifestasi2.png') }}" width="200"/>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="/article">Article</a>
      </nav>

      <!-- <div class="bx bx-moon" id="darkMode-icon"></div> -->

      <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <!-- home section design -->

    <button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <div class="header-chat">
        <h2>Assistant</h2>
        <span class="close-btn material-symbols-outlined">close</span>
      </div>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi terima kasih sudah berkunjung<br>1. Apa itu manifestasi<br>2. Layanan apa yang dapat kita berikan<br>3. Ingin konsultasi?<br><br>pilih angka 1 sampai 3
          </p>
        </li>
        {{-- <li class="chat outgoing">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Helo</p>
        </li> --}}
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>

    
    <section class="home" id="home">
      <div class="home-content">
        <h3>Ayo beli sekarang</h3>
        <h1>Manifestasi</h1>
        <p>Tempat jasa website, aplikasi, dan design murah dengan harga terjangkau</p>

        <div class="social-media">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/manifestasi_tech"><i class="bx bxl-instagram-alt"></i></a>
          <a href="#"><i class="bx bxl-linkedin"></i></a>
        </div>
        <a href="https://wa.link/3rhcme" class="btn-logo">
          <i class="bx bxl-whatsapp"></i>
          <p>Konsultasikan sekarang</p>
        </a>
      </div>

      <div class="r-container">
        <div class="r-box">
          <div class="r-content" style="--i: 0">
            <i class="bx bx-code-alt"></i>
            <h3>Website</h3>
          </div>
          <div class="r-content" style="--i: 1">
            <i class="bx bx-mobile-alt"></i>
            <h3>Aplikasi</h3>
          </div>
          <div class="r-content" style="--i: 2">
            <i class="bx bx-palette"></i>
            <h3>Designer</h3>
          </div>
          <!-- <div class="r-content">
            <i class="bx bx-code-alt"></i>
            <h3>Vidographer</h3>
          </div> -->
          <div class="circle"></div>
        </div>

        <div class="overlay"></div>

        <div class="home-img">
          <img src="{{ asset('images/kartun.jpg') }}" alt="" />
        </div>
      </div>
    </section>

    <!-- about section design -->

    <section class="about" id="about">
      <div class="about-img">
        <img src="{{ asset('images/kartun2.jpg') }}" alt="" />
      </div>
      <div class="about-content">
        <h2 class="heading">About <span>Us</span></h2>
        <h3>Penasaran dengan kita?</h3>
        <p>Kita adalah para developer yang bekerja sama untuk membangun bisnis atau membuatkan anda berupa wesite, aplikasi, dan juga design, dengan harga yang terjangkau</p>
        <a href="#services" class="btn">Read More</a>
      </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
      <h2 class="heading">Our <span>Services</span></h2>

      <div class="services-container">
        <div class="services-box">
          <i class="bx bx-code-alt"></i>
          <h3>Website</h3>
          <p>Kita akan membuatkan anda, atau membangun bisnis anda berupa website yang modern, baik itu website landing page, company profile, bio link, toko online dll sesuai request anda</p>
          <a href="#portfolio" class="btn">Read More</a>
        </div>
        <div class="services-box">
          <i class="bx bx-mobile-alt"></i>
          <h3>Aplikasi</h3>
          <p>Kita akan membuatkan anda, atau membangun bisnis anda berupa aplikasi mobile, baik itu android ataupun ios, sesuai dengan request anda</p>
          <a href="#portfolio" class="btn">Read More</a>
        </div>
        <div class="services-box">
          <i class="bx bx-palette"></i>
          <h3>Designer</h3>
          <p>Kita akan mendesign bisnis dan produk anda mulai dari design website, design aplikasi, design logo dll sesuai request anda</p>
          <a href="#portfolio" class="btn">Read More</a>
        </div>
      </div>
    </section>

    <div class="price">
      <h2 class="heading">Tertarik dengan penawaran <span> Kami?</span></h2>
      {{-- <h3 class="heading">Harga mulai <span>Rp.100.000 !!</span></h3> --}}
      <div class="price-container">
        <div class="price-card">
          <a href="https://wa.link/3rhcme" class="btn-logo">
            <i class="bx bxl-whatsapp"></i>
            <p>Konsultasikan sekarang</p>
          </a>
          {{-- <p class="note">harga belum termasuk biaya hosting dll</p> --}}
        </div>
      </div>
    </div>

    <!-- portfolio section design -->
    <section class="portofolio" id="portfolio">
      <h2 class="heading">Portfolio <span>Project</span></h2>

      <div class="portofolio-container">
        @foreach ($categories as $c)
        <div class="portofolio-box">
          <img src="{{ asset('storage/' . $c->gambar) }}" alt="{{ $c->nama }}" />

          <div class="portofolio-layer">
            <h4>{{ $c->nama }}</h4>
            {{-- <p>COMING SOON</p> --}}
            <a href="/article?category={{ $c->slug }}"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        @endforeach
        {{-- <div class="portofolio-box">
          <img src="{{ asset('images/website.jpg') }}" alt="" />

          <div class="portofolio-layer">
            <h4>Website</h4>
            <p>COMING SOON</p>
            <a href="/article"><i class="bx bx-link-external"></i></a>
          </div>
        </div>
        <div class="portofolio-box">
          <img src="{{ asset('images/mobile.jpg') }}" alt="" />

          <div class="portofolio-layer">
            <h4>Mobile App</h4>
            <p>COMING SOON</p>
            <a href="/article"><i class="bx bx-link-external"></i></a>
          </div>
        </div> --}}
      </div>
    </section>

    <!-- testimonial design -->
    <div class="testimonial-container">
      <h2 class="heading">Valuable <span>Testimonial</span></h2>

      <div class="testimonial-wrapper">
        <div class="testimonial-box mySwiper">
          <div class="testimonial-content swiper-wrapper">
            <div class="testimonial-slide swiper-slide">
              <img src="{{ asset('images/ilham.JPG') }}" alt="" />
              <h3>Ilham</h3>
              <p>
                Pelayanan jasanya bagus, orangnya ramah bintang 5 lah pokoknya
              </p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="{{ asset('images/naufal.jpg') }}" alt="" />
              <h3>Naufal</h3>
              <p>
                Hasilnya bagus sesuai selera, rekomended 
              </p>
            </div>
            <div class="testimonial-slide swiper-slide">
              <img src="{{ asset('images/eka.png') }}" alt="" />
              <h3>Eka</h3>
              <p>
                Kinerja bagus, fast respon
              </p>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- contact section design -->

    <!-- footer design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Manifestasi | All Rights Reserved</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
      // Chat
const chatbotToggler = document.querySelector(".chatbot-toggler");
const closeBtn = document.querySelector(".close-btn");
const closeBtnBox = document.querySelector(".chatbot .header-chat span");
const chatbox = document.querySelector(".chatbox");
const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");

const inputInitHeight = chatInput.scrollHeight;
let userMessage;
let step = 0;

// Chat

const createChatLi = (message, className) => {
    // Create a chat <li> element with passed message and className
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", `${className}`);
    let chatContent =
        className === "outgoing"
            ? `<p></p>`
            : `<span class="material-symbols-outlined">smart_toy</span><p></p>`;
    chatLi.innerHTML = chatContent;
    chatLi.querySelector("p").textContent = message;
    return chatLi; // return chat <li> element
};

const generateResponse = (chatElement, userMessage) => {
    // Tambahkan userMessage sebagai parameter di fungsi generateResponse
    const messageElement = chatElement.querySelector("p");
    if (userMessage !== null || userMessage !== undefined) {
        if (userMessage == "1") {
            messageElement.textContent = `Kami adalah perusahaan yang bergerak di bidang inovasi dan teknologi, yang terus berinovasi untuk kebutuhan masyarakat, seperti layanan Jasa pembuatan teknologi, layanan pemberi lapangan kerja dll, dan juga ide kami ingin membuat komunitasi yang berkomitmen sesuai  jalur atau arah visi misi perjuangan perusahaan`;
        } else if (userMessage == "2") {
            messageElement.textContent = `1. Website
            Kita akan membuatkan anda, atau membangun bisnis anda berupa website yang modern, baik itu website landing page, company profile, bio link, toko online dll sesuai request anda

2. Aplikasi
            Kita akan membuatkan anda, atau membangun bisnis anda berupa aplikasi mobile, baik itu android ataupun ios, sesuai dengan request anda

3. Designer
            Kita akan mendesign bisnis dan produk anda mulai dari design website, design aplikasi, design logo dll sesuai request anda`;
        } else if (userMessage == "3") {
            messageElement.textContent = `Masukkan no WA(Whatssapp) anda`;
        } else {
            if (userMessage.length >= 11 && userMessage.startsWith("0")) {
                let cleanedPhoneNumber = userMessage.replace(/\D/g, "");
                cleanedPhoneNumber = "62" + cleanedPhoneNumber.slice(1);

                // Data yang akan dikirim dalam body
                const requestBody = {
                    session: "{{ env('SESSION') }}",
                    to: `${cleanedPhoneNumber}`,
                    text: "Terima kasih sudah berkunjung di manifestasi\n adakah yang bisa saya bantu",
                    key: "{{ env('KEY') }}"
                };

                // URL endpoint API
                const url = "{{ env('API_URL_WHATSSAPP') }}";

                // Membuat objek untuk konfigurasi permintaan
                const requestOptions = {
                    method: "GET", // Metode permintaan
                    headers: {
                        "Content-Type": "application/json",
                        "key": "{{ env('KEY') }}" // Header untuk menentukan tipe konten JSON
                    },
                    // Mengubah objek requestBody menjadi string JSON dan menyematkannya ke dalam URL sebagai query string
                    // Jangan lupa untuk mengonversi nilai-nilai query string yang bersifat spesial (seperti spasi) menjadi bentuk yang sesuai (misalnya menggunakan encodeURIComponent)
                    // Misalnya: `${url}?session=${encodeURIComponent(requestBody.session)}&to=${encodeURIComponent(requestBody.to)}&text=${encodeURIComponent(requestBody.text)}`
                    // Berikut ini adalah contoh tanpa menggunakan encodeURIComponent untuk kejelasan saja.
                    // body: JSON.stringify(requestBody),
                };

                // Melakukan permintaan fetch
                fetch(
                    `${url}send-message?session=${requestBody.session}&to=${requestBody.to}&text=${requestBody.text}`, requestOptions).then((response) => {
                        // Memeriksa apakah respons yang diterima adalah OK (kode status 200)
                        if (response.ok) {
                            messageElement.textContent =
                                "Pesan sudah dikirim ke WA (Whatssapp anda)";
                        } else {
                            messageElement.textContent =
                                "Oops coba ulangi lagi";
                        }
                    }).then((data) => {
                        // Menangani data respons yang diterima
                        console.log("Respon dari API:", data);
                    }).catch((error) => {
                        // Menangani kesalahan
                        console.error("Kesalahan:", error);
                        messageElement.textContent = `${error.message}`;
                    });
            } else {
                messageElement.innerHTML = `Hi terima kasih sudah berkunjung<br>1. Apa itu manifestasi<br>2. Layanan apa yang dapat kita berikan<br>3. Ingin konsultasi?<br><br>pilih angka 1 sampai 3`;
            }
        }
    }
};

const handleChat = () => {
    userMessage = chatInput.value.trim(); // Dapatkan pesan pengguna dari input
    if (!userMessage) return;
    // Clear the input textarea and set its height to default
    chatInput.value = "";
    chatInput.style.height = `${inputInitHeight}px`;
    // Append the user's message to the chatbox
    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);

    setTimeout(() => {
        // Display "Thinking..." message while waiting for the response
        const incomingChatLi = createChatLi("Thinking...", "incoming");
        chatbox.appendChild(incomingChatLi);
        chatbox.scrollTo(0, chatbox.scrollHeight);
        generateResponse(incomingChatLi, userMessage); // Teruskan userMessage ke dalam generateResponse
    }, 600);
};

chatInput.addEventListener("input", () => {
    // Adjust the height of the input textarea based on its content
    chatInput.style.height = `${inputInitHeight}px`;
    chatInput.style.height = `${chatInput.scrollHeight}px`;
});
chatInput.addEventListener("keydown", (e) => {
    // If Enter key is pressed without Shift key and the window
    // width is greater than 800px, handle the chat
    if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
        e.preventDefault();
        handleChat();
    }
});

chatbotToggler.addEventListener("click", () =>
    document.body.classList.toggle("show-chatbot")
);

closeBtnBox.addEventListener("click", () => {
    document.body.classList.toggle("show-chatbot");
});

sendChatBtn.addEventListener("click", handleChat);
    </script>
  </body>
</html>
