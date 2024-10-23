<!DOCTYPE html>
<html lang="ar">
<head>
    <title>اختيار اللغة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>اختيار اللغة</h2>
    @if (session('message'))
        <p style="color: green;">{{ session('message') }}</p>
    @endif
    <form id="languageForm" method="POST" action="{{ route('language.store') }}">
        @csrf
        <label for="language">اختر لغة:</label>
        <select id="language" name="language">
            <option value="arabic">العربية</option>
            <option value="english">الإنجليزية</option>
            <option value="french">الاندنوسيه</option>
        </select>
        <br><br>
        <label>
            <input type="checkbox" id="remember" name="remember"> تذكرني
        </label>
        <br><br>
        <button type="submit">حفظ</button>
    </form>
</div>



</body>
</html>