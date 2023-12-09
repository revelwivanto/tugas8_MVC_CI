<!DOCTYPE html>
<html>
<head>
  <title>FAQs</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .faq {
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 5px #ccc;
      padding: 10px;
      background-color: #fff;
    }

    .faq h2 {
      margin-top: 0;
      margin-bottom: 10px;
      font-size: 20px;
      color: #333;
    }

    .faq .answer {
      /* display: none; */
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }

    .faq .answer p {
      margin-top: 0;
      margin-bottom: 0;
      font-size: 16px;
      color: #333;
    }

    .faq.active .answer {
      display: block;
    }

    .faq:hover {
      box-shadow: 0 0 10px #ccc;
    }

    .faq.active {
      border-color: #333;
    }
  </style>
  <script>
    // Add your JavaScript code here
  </script>
</head>
<body>
  <h1>Frequently Asked Questions</h1>
  <div class="faq">
    <h2>How i develop this page?</h2>
    <div class="answer">
      <p>Answer Number 1.</p>
    </div>
  </div>
  <div class="faq">
    <h2>How to download CI 4?</h2>
    <div class="answer">
      <p>Answer Number 2.</p>
    </div>
  </div>
  <!-- Add more questions and answers as needed -->
</body>
</html>
