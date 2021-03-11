<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eloquent</title>
    </head>
    <body>        
     @foreach($companies as $company)

         <h3>{{ $company->name }}</h3>
                        
             <ul>
                 @foreach($company->customers as $customer)
                    <li> {{ $customer->name }}</li>
                  @endforeach
             </ul> 
     @endforeach
    </body>
</html>
