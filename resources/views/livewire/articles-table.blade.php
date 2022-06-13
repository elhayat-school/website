<div>

    <div class="sm:px-6 w-full">
        <div class="px-4 md:px-10 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    Articles</p>
                <div
                    class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 cursor-pointer rounded">
                    <p>Sort By:</p>
                    <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                        <option class="text-sm text-indigo-800">Latest</option>
                        <option class="text-sm text-indigo-800">Oldest</option>
                        <option class="text-sm text-indigo-800">Latest</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <div class="sm:flex items-center justify-between">
                <div class="flex items-center">
                    <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800"
                        href=" javascript:void(0)">
                        <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                            <p>All</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                        href="javascript:void(0)">
                        <div
                            class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Done</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                        href="javascript:void(0)">
                        <div
                            class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Pending</p>
                        </div>
                    </a>
                </div>
                <a href="{{route('articles.create')}}"
                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                    <p class="text-sm font-medium leading-none text-white">Ecrire un Article</p>
                </a>
            </div>
            <div class="mt-7 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tbody>
                        @foreach ($articles as $article )
                        <tr tabindex="0"
                            class="focus:outline-none h-16 border border-gray-100  rounded">

                            <td class="">
                                <a href="{{route('articles.show', $article->id)}}" class="flex items-center pl-5 hover:underline">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                        {{$article->title}}</p>
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg1.svg" alt="clip">
                                </a>
                            </td>
                            {{-- <td class="pl-24">
                                <div class="flex items-center">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg2.svg" alt="tag">
                                    <p class="text-sm leading-none text-gray-600  ml-2">Urgent</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="flex items-center">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg3.svg" alt="list">
                                    <p class="text-sm leading-none text-gray-600 ml-2">04/07</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="flex items-center">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg4.svg" alt="chat">
                                    <p class="text-sm leading-none text-gray-600  ml-2">23</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="flex items-center">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg5.svg"
                                        alt="paper clip">
                                    <p class="text-sm leading-none text-gray-600  ml-2">04/07</p>
                                </div>
                            </td> --}}
                            <td class="pl-5">
                                <button
                                    class="py-3 px-3 text-sm focus:outline-none leading-none text-marojelblue bg-alicoblue rounded">{{$article->created_at->format('d-M-y')}}</button>
                            </td>

                            <td>
                                <div class="relative px-5 pt-2 flex justify-end space-x-7">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" stroke="#5FA7DE" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                                        <line x1="16" y1="5" x2="19" y2="8" />
                                      </svg>
                                     <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="28" height="28" viewBox="0 0 24 24" stroke-width="1" stroke="#9779F7" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <line x1="4" y1="7" x2="20" y2="7" />
                                        <line x1="10" y1="11" x2="10" y2="17" />
                                        <line x1="14" y1="11" x2="14" y2="17" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                      </svg>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style>
        .checkbox:checked+.check-icon {
            display: flex;
        }
    </style>
</div>
