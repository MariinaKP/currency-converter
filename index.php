<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
<main>
    <div class="container">
    <h1 class="page__title">Currency Converter</h1>
    <form class="converter">
        <div class="input">
        <div class="amount">
            <label class="label">Amount</label>
            <input type="number" placeholder="Enter number" min="0" id="amount">
        </div>
        <div class="currency">
            <label class="label">From</label>
            <select id="currency__one--options">
                <option selected disabled>Select currency</option>
                <option value="EUR">EUR - Euro</option>
                <option value="USD">USD - US Dollar</option>
                <option value="GBP">GBP - British Pound</option>
                <option value="JPY">JPY - Japanese Yen</option>
                <option value="CAD">CAD - Canadian Dollar</option>
                <option value="NZD">NZD - New Zealand Dollar</option>
                <option value="BGN">BGN - Bulgarian Lev</option>
            </select>
            <span id="arrow">&#8594;</span>
        </div>
        <div class="currency">
            <label class="label">To</label>
            <select  id="currency__two--options">
                <option selected disabled>Select currency</option>
                <option value="EUR">EUR - Euro</option>
                <option value="USD">USD - US Dollar</option>
                <option value="GBP">GBP - British Pound</option>
                <option value="JPY">JPY - Japanese Yen</option>
                <option value="CAD">CAD - Canadian Dollar</option>
                <option value="NZD">NZD - New Zealand Dollar</option>
                <option value="BGN">BGN - Bulgarian Lev</option>
            </select>
        </div>
        </div>

        <div class="result">
        <button class="btn-primary" type="button" onclick="convert()">Convert</button>
        <input type="text" name="result" id="result" disabled>
        </div>
    </form>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>