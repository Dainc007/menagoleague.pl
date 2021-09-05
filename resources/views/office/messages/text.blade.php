<section class="messages-text">
    <div class="messages-chat">
        <div class="text-entry" player-id="1">
            <div class="player-info">
                <div class="player-overall">
                    <p>OGL</p>
                    <p class="overall">
                        82
                    </p>
                </div>
                <div class="player-photo">
                    <img src="{{ url('/images/shields/' . rand(1, 8) . '.png') }}">
                </div>
                <div class="player-about">
                    <p class="name">
                        Silvan
                    </p>
                    <p class="surname">
                        HEFTI
                    </p>
                    <p class="position">
                        <span class="circle orange">
        
                        </span>
                        <span class="shortcut">
                            PO
                        </span>
                        <span class="pos-type">
                            Rotacyjny
                        </span>
                    </p>
                </div>
            </div>
            <div class="player-morals">
                <p>Morale</p>
                <span class="progress-bar" 
                    data-progress="@php echo rand(1,100)@endphp%">
    
                </span>
                <p>
                    Szczęśliwy
                </p>
            </div>
        </div>
        <div class="text-full active" message-id="1">
            <div class="receiver">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae est mollitia, magnam, at accusantium nisi officiis unde adipisci qui corrupti excepturi aliquam ratione! Molestias quia nisi quidem alias fugiat dignissimos!
                </p>
            </div>
            <div class="sender">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima harum illum perspiciatis quod similique, ipsum assumenda voluptatum, veritatis exercitationem optio quo reprehenderit magnam itaque possimus accusamus ex dolor laudantium!
                </p>
            </div>
            <div class="receiver">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae est mollitia, magnam, at accusantium nisi officiis unde adipisci qui corrupti excepturi aliquam ratione! Molestias quia nisi quidem alias fugiat dignissimos!
                </p>
            </div>
            <div class="sender">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima harum illum perspiciatis quod similique, ipsum assumenda voluptatum, veritatis exercitationem optio quo reprehenderit magnam itaque possimus accusamus ex dolor laudantium!
                </p>
            </div>
            <div class="receiver">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae est mollitia, magnam, at accusantium nisi officiis unde adipisci qui corrupti excepturi aliquam ratione! Molestias quia nisi quidem alias fugiat dignissimos!
                </p>
            </div>
            <div class="sender">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima harum illum perspiciatis quod similique, ipsum assumenda voluptatum, veritatis exercitationem optio quo reprehenderit magnam itaque possimus accusamus ex dolor laudantium!
                </p>
            </div>
            <div class="reply">
    
            </div>
        </div>
        @for ($i=2;$i<10;$i++) 
        <div class="text-full" message-id="{{$i}}">
            <div class="receiver">
                <p>
                    {{$i}}
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae est mollitia, magnam, at accusantium nisi officiis unde adipisci qui corrupti excepturi aliquam ratione! Molestias quia nisi quidem alias fugiat dignissimos!
                </p>
            </div>
            <div class="sender">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima harum illum perspiciatis quod similique, ipsum assumenda voluptatum, veritatis exercitationem optio quo reprehenderit magnam itaque possimus accusamus ex dolor laudantium!
                </p>
            </div>
            <div class="receiver">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae est mollitia, magnam, at accusantium nisi officiis unde adipisci qui corrupti excepturi aliquam ratione! Molestias quia nisi quidem alias fugiat dignissimos!
                </p>
            </div>
            <div class="sender">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima harum illum perspiciatis quod similique, ipsum assumenda voluptatum, veritatis exercitationem optio quo reprehenderit magnam itaque possimus accusamus ex dolor laudantium!
                </p>
            </div>
            <div class="receiver">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae est mollitia, magnam, at accusantium nisi officiis unde adipisci qui corrupti excepturi aliquam ratione! Molestias quia nisi quidem alias fugiat dignissimos!
                </p>
            </div>
            <div class="sender">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima harum illum perspiciatis quod similique, ipsum assumenda voluptatum, veritatis exercitationem optio quo reprehenderit magnam itaque possimus accusamus ex dolor laudantium!
                </p>
            </div>
            <div class="reply">
    
            </div>
        </div>
        @endfor
    </div>
    <div class="messages-inbox hidden">
        <div class="text-full active" message-id="1" class="active">
            <p>
                Good Morning, Boss
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit nulla dolor molestiae repellendus doloremque consequatur ullam facilis quod explicabo ex quaerat, id modi minus at impedit animi ipsam libero dolorum?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestias, ad temporibus natus sint autem officiis saepe pariatur modi vel perferendis obcaecati sapiente et dolores quos voluptates. Deleniti, suscipit labore.Maxime animi corporis rerum dolores dolorum adipisci eligendi placeat accusamus, eos numquam, quisquam, vel molestias totam ipsum! Veritatis animi suscipit corporis expedita nobis, sit at. Rem necessitatibus itaque nihil laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestias, ad temporibus natus sint autem officiis saepe pariatur modi vel perferendis obcaecati sapiente et dolores quos voluptates. Deleniti, suscipit labore.Maxime animi corporis rerum dolores dolorum adipisci eligendi placeat accusamus, eos numquam, quisquam, vel molestias totam ipsum! Veritatis animi suscipit corporis expedita nobis, sit at. Rem necessitatibus itaque nihil laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestias, ad temporibus natus sint autem officiis saepe pariatur modi vel perferendis obcaecati sapiente et dolores quos voluptates. Deleniti, suscipit labore.Maxime animi corporis rerum dolores dolorum adipisci eligendi placeat accusamus, eos numquam, quisquam, vel molestias totam ipsum! Veritatis animi suscipit corporis expedita nobis, sit at. Rem necessitatibus itaque nihil laborum.
            </p>
            <div class="accept">
                <button>
                    Przejdź do ...
                </button>
            </div>
        </div>
        @for ($i=0;$i<5;$i++)
        <div class="text-full" message-id="{{$i}}">
            <p>
                Good Morning, Boss {{$i}}
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit nulla dolor molestiae repellendus doloremque consequatur ullam facilis quod explicabo ex quaerat, id modi minus at impedit animi ipsam libero dolorum?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestias, ad temporibus natus sint autem officiis saepe pariatur modi vel perferendis obcaecati sapiente et dolores quos voluptates. Deleniti, suscipit labore.Maxime animi corporis rerum dolores dolorum adipisci eligendi placeat accusamus, eos numquam, quisquam, vel molestias totam ipsum! Veritatis animi suscipit corporis expedita nobis, sit at. Rem necessitatibus itaque nihil laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestias, ad temporibus natus sint autem officiis saepe pariatur modi vel perferendis obcaecati sapiente et dolores quos voluptates. Deleniti, suscipit labore.Maxime animi corporis rerum dolores dolorum adipisci eligendi placeat accusamus, eos numquam, quisquam, vel molestias totam ipsum! Veritatis animi suscipit corporis expedita nobis, sit at. Rem necessitatibus itaque nihil laborum.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestias, ad temporibus natus sint autem officiis saepe pariatur modi vel perferendis obcaecati sapiente et dolores quos voluptates. Deleniti, suscipit labore.Maxime animi corporis rerum dolores dolorum adipisci eligendi placeat accusamus, eos numquam, quisquam, vel molestias totam ipsum! Veritatis animi suscipit corporis expedita nobis, sit at. Rem necessitatibus itaque nihil laborum.
            </p>
            <div class="accept">
                <button>
                    Przejdź do ...
                </button>
            </div>
        </div>
        @endfor
    </div>
    <div class="messages-notifications hidden">
        <div class="text-full active" message-id="1" class="active">
            <p>
                Good Morning, Boss (notification)
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit nulla dolor molestiae repellendus doloremque consequatur ullam facilis quod explicabo ex quaerat, id modi minus at impedit animi ipsam libero dolorum?
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit molestias, ad temporibus natus sint autem officiis saepe pariatur modi vel perferendis obcaecati sapiente et dolores quos voluptates. Deleniti, suscipit labore.Maxime animi corporis rerum dolores dolorum adipisci eligendi placeat accusamus, eos numquam, quisquam, vel molestias totam ipsum! Veritatis animi suscipit corporis expedita nobis, sit at. Rem necessitatibus itaque nihil laborum.
            </p>
        </div>
        @for ($i=0;$i<5;$i++)
        <div class="text-full" message-id="{{$i}}">
            <p>
                Good Morning, Boss {{$i}}
            </p>
            <p>
                Lionel Messi has arrived to your stadium.
            </p>
            <p>
                We are so happy for this success, I wish you and this footballer the best!
            </p>
            
        </div>
        @endfor
    </div>
</section>