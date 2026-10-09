<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | Tasks for Today</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 760px; margin: 0 auto; padding: 16px; color: #222; }
        nav a { margin-right: 14px; color: #1f6b3f; font-weight: bold; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        h1 { color: #1f6b3f; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #1f6b3f; color: #fff; }
        .done { color: #1f6b3f; font-weight: bold; }
        .pending { color: #b36b00; font-weight: bold; }
        footer { margin-top: 32px; color: #777; font-size: 0.85em; }
    </style>
</head>
<body>
