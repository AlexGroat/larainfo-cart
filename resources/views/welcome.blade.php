<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add to cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div  class="bg-white">
        <header>
            <div class="container px-6 py-3 mx-auto">
                <div class="flex items-center justify-between">
                    
                    
                    <div class="flex items-center justify-end w-full">
                        <button" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                            
                        </button>
                    </div>
                </div>
                <nav  class="p-6 mt-4 text-white bg-black sm:flex sm:justify-center sm:items-center">
                    <div class="flex flex-col sm:flex-row">
                                      
                    </div>
                </nav>
            </div>
        </header>
        
        <main class="my-8">
            @yield('content')
        </main>
    
    </div>
</body>
</html>