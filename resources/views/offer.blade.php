<x-layout>
    <main id="main" class="main p-10 w-100 h-[calc(100vh_-_var(--headerHeight))] mx-auto">
        <h1 class="text-[6rem] leading-none font-extralight mb-[calc(var(--headerHeight)_/_2)]">Have School Supplies To Offer?</h1>
        
        <div class="grid grid-cols-2 grid-rows-1 gap-20 h-full">
            <div class="border col-start-1 col-end-2 row-start-1 row-end-2">
                <form action="POST">
                    <!-- <div>
                        <x-form_label for="type">Type Of Post</x-form_label>
                        <select name="type" id="type" class="text-[var(--black)]">
                            <option selected disabled value="">Select One</option>
                            <option value="ask">Ask For Supplies</option>
                            <option value="offer">Offer Supplies</option>
                        </select>
                        <x-form_error name="type"></x-form_error>
                    </div> -->
                    <div>
                        <x-form_label for="category">Supply Category</x-form_label>
                        <select id="category" class="text-[var(--black)]">
                            <option selected disabled value="">Select One Category</option>
                            <option value="notebooks_paper">Notebooks & Paper</option>
                            <option value="binders_folders">Binders & Folders</option>
                            <option value="scissors_glue">Scissors & Glue</option>
                            <option value="pencil_cases">Pencil Cases</option>
                            <option value="pens_pencils">Pens & Pencils</option>
                            <option value="sharpeners_erasers">Sharpeners & Erasers</option>
                            <option value="markers_highlighters">Markers & Highlighters</option>
                            <option value="art_supplies">Art Supplies</option>
                            <option value="hygiene_cleaning">Hygiene & Cleaning</option>
                            <option value="rulers_calculators">Rulers & Calculators</option>
                            <option value="electronics">Electronics</option>
                            <option value="backpacks_bags">Backpacks & Bags</option>
                            <option value="lunchbox_bottle">Lunchboxes & Water Bottles</option>
                            <option value="study_materials">Study Materials & Flashcards</option>
                            <option value="textbooks">Textbooks</option>
                            <option value="books">Miscellaneous Books</option>
                        </select>
                    </div>
                    <div>
                        <x-form_label for="level">Grade Level</x-form_label>
                        <select name="level" id="level" class="text-[var(--black)]">
                            <option disabled selected value="">Select One</option>
                            <option value="preschool">Preschool</option>
                            <option value="kindergarten">Kindergarten</option>
                            <option value="elementary">Elementary</option>
                            <option value="middle">Middle School</option>
                            <option value="high">High School</option>
                            <option value="College">College</option>
                        </select>
                    </div>
                    <div>
                        <x-form_label for="condition">Condition</x-form_label>
                        <select name="condition" id="condition" class="text-[var(--black)]">
                            <option selected disabled value="">Select One</option>
                            <option value="new">New</option>
                            <option value="like_new">Like New</option>
                            <option value="slightly_used">Slightly Used</option>
                            <option value="used">Used</option>
                            <option value="heavily_used">Heavily Used</option>
                        </select>
                    </div>
                    <div>
                        <x-form_label for="details">Any other details?</x-form_label>
                        <textarea name="details" id="detail" class="text-[var(--black)]" placeholder="This..."></textarea>
                    </div>
                    <div>
                        <x-form_label for="zipcode">Zipcode</x-form_label>
                        <select id="zipcode" name="zipcode" class="text-[var(--black)]">
                            <option value="">Select ZIP Code</option>
                            <option value="60290">60290</option>
                            <option value="60601">60601</option>
                            <option value="60602">60602</option>
                            <option value="60603">60603</option>
                            <option value="60604">60604</option>
                            <option value="60605">60605</option>
                            <option value="60606">60606</option>
                            <option value="60607">60607</option>
                            <option value="60608">60608</option>
                            <option value="60610">60610</option>
                            <option value="60611">60611</option>
                            <option value="60614">60614</option>
                            <option value="60615">60615</option>
                            <option value="60618">60618</option>
                            <option value="60619">60619</option>
                            <option value="60622">60622</option>
                            <option value="60623">60623</option>
                            <option value="60624">60624</option>
                            <option value="60628">60628</option>
                            <option value="60609">60609</option>
                            <option value="60612">60612</option>
                            <option value="60613">60613</option>
                            <option value="60616">60616</option>
                            <option value="60617">60617</option>
                            <option value="60620">60620</option>
                            <option value="60621">60621</option>
                            <option value="60625">60625</option>
                            <option value="60626">60626</option>
                            <option value="60629">60629</option>
                            <option value="60630">60630</option>
                            <option value="60632">60632</option>
                            <option value="60636">60636</option>
                            <option value="60637">60637</option>
                            <option value="60631">60631</option>
                            <option value="60633">60633</option>
                            <option value="60634">60634</option>
                            <option value="60638">60638</option>
                            <option value="60641">60641</option>
                            <option value="60642">60642</option>
                            <option value="60643">60643</option>
                            <option value="60646">60646</option>
                            <option value="60647">60647</option>
                            <option value="60652">60652</option>
                            <option value="60653">60653</option>
                            <option value="60656">60656</option>
                            <option value="60660">60660</option>
                            <option value="60661">60661</option>
                            <option value="60664">60664</option>
                            <option value="60639">60639</option>
                            <option value="60640">60640</option>
                            <option value="60644">60644</option>
                            <option value="60645">60645</option>
                            <option value="60649">60649</option>
                            <option value="60651">60651</option>
                            <option value="60654">60654</option>
                            <option value="60655">60655</option>
                            <option value="60657">60657</option>
                            <option value="60659">60659</option>
                            <option value="60666">60666</option>
                            <option value="60668">60668</option>
                            <option value="60673">60673</option>
                            <option value="60677">60677</option>
                            <option value="60669">60669</option>
                            <option value="60670">60670</option>
                            <option value="60674">60674</option>
                            <option value="60675">60675</option>
                            <option value="60678">60678</option>
                            <option value="60680">60680</option>
                            <option value="60681">60681</option>
                            <option value="60682">60682</option>
                            <option value="60686">60686</option>
                            <option value="60687">60687</option>
                            <option value="60688">60688</option>
                            <option value="60689">60689</option>
                            <option value="60694">60694</option>
                            <option value="60695">60695</option>
                            <option value="60697">60697</option>
                            <option value="60699">60699</option>
                            <option value="60684">60684</option>
                            <option value="60685">60685</option>
                            <option value="60690">60690</option>
                            <option value="60691">60691</option>
                            <option value="60693">60693</option>
                            <option value="60696">60696</option>
                            <option value="60701">60701</option>
                    </select>
                    </div>
                </form>
            </div>
            <div class="border col-start-2 col-end-3 row-start-1 row-end-2">
            Posts
            </div>
        </div>
      
    </main>
</x-layout>