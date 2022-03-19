<div>

    <div class="bg-black px-3  grid md:grid-cols-4 grid-cols-1 items-center">        

        @foreach ($recent as $post)

            <section class="px-4 col gradient-card-recent  transform hover:scale-95 motion-reduce:transform-none hover:brightness-150 duration-500 lg:pt-[20px] pb-5 lg:pb-5 bg-#000">

                <div class="rounded-lg overflow-hidden ">
                    <img src="{{ asset('/storage/images/'.$post->file)}}" alt="" class="w-max" />

                    <div class=" p-7 sm:p-9 md:p-4 xl:p-5 text-center">

                        <div class="text-gray-200 pb-2 text-sm text-right"> 
                            Categoria:  {{ $post->category->name}} </div>

                        <h3>
                            <div href="javascript:void(0)"
                                class="
                                        break-words
                                        font-semibold
                                        text-gray-100 text-2xl
                                        sm:text-[25px]
                                        md:text-2xl
                                        lg:text-[22px]
                                        xl:text-2xl
                                        2xl:text-[22px]
                                        mb-4
                                        block">
                                {{ $post->name }}
                        </div>
                        </h3>

                        <p class="text-base text-justify break-words text-gray-400 px-5 leading-relaxed mb-7">
                            {{ $rest = substr($post->description, 0, 180) . '...' }}
                        </p>

                        {{-- }}" --}}
                        <a href="{{ route('products.crud.show-product', ['id' => $post->id])}}"
                            class="
                            transition ease-in-out delay-150 bg-white
                            hover:-translate-y-1 hover:scale-110 hover:bg-transparent duration-200
                            inline-block py-2 px-7 border border-[#470404] rounded-full
                            font-semibold text-base text-gray-800
                            hover:text-white        
                            ">
                            See More
                        </a>

                    </div>
                </div>

            </section>

        @endforeach

    </div></div>
