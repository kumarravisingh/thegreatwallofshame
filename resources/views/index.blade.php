@extends('layouts.app')
@section('body')
    <body class="overflow-y-scroll flex items-center justify-center" style="background: #edf2f7;">
    <div class="font-sans bg-grey-lighter flex flex-col min-h-screen w-full">
        <div>
            <div class="bg-blue-500">
                <div class="container mx-auto px-4">
                    <div class="flex items-center md:justify-between py-6">
                        <div class="w-1/4 md:hidden">
                            <svg class="fill-current text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/></svg>
                        </div>
                        <div class="w-1/2 md:w-auto text-center text-white text-2xl font-medium">The Great Wall Of Shame</div>
                        <div class="w-1/2 md:flex text-center">
                            <div class="relative w-full text-gray-600">
                                <input type="search" name="search" placeholder="Search" class="w-full bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
      <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="w-1/4 md:w-auto md:flex text-right">
                            <div>
                                <img class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/11132523?s=460&u=fa8cc7bcb731c70d0ba5f42e77d8a9b82781d692&v=4" alt="">
                            </div>
                            <div class="hidden md:block md:flex md:items-center ml-2">
                                <span class="text-white text-sm mr-1">Kumar Ravi</span>
                                <div>
                                    <svg class="fill-current text-white h-4 w-4 block opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4.516 7.548c.436-.446 1.043-.481 1.576 0L10 11.295l3.908-3.747c.533-.481 1.141-.446 1.574 0 .436.445.408 1.197 0 1.615-.406.418-4.695 4.502-4.695 4.502a1.095 1.095 0 0 1-1.576 0S4.924 9.581 4.516 9.163c-.409-.418-.436-1.17 0-1.615z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden bg-blue-600 md:block md:bg-white md:border-b">
                <div class="container mx-auto px-4">
                    <div class="md:flex justify-end">
                        <div >
                            <ul class="flex pl-0 list-none rounded my-2">
                                <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-gray-200"><a class="page-link" href="#">Previous</a></li>
                                <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 hover:bg-gray-200"><a class="page-link" href="#">1</a></li>
                                <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 hover:bg-gray-200"><a class="page-link" href="#">2</a></li>
                                <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 hover:bg-gray-200"><a class="page-link" href="#">3</a></li>
                                <li class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 rounded-r hover:bg-gray-200"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-grow container mx-auto sm:px-4 pt-6 pb-2">
            <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
                <div class="border-b px-6">
                    <div class="justify-between -mb-px">
                        <div class="flex flex-row">
                            <div class="flex-col w-1/3 px-4 py-4">
                                <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <span class="font-light text-gray-600">mar 10, 2019</span>
                                        <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="#">Design</a>
                                    </div>
                                    <div class="mt-2">
                                        <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">Accessibility tools</a>
                                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.</p>
                                    </div>
                                    <div class="flex justify-between items-center mt-4">
                                        <a class="text-blue-600 hover:underline" href="#">Read more</a>
                                        <div>
                                            <a class="flex items-center" href="#">
                                                <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80" alt="avatar">
                                                <h1 class="text-gray-700 font-bold">Khatab wedaa</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-col w-1/3 px-4 py-4">
                                <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <span class="font-light text-gray-600">mar 10, 2019</span>
                                        <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="#">Design</a>
                                    </div>
                                    <div class="mt-2">
                                        <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">Accessibility tools</a>
                                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.</p>
                                    </div>
                                    <div class="flex justify-between items-center mt-4">
                                        <a class="text-blue-600 hover:underline" href="#">Read more</a>
                                        <div>
                                            <a class="flex items-center" href="#">
                                                <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80" alt="avatar">
                                                <h1 class="text-gray-700 font-bold">Khatab wedaa</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-col w-1/3 px-4 py-4">
                                <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <span class="font-light text-gray-600">mar 10, 2019</span>
                                        <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="#">Design</a>
                                    </div>
                                    <div class="mt-2">
                                        <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">Accessibility tools</a>
                                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.</p>
                                    </div>
                                    <div class="flex justify-between items-center mt-4">
                                        <a class="text-blue-600 hover:underline" href="#">Read more</a>
                                        <div>
                                            <a class="flex items-center" href="#">
                                                <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80" alt="avatar">
                                                <h1 class="text-gray-700 font-bold">Khatab wedaa</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="flex-col w-1/3 px-4 py-4">
                                <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <span class="font-light text-gray-600">mar 10, 2019</span>
                                        <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500" href="#">Design</a>
                                    </div>
                                    <div class="mt-2">
                                        <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">Accessibility tools</a>
                                        <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque.</p>
                                    </div>
                                    <div class="flex justify-between items-center mt-4">
                                        <a class="text-blue-600 hover:underline" href="#">Read more</a>
                                        <div>
                                            <a class="flex items-center" href="#">
                                                <img class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block" src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=373&q=80" alt="avatar">
                                                <h1 class="text-gray-700 font-bold">Khatab wedaa</h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white border-t bottom-0">
            <div class="container mx-auto px-4">
                <div class="md:flex justify-between items-center text-sm">
                    <div class="text-center md:text-left py-3 md:py-4 border-b md:border-b-0">
                        <a href="#" class="no-underline text-grey-dark mr-4">Home</a>
                        <a href="#" class="no-underline text-grey-dark">Legal &amp; Privacy</a>
                    </div>
                    <div class="md:flex md:flex-row-reverse items-center py-4">
                        <div class="text-grey text-center md:mr-4">&copy;  {{\Carbon\Carbon::today()->year}} The Great Wall Of Shame</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @livewireScripts
    </body>
@endsection
