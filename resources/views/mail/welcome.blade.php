<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    form {
        border: 3px solid #f1f1f1;
        font-family: Arial;
    }

    .container {
        padding: 20px;
        background-color: #f1f1f1;
    }

    input[type=text],
    input[type=submit] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    input[type=checkbox] {
        margin-top: 16px;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        border: none;
    }

    input[type=submit]:hover {
        opacity: 0.8;
    }

</style>

<body>

    <h2>
        <p>Dear {{ Auth::user()->name }}, </p>
        <p>Thank you for signing up with us. Here at Gainers Bay, we ensure that
            our investors get maximum profit on retun of their investments with us.
            Kindly proceed to start your first investment with us.

            For guidance on how to use the investment platform, please contact an admin on
            investors_support@gainersbay.com or customer support via our livechat.</p>
        <p>Thank you for Trusting us with your investment.</p>
        <p>Gainers Bay</p>
    </h2>
</body>

</html>
