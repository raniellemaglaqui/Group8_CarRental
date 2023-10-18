<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FAQs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: black;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .faq-question {
            margin: 10px 0;
        }

        .faq-question p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>FAQs</h1>
    </header>

    <div class="navbar">
        <a href="welcome">Home</a>
        <a href="ContactUs">Contact Us</a>
        <a href="AboutUs">About Us</a>
        <a href="Faqs">FAQs</a>
        <a href="Models">Models</a>
    </div>

    <div class="container">
        <div class="faq-question">
            <h2>Question 1</h2>
            <p>Answer to Question 1.</p>
        </div>

        <div class="faq-question">
            <h2>Question 2</h2>
            <p>Answer to Question 2.</p>
        </div>

        <div class="faq-question">
            <h2>Question 3</h2>
            <p>Answer to Question 3.</p>
        </div>
    </div>
</body>
</html>
