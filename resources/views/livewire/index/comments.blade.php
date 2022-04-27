<div>

    <span-w class="text-black font-principal md:text-3xl text-xl text-center font-semibold py-5">Comentarios Recientes
    </span-w>


    <div class=" bg-white border-gray-300 grid md:grid-cols-3 grid-cols-1 break-words ">


        @forelse ($comments as $comment => $value)
            <div class="col p-4">

                <div class="grid grid-cols-3">

                    @if (Auth::User()->id == $value->users_id)
                        <div class="px-3 ">
                            <span class="font-semibold text-gray-800 text-lg">Tú</span>
                        </div>
                    @else
                        <div class="px-3 ">
                            <span class="font-semibold text-gray-800 text-lg">{{ $value->user->name }}</span>
                        </div>
                    @endif

                    <div class="text-right ">
                        <span class="font-light px-3 text-gray-600 text-sm md:text-base "><i
                                class="fas fa-calendar-week  inline-block text-sky-500"></i>
                            {{ $rest = substr($value->created_at, 0, -9) }}
                        </span>
                    </div>
                    @if (Auth::User()->rol == 'admin' || Auth::User()->id == $value->users_id)
                        <div class="col my-1 justify-self-center w-min  text-white">
                            <a href="{{ route('comments.delete-comment', Crypt::encrypt($value->id)) }}"><i
                                    class="fas text-red-600 fa-trash"></i>
                            </a>
                        </div>
                    @endif
                </div>

                <p class="mt-1 p-3 break-words font-light text-gray-700 md:text-lg text-base">{{ $value->content }}
                </p>

            </div>

        @empty
            <div class="bg-black ">
                <p class="text-xl text-gray-500 font-semibold  ">¡There are not comments yet :( !</p>
            </div>
        @endforelse

    </div>


</div>
