@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>
<div class="container   messagerie">
     <div class="row">
        <div class="nav col-md-2 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" contacts_lists>
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
        <div class="tab-content col-md-6 " id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                abc
                </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                none
                </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                ...
                </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ab, molestiae explicabo voluptates voluptatibus perferendis saepe sequi sed illo, repellendus blanditiis magnam fuga error quod! Velit officia odio repellat aliquam?
            </div>
        </div>
    </div>
    
</div>
