<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
        }

        article {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

    
    </style>
</head>
<body>
    <style>
        body{
            background-color: blue;
        }
    </style>
@extends('layouts.main')
@section('content')
    <header>
        <h1>Traveling</h1>
    </header>
    <main>
        <article>
            <h2>Pengertian Traveling</h2>
            <p>Traveling dalam bahasa Indonesia berarti perjalanan, melancong atau bepergian. Yaitu berpindah dari satu tempat ke tempat yang lainnya.   </p>
        </article>

        <article>
            <h2>Judul Artikel Kedua</h2>
            <p>Teks artikel kedua...</p>
        </article>
    </main>

    @endsection
</body>
</html>
