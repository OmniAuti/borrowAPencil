<x-layout>
    <main id="main" class="main h-fit pb-12 relative w-100">
        <!-- Home -->
        <section id="section--home-hero" class="pl-16 mb-52 flex items-start h-[calc(100vh_-_64px)]">
            <div class="h-full flex flex-col justify-evenly w-5/6 md:pl-24 pl-0 z-50">
                <div >
                    <h1 class="whitespace-nowrap text-[12rem] leading-none font-extralight">Can I 
                    <br>borrow 
                    <br>a 
                    <div id="hero-word-rotation--container" class="inline-block w-fit absolute ml-5 h-[10px] overflow-hidden pb-[13rem]">
                        <span class="text-red-600 block">pencil<span class="text-red-600">?</span></span>
                        <span class="text-blue-500 block" style="opacity: 0">notebook<span class="text-blue-500">?</span></span>
                    </div>
                    </h1>
                </div>
                
                <div class="text-left">
                    <p class="w-1/2 text-left tracking-wide font-light text-[2rem]">An easy and effortless community resource for those who are struggling to find the supplies needed to succeed in school and educational endeavors</p>
                </div>
                <div class="flex w-full items-center relative">
                    <a class="mr-6 text-center text-[2rem] w-full px-10 py-4 lg:py-8 rounded-md border border-blue-500  bg-blue-500 backdrop-blur-md hover:border-blue-100 hover:bg-blue-500/[0.25] transition-colors max-w-[320px]" href="/borrow">
                        Browse 
                        <br class="block lg:hidden">
                        Supplies
                    </a>
                    <a class="mr-6 text-center text-[2rem] w-full px-10 py-4 lg:py-8 rounded-md border border-[var(--border)] bg-black/[.25] hover:bg-transparent backdrop-blur-md hover:border-blue-500 transition-colors max-w-[320px]" href="/offer">
                        Offer 
                        <br class="block lg:hidden">
                        Supplies
                    </a>
                    <a class="mr-6 text-center text-[2rem] w-full px-10 py-4 lg:py-8 rounded-md border border-[var(--border)] bg-black/[.25] hover:bg-transparent  backdrop-blur-md hover:border-green-500 transition-colors max-w-[320px]" href="/ask-for">
                        Ask 
                        <br class="block lg:hidden">
                        <span class="whitespace-nowrap">For Supplies</span>
                    </a>
                </div>
            </div>
            <div class="block h-[calc(100vh_-_64px)] relative">
                <div class="bg-green-500 h-[90%] w-[220px] absolute -bottom-10 -right-[260px] bg-[url('/public/imgs/heroPillar.png')] rounded-md">

                </div>
                <div class="w-[500px] h-[500px] rounded-full bg-blue-500 absolute bg-[url('/public/imgs/heroCircle.png')] -right-[450px] -bottom-[50px] z-20">

                </div>
                <div class="bg-red-600 w-[600px] h-[600px] absolute bg-[url('/public/imgs/heroTriangle.png')] -bottom-[350px] -right-[150px] rotate-[45deg] rounded-lg">

                </div>
            </div>
        </section>
        <!-- About -->
        <article id="section--home-about" class="mb-52 max-h-[700px]">
            <div class="px-32 bg-[url('/public/imgs/heroCircle.png')] grid grid-cols-2 grid-rows-1 mb-4 relative">
                <div class="flex flex-col justify-center items-start">
                    <h2 class="text-[6rem] w-full text-center">Borrow For Good</h2>
                    <p class="font-light text-base">A simple request from a student can often seem like nothing, but for some, it may represent an underlying problem that faces families around the country. Getting supplies for the classroom can be an expensive and simply unatainable as the school year carries on. We're here to connect those that can afford to give a little to help those that need a little.</p>
                    <br>
                    <p class="font-light text-base">In the United States there are an estimated 11.6 million children living below the poverty line. For these families, purchasing school supplies is not something that fits in the budget.</p>
                </div>
              
                <div class="w-full text-base z-10 -mt-6 col-start-1 col-end-3">
                    <br>    
                    <p class="font-light">According to a
                        <a target="_blank" class="underline underline-offset-2 decoration-1" href="https://www.lendingtree.com/credit-cards/study/back-to-school-spending-leads-many-into-debt/#:~:text=1%20in%203%20parents%20of,school%20supplies%20as%20expenses%20increase.">
                        <i> 2021 study by Lending Tree</i>
                        </a>, 1 in 3 parents of school-age children expect to go into debt when shopping for back-to-school supplies. For parents with children attending schools that require hybrid learning due to the pandemic, 42% believe they'll go in debt while paying for school supplies.
                    </p>
                </div>
                <div class="flex items-center justify-center col-start-2 col-end-3 row-start-1 row-end-2 px-10 -mb-16 h-[400px]">
                    <div class="border w-full h-4/6 relative backdrop-blur-md rounded-md bg-black/[0.25] ml-12">
                    <div class="border w-full h-full absolute backdrop-blur-md rounded-md right-10 top-10 pl-8 bg-black/[0.5] ">
                        <div class="w-full h-1/2 text-center py-12 px-10">
                            <h3 class="mb-8 text-lg">The cost of school supplies <br> <i>on average</i>
                            </h3>
                            <div class="flex items-center text-base">
                                <div class="sm:w-1/5 w-full mx-1">
                                    <p class="font-light sm:text-left mb-1 text-center">Elementary</p>
                                    <div class="bg-red-500 py-1 min-w-fit mx-auto sm:mx-0 px-4 sm:px-0 w-1/5 sm:w-full backdrop-blur-lg">$1,017.37
                                        
                                    </div>
                                </div>
                                <div class="sm:w-2/5 w-full mx-1">
                                    <p class="font-light sm:text-left text-center mb-1 xl:whitespace-nowrap">Middle School
                                        
                                    </p>
                                    <div class="bg-blue-500 py-1 mx-auto sm:mx-0 min-w-fit px-8 sm:px-0 w-2/5 sm:w-full backdrop-blur-lg">$1,277.35

                                    </div>
                                </div>
                                <div class="sm:w-3/5 w-full mx-1">
                                    <p class="font-light sm:text-left text-center mb-1">High School

                                    </p>
                                    <div class="bg-green-500 py-1 mx-auto sm:mx-0 min-w-fit px-10 sm:px-0 w-3/5 sm:w-full backdrop-blur-lg">$1,667.90

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <!-- Mission -->
        <section class="mt-50 px-32">
            <h2 class="text-[6rem] w-full text-center">Our Goal</h2>
            <p class="font-light text-base w-1/2 text-center mx-auto mb-20">To build an easy to use resource for those who can afford to help students and teachers in their community.</p>
            <div class="h-[240px] flex items-center justify-around w-full">
                <a href="" class="w-1/3 p-10 flex items-center justify-center group">
                    <div class="text-center flex items-center justify-start flex-col">
                        <img class="h-[100px] mx-auto mb-10" src="../imgs/borrow.svg" alt="">
                        <h4 class="text-lg group-hover:underline decoration-1 underline-offset-2">Borrow</h4>
                        <p class="text-base">Browse school supplies that are currently being offered</p>
                    </div>
                </a>
                <a href="" class="w-1/3 p-10 flex items-center justify-center group">
                    <div class="text-center flex items-center justify-start flex-col">
                        <img class="h-[100px] mx-auto mb-10" src="../imgs/offer.svg" alt="">
                        <h4 class="text-lg group-hover:underline decoration-1 underline-offset-2">Offer</h4>
                        <p class="text-base">Offer school supplies for students and teachers</p>
                    </div>
                </a>
                <a href="" class="w-1/3 p-10 flex items-center justify-center group">
                    <div class="text-center flex items-center justify-start flex-col">
                        <img class="h-[90px] mx-auto mb-10" src="../imgs/asking.svg" alt="">
                        <h4 class="text-lg group-hover:underline decoration-1 underline-offset-2">Ask</h4>
                        <p class="text-base">Make a request for school supplies for your classroom or student</p>
                    </div>
                </a>
            </div>
        </section>
    </main>
    <script>
        const words = [
            { item: "pencil", color: "text-red-500" },
            { item: "notebook", color: "text-blue-500" },
            { item: "ruler", color: "text-green-500" },
            { item: "highlighter", color: "text-yellow-500" },
            { item: "backpack", color: "text-purple-500" },
            { item: "calculator", color: "text-slate-500" },
            { item: "binder", color: "text-pink-500" },
        ];

        const wordContainer = document.getElementById('hero-word-rotation--container');
        const handleTransform = (idx, interval) => {
            var opacityGoing = 1;
            var opacityComing = 0;
            var rotation = 0;

            interval = setInterval(() => {
                // setTransformInterval(idx);
                idx++;
                opacityGoing -= 0.01;
                opacityComing += 0.005;
                rotation -= 0.75;
                rotation <= -100 ? rotation = -100 : rotation = rotation;
                wordContainer.firstElementChild.style.transform = `translateY(${rotation}%)`
                wordContainer.lastElementChild.style.transform = `translateY(${rotation}%)`
                wordContainer.firstElementChild.style.opacity = opacityGoing;
                wordContainer.lastElementChild.style.opacity = opacityComing;
                
                    if (idx >= 100) {
                        idx = 100;
                    }
                }, 1);

                setTimeout(() => {
                clearInterval(interval);
                // setTransformInterval(0);
                }, 1000);
        };

        var handleTextInterval;
        var transformEl;

        var i = 1;
        var j = 2;

        handleTextInterval = setInterval(() => {
            if (location.pathname !== "/") {
                clearInterval(handleTextInterval);
            }
            var YIdx = 0;
            handleTransform(YIdx, transformEl);

            setTimeout(() => {
                const newArr = [words[i], words[j]];
                wordContainer.innerHTML = "";
                wordContainer.innerHTML = `                        
                            <span class="${words[i].color} block" style="opacity: 1">${words[i].item}<span class="${words[i].color}">?</span></span>
                            <span class="${words[j].color} block" style="opacity: 0">${words[j].item}<span class="${words[j].color}">?</span></span>`;
                i++;
                j++;
                if (j >= words.length) {
                    j = 0;
                }
                if (i >= words.length) {
                    i = 0;
                }
            }, 1000);
        }, 3500);
    </script>
</x-layout>
