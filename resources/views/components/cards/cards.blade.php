<div class="container pt-5">
    <div class="row">
        <div class="col-4">
            @component('components.card.card',
                [
                'image' => 'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-72736-dropdown-476668-image/dh-487-a0e9a6/770b761f/1635486188/audi-a3-limousine-tfsi.jpg',
                'title' => 'Title 100',
                'description' => 'Desc 1',
                ]
                )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                'image' => 'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-73240-dropdown-476801-image/dh-500-a0e9a6/3203b915/1635486191/audi-a7-sportback-tfsi-e-frontansicht.jpg',
                'title' => 'Title 2',
                'description' => 'Desc 2',
                ]
                )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                'image' => 'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-73404-dropdown-476862-image/dh-487-a0e9a6/96de6158/1635486193/1277x718-audi-q3-sportback-tfsi-e-rear-q3-2020-1408-oe.jpg',
                'title' => 'Title 3',
                'description' => 'Desc 3',
                ]
                )
            @endcomponent
        </div>
    </div>
</div>
