const question = document.getElementById("question");
const choices = Array.from(document.getElementsByClassName("choice-text"));
const progressText = document.getElementById("progressText");
const scoreText = document.getElementById("score");
const progressBarFull = document.getElementById("progressBarFull");
let currentQuestion = {};
let acceptingAnswers = false;
let score = 0;
let questionCounter = 0;
let availableQuesions = [];

let questions = [
  {
    question: "Bola Sepak Dijual dengan harga Rp 300.000. Kemudian penjual memberikan diskon sebesar 10%. Jumlah yang harus dibayarkan untuk membeli bola tersebut adalah",
    choice1: "Rp 270.000",
    choice2: "Rp 290.000",
    choice3: "Rp 280.000",
    choice4: "Rp 260.000",
    answer: 1
  },
  {
    question: "Penjual sepeda menjual suatu sepeda seharga Rp 1.000.000. Sepeda tersebut mendapatkan diskon sebesar 20%. Harga yang harus dibayarkan untuk sepeda tersebut adalah",
    choice1: "Rp 200.000",
    choice2: "Rp 800.000",
    choice3: "Rp 600.000",
    choice4: "Rp 400.000",
    answer: 2
  },
  {
    question: "Joni membeli roti seharga Rp 50.000. Roti tersebut mendapatkan diskon 4%. Berapa harga roti setelah diskon",
    choice1: "Rp 2000",
    choice2: "Rp. 312.500",
    choice3: "Rp. 362.500",
    choice4: "Rp. 420.000",
    answer: 2
  },
  {
    question: "Ahmad membeli baju di sebuah toko seharga Rp. 250.000. Baju tersebut memiliki diskon 20%. Maka harga baju tersebut sebelum di diskon adalah",
    choice1: "Rp. 240.000",
    choice2: "Rp. 312.500",
    choice3: "Rp. 362.500",
    choice4: "Rp. 420.000",
    answer: 2
  },
  {
    question: "Harga sebuah jam setelah mendapat diskon 25% adalah Rp6.000.000. Harga jam sebelum diskon adalah ",
    choice1: "Rp7.500.000",
    choice2: "Rp8.000.000",
    choice3: "Rp8.500.000",
    choice4: "Rp9.000.000",
    answer: 2
  },
  {
    question: "Harga Sebuah sepeda setelah mendapat diskon 30% adalah 1.680.000. Harga sepeda sebelum diskon adalah",
    choice1: "Rp 2.300.000",
    choice2: "Rp 2.500.000",
    choice3: "Rp 2.400.000",
    choice4: "Rp 2.200.000",
    answer: 3
  },
  {
    question: "sebuah toko sepatu memberikan diskon sebesar 15% kepada pembelinya. Harga sepatu tersebut adalah Rp180.000,00. toko masih bisa mendapatkan keuntungan 10%. Maka harga pembelian sepatu tersebut adalah",
    choice1: "Rp 137.700,00",
    choice2: "Rp 139.500,00",
    choice3: "Rp 135.500,00",
    choice4: "Rp 140.300,00",
    answer: 1
  },
  {
    question: "toko olahraga memberikan diskon sebesar 10% untuk semua barang. Sepatu bola mendapatkan diskon sebesar 15%. Harga sebuah sepatu bola adalah Rp 500.000. Harga yang harus dibayarkan untuk membeli sepatu tersebut adalah sebagai berikut:",
    choice1: "Rp 382.500",
    choice2: "Rp 217.000",
    choice3: "Rp 216.000",
    choice4: "Rp 214.000",
    answer: 3
  },
  {
    question: "Satu lusin pensil harga pembeliannya Rp 30.000,00. Pensil tersebut akan dijual kembali dengan harga Rp 3.000,00 per buah. Apabila pensil tersebut terjual semua, laba yang akan diperoleh adalah ",
    choice1: "Rp 2.000,00",
    choice2: "Rp 3.000,00",
    choice3: "Rp 5.000,00",
    choice4: "Rp 6.000,00",
    answer: 4
  },
  {
    question: "Seorang pedagang buah-buahan menjual 30 semangka dengan harga per buah Rp 20.000,00 dan 15 buah pepaya dengan harga per buah Rp 15.000,00. Apabila pedagang tersebut memperoleh laba 10% dan buah-buahan terjual sampai habis maka laba yang diperoleh adalah sebesar ",
    choice1: "Rp 72.500,00",
    choice2: "Rp 82.500,00",
    choice3: "Rp 92.500,00",
    choice4: "Rp 102.500,00",
    answer: 2
  },
  {
    question: "Seorang reseller membeli  50 buah celana dengan harga Rp 5.150.000,00. Celana tersebut laku terjual dengan harga Rp 105.000,00 perbuah. Reseller tersebut memperoleh",
    choice1: "Laba Rp 100.000,00",
    choice2: "Rugi Rp 100.000,00",
    choice3: "Laba Rp 110.000,00",
    choice4: "Rugi Rp 110.000,00",
    answer: 1
  },
  {
    question: "Seorang pedagang membeli 1 lusin pensil dengan harga Rp96.000. Jika pedagang tersebut menghendaki untung 25%, maka harga penjualan sebuah pensil adalah ",
    choice1: "Rp6.000",
    choice2: "Rp8.000",
    choice3: "Rp10.000 ",
    choice4: "Rp12.000",
    answer: 3
  },
  {
    question: "Harga Sebuah sepeda setelah mendapat diskon 30% adalah 1.680.000. Harga sepeda sebelum diskon adalah",
    choice1: "Rp 2.300.000",
    choice2: "Rp 2.500.000",
    choice3: "Rp 2.400.000",
    choice4: "Rp 2.200.000",
    answer: 3
  },
  {
    question: "Pedagan buah membeli 30 celana seharga Rp 300.000. Celana tersebut laku terjual sebesar  Rp 12.000 per celana. Pedagang tersebut memperoleh keuntungan sebesar",
    choice1: "60.000",
    choice2: "50.000",
    choice3: "40.000",
    choice4: "30.000",
    answer: 1
  },
  {
    question: "Seorang pedagang mobil membeli mobil bekas dengan harga Rp52.000.000. Kemudian mobil diperbaiki dengan biaya Rp11.000.000, kemudian dijual dengan harga Rp60.000.000. Persentase kerugian yang dialami oleh pedagang tersebut adalah ",
    choice1: "2,5%",
    choice2: "5%",
    choice3: "7,5%",
    choice4: "10%",
    answer: 2
  },
  {
    question: "Harga Sebuah sepeda setelah mendapat diskon 30% adalah 1.680.000. Harga sepeda sebelum diskon adalah",
    choice1: "Rp 2.300.000",
    choice2: "Rp 2.500.000",
    choice3: "Rp 2.400.000",
    choice4: "Rp 2.200.000",
    answer: 3
  },
  {
    question: "Budi membeli sepeda seharga Rp. 180.000,00. Setelah diperbaiki dengan biaya Rp. 40.000,00, sepeda dijual dengan harga Rp. 275.000,00. Persentase keuntungan yang diperoleh adalah",
    choice1: "14%",
    choice2: "15%",
    choice3: "20%",
    choice4: "25%",
    answer: 4
  },
  {
    question: "Paman membeli sebuah apartemen dengan harga Rp400.000.000. Karena paman tiba-tiba butuh uang, maka paman menjual apartemen tersebut sehingga dia mengalami kerugian sebesar 5%. Harga jual apartemen tersebut adalah ",
    choice1: "Rp360.000.000",
    choice2: "Rp375.000.000",
    choice3: "Rp380.000.000 ",
    choice4: "Rp385.000.000",
    answer: 3
  },
  {
    question: "Pak Edi membeli Handphone seharga Rp2.000.000,00 sebulan yang lalu. Karena ada keperluan mendesak Pak Edi menjual Handphone nya dengan pak Arif seharga Rp1.700.000,00 . Berapa besar kerugian yang di derita pak Edi ",
    choice1: "Rp 300.000",
    choice2: "Rp 350.000",
    choice3: "Rp 250.000",
    choice4: "Rp 200.000",
    answer: 1
  },
  {
    question: "Jika Bu Mia membeli tas seharga Rp500.000,00 , dan setelah 2 bulan dari pembelian ibu Mia Menjual Tas tersebut karena ada suatu masalah, dan ibu Mia mendapatkan kerugian Rp150.000,00. Berapakah harga penjualan tas tersebut",
    choice1: "Rp 300.000",
    choice2: "Rp 350.000",
    choice3: "Rp 250.000",
    choice4: "Rp 200.000",
    answer: 2
  },
  {
    question: "Seorang pedagang buah membeli satu karung mangga dengan harga Rp325.000, kemudian mengga tersebut ditimbang dan ternyata timbangannya 45 kg. Kemudian mangga tersebut dijual seharga Rp15.000 per kg. Maka pedagang tersebut mengalami ",
    choice1: "Untung Rp325.000",
    choice2: "Rugi Rp325.000",
    choice3: "Untung Rp350.000",
    choice4: "Rugi Rp350.000",
    answer: 3
  },
  {
    question: "Diketahui harga celana Rp. 80.000,00 per potong dengan diskon 30% dan harga kemeja Rp. 60.000,00 per potong dengan diskon 25%. Harga satu celana dan dua kemeja adalah",
    choice1: "Rp. 128.000,00",
    choice2: "Rp. 136.000,00",
    choice3: "Rp. 142.000,00",
    choice4: "Rp. 146.000,00",
    answer: 4
  }
];

//CONSTANTS
const CORRECT_BONUS = 5;
const MAX_QUESTIONS = 20;

startGame = () => {
  questionCounter = 0;
  score = 0;
  availableQuesions = [...questions];
  getNewQuestion();
};

getNewQuestion = () => {
  if (availableQuesions.length === 0 || questionCounter >= MAX_QUESTIONS) {
    localStorage.setItem("mostRecentScore", score);
    //go to the end page
    return window.location.assign("../latihan/end.php");
  }
  questionCounter++;
  progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`;
  //Update the progress bar
  progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;

  const questionIndex = Math.floor(Math.random() * availableQuesions.length);
  currentQuestion = availableQuesions[questionIndex];
  question.innerText = currentQuestion.question;

  choices.forEach(choice => {
    const number = choice.dataset["number"];
    choice.innerText = currentQuestion["choice" + number];
  });

  availableQuesions.splice(questionIndex, 1);
  acceptingAnswers = true;
};

choices.forEach(choice => {
  choice.addEventListener("click", e => {
    if (!acceptingAnswers) return;

    acceptingAnswers = false;
    const selectedChoice = e.target;
    const selectedAnswer = selectedChoice.dataset["number"];

    const classToApply =
      selectedAnswer == currentQuestion.answer ? "correct" : "incorrect";

    if (classToApply === "correct") {
      incrementScore(CORRECT_BONUS);
    }

    selectedChoice.parentElement.classList.add(classToApply);

    setTimeout(() => {
      selectedChoice.parentElement.classList.remove(classToApply);
      getNewQuestion();
    }, 1000);
  });
});

incrementScore = num => {
  score += num;
  scoreText.innerText = score;
};

startGame();
