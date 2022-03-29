<div>

    <span-w  class="text-black font-principal md:text-3xl text-xl text-center font-semibold py-5">Comentarios Recientes</span-w>


    <div class=" bg-white border-gray-300 grid md:grid-cols-3 grid-cols-1 break-words ">

    
        @forelse ($comments as $comment => $value)
                
        <div class="col p-4">
            
            <div class="grid grid-cols-2">

                <div class="px-3 ">
                    <span class="font-semibold text-gray-800 text-lg">{{ $value->user->name }}</span>
                </div>
                
                <div class="text-right ">
                    <span class="font-light px-3 text-gray-600 text-sm md:text-base "><i class="fas fa-calendar-week  inline-block text-sky-500"></i>
                        {{ $rest = substr($value->created_at, 0, -9) }}
                    </span> 
                </div>
            </div>
            
            @if (Auth::User()->rol == 'mod' or Auth::User()->rol == 'admin')
                <div class="col  justify-self-end w-min  text-white">
                    {{-- <a href="{{ route('comments.delete-comments', Crypt::encrypt($value->id)) }}"><i
                        class="fas text-red-600 fa-trash"></i>
                    </a> --}}
                </div>
            @endif

            <p class="mt-1 p-3 break-words font-light text-gray-700 md:text-lg text-base">{{ $value->content }}</p>

        </div> 

        @empty
            <div class="bg-black ">
                <p class="text-xl text-gray-500 font-semibold  ">¡There are not comments yet :( !</p>
            </div>
        @endforelse

    </div>


</div>
