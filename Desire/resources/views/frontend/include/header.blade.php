<!doctype html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ \App\Models\Setting::value('meta_description') }}">
    <meta name="keywords" content="{{ \App\Models\Setting::value('meta_keywords') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans&display=swap" rel=stylesheet />
    <title>{{ \App\Models\Setting::value('title') }}</title>
    <link rel="shortcut icon" href="{{ asset('asset/favicon.png') }}">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
</head>

<body>