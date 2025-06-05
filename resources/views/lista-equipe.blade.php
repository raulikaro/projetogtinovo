@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-topo></x-topo>
 <div class="items-center

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
      <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
          <h2 class="nosa equipe conheca nossa historia que fara cada profissional com habilidades para melhor te ensinar">nossa historia </h2>
          <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">conheca nossa historia para voce aprender de uma maneira melhor</p>
      </div> 
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
        @foreach ($equipe as $pessoa)
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="#">{{$pessoa->nome}}</a>
                  </h3>
                  <span class="text-gray-500 dark:text-gray-400">{{$pessoa->email}}</span>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">raullages10@gmail.com </p>
                  <ul class="flex space-x-4 sm:mt-0">

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">estudante de ti .</p>
           
                  </ul>
              </div>
          </div> 
          @endforeach
      </div>  
  </div>
</section>