<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @inertiaHead
  </head>
  <body>
    <section class="p-8">
         @inertia
    </section>
  </body>
</html>