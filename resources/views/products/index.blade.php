<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>

        <!-- Fonts -->
        
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            table, th, td {
                border: 1px solid #34dd34;
                }
            tr:nth-child(even) {
                background-color: #D6EEEE;
                }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body class="">
        <section>
            <nav class="md:flex md:justify-between md:items-center">
                   
                <div class="mt-8 md:mt-0">
                    <a href="/" class="text-xs font-bold uppercase">Home Page</a>
    
                    <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Link
                    </a>
                </div>
            </nav>

            <header class="max-w-xl mx-auto mt-20 text-center">
                <h1 class="text-4xl">
                    Latest <span class="text-blue-500">ShopeLoppe</span> News
                </h1>
    
                <h2 class="inline-flex mt-2">By Olga K.</h2>
    
                <p class="text-sm mt-14">
                    Another year. Another update. 
                    I'm going to keep you guys up to speed with what's going on!
                </p>
    
                <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                    <!--  Languages -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                            <option value="category" disabled selected>Language
                            </option>
                            <option value="personal">Danish</option>
                            <option value="business">English</option>
                        </select>
    
                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                             height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </div>
    
                    <!-- Other Filters -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                            <option value="category" disabled selected>Other Filters
                            </option>
                            <option value="foo">Foo
                            </option>
                            <option value="bar">Bar
                            </option>
                        </select>
    
                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                             height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>
                    </div>
    
                    <!-- Search -->
                    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
                        <form method="GET" action="#">
                            <input type="text" name="search" placeholder="Find something"
                                   class="bg-transparent placeholder-black font-semibold text-sm">
                        </form>
                    </div>
                </div>
            </header>
        </section>
        
        <div class="max-w-xl mx-auto mt-20 text-center">
            <table style="width:100%" class="table-auto">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Reference</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{$product->products_id}} </td>
                        <td> {{$product->products_reference}} </td>
                        <td> {{$product->products_price}} </td>                                                
                    </tr>
                        @foreach ($product->description as $description)
                        <tr>
                            <td colspan="3"> {{ $description->products_description_name}} </td>                            
                                                                       
                        </tr>
                        <tr>
                            <td colspan="3"> {{$description->products_description_short_description}} </td>
                        </tr>
                        <tr>
                            <td colspan="3"><p> {{$description->products_description_description}}</p> </td>
                        </tr>
                        @endforeach                  
                    
                    @endforeach 
                              
                </tbody>
              </table>            
                     
        </div>
    </body>
</html>
